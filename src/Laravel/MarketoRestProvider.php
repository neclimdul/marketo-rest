<?php

namespace NecLimDul\MarketoRest\Laravel;

use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\ServiceProvider;
use NecLimDul\MarketoRest\Asset\Api\ChannelsApi;
use NecLimDul\MarketoRest\Asset\Api\EmailsApi;
use NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi;
use NecLimDul\MarketoRest\Asset\Api\FileContentsApi;
use NecLimDul\MarketoRest\Asset\Api\FilesApi;
use NecLimDul\MarketoRest\Asset\Api\FoldersApi;
use NecLimDul\MarketoRest\Asset\Api\FormFieldsApi;
use NecLimDul\MarketoRest\Asset\Api\FormsApi;
use NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi;
use NecLimDul\MarketoRest\Asset\Api\LandingPageRedirectRulesApi;
use NecLimDul\MarketoRest\Asset\Api\LandingPagesApi;
use NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi;
use NecLimDul\MarketoRest\Asset\Api\ProgramsApi;
use NecLimDul\MarketoRest\Asset\Api\SegmentsApi;
use NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi;
use NecLimDul\MarketoRest\Asset\Api\SmartListsApi;
use NecLimDul\MarketoRest\Asset\Api\SnippetsApi;
use NecLimDul\MarketoRest\Asset\Api\StaticListsApi;
use NecLimDul\MarketoRest\Asset\Api\TagsApi;
use NecLimDul\MarketoRest\Asset\Api\TokensApi;
use NecLimDul\MarketoRest\Asset\Configuration as AssetConfiguration;
use NecLimDul\MarketoRest\ClientFactory;
use NecLimDul\MarketoRest\Identity\Api\IdentityApi;
use NecLimDul\MarketoRest\Identity\Configuration as IdentityConfiguration;
use NecLimDul\MarketoRest\Lead\Api\ActivitiesApi;
use NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi;
use NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi;
use NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi;
use NecLimDul\MarketoRest\Lead\Api\BulkImportCustomObjectsApi;
use NecLimDul\MarketoRest\Lead\Api\BulkImportLeadsApi;
use NecLimDul\MarketoRest\Lead\Api\BulkImportProgramMembersApi;
use NecLimDul\MarketoRest\Lead\Api\CampaignsApi;
use NecLimDul\MarketoRest\Lead\Api\CompaniesApi;
use NecLimDul\MarketoRest\Lead\Api\CustomObjectsApi;
use NecLimDul\MarketoRest\Lead\Api\LeadsApi;
use NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi;
use NecLimDul\MarketoRest\Lead\Api\NamedAccountsApi;
use NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi;
use NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi;
use NecLimDul\MarketoRest\Lead\Api\StaticListsApi as LeadStaticListsApi;
use NecLimDul\MarketoRest\Lead\Api\UsageApi;
use NecLimDul\MarketoRest\Lead\Configuration as LeadConfiguration;
use NecLimDul\OAuth2\Client\Provider\Marketo;

/**
 * Laravel service provider class.
 */
class MarketoRestProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * @var int
     */
    protected $timeout;


    public function boot()
    {
        // Publish config files.
        $this->publishes([
            __DIR__ . '/../config/config.php' => $this->app->basePath() . '/config/marketo_rest.php',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'marketo_rest');
        $system_config = $this->app->get('config');

        // Identity API works different so don't register it the same. Also,
        // with our oauth wrapper, it shouldn't be needed.
        $client = ClientFactory::create([
            'baseUrl' => $system_config['marketo_rest.baseUrl'],
        ]);
        $config = IdentityConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(IdentityApi::class, $client, $config);

        $client = ClientFactory::createOauthClient([
            'clientId' => $system_config['marketo_rest.clientId'],
            'clientSecret' => $system_config['marketo_rest.clientSecret'],
            'baseUrl' => $system_config['marketo_rest.baseUrl'],
        ]);

        // Asset APIs
        $config = AssetConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(ChannelsApi::class, $client, $config);
        $this->registerSingleton(EmailsApi::class, $client, $config);
        $this->registerSingleton(EmailTemplatesApi::class, $client, $config);
        $this->registerSingleton(FileContentsApi::class, $client, $config);
        $this->registerSingleton(FilesApi::class, $client, $config);
        $this->registerSingleton(FoldersApi::class, $client, $config);
        $this->registerSingleton(FormFieldsApi::class, $client, $config);
        $this->registerSingleton(FormsApi::class, $client, $config);
        $this->registerSingleton(LandingPageContentApi::class, $client, $config);
        $this->registerSingleton(LandingPageRedirectRulesApi::class, $client, $config);
        $this->registerSingleton(LandingPageTemplatesApi::class, $client, $config);
        $this->registerSingleton(LandingPagesApi::class, $client, $config);
        $this->registerSingleton(ProgramsApi::class, $client, $config);
        $this->registerSingleton(SegmentsApi::class, $client, $config);
        $this->registerSingleton(SmartCampaignsApi::class, $client, $config);
        $this->registerSingleton(SmartListsApi::class, $client, $config);
        $this->registerSingleton(SnippetsApi::class, $client, $config);
        $this->registerSingleton(StaticListsApi::class, $client, $config);
        $this->registerSingleton(TagsApi::class, $client, $config);
        $this->registerSingleton(TokensApi::class, $client, $config);

        // Lead APIs
        $config = LeadConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(ActivitiesApi::class, $client, $config);
        $this->registerSingleton(BulkExportActivitiesApi::class, $client, $config);
        $this->registerSingleton(BulkExportLeadsApi::class, $client, $config);
        $this->registerSingleton(BulkExportProgramMembersApi::class, $client, $config);
        $this->registerSingleton(BulkImportCustomObjectsApi::class, $client, $config);
        $this->registerSingleton(BulkImportLeadsApi::class, $client, $config);
        $this->registerSingleton(BulkImportProgramMembersApi::class, $client, $config);
        $this->registerSingleton(CampaignsApi::class, $client, $config);
        $this->registerSingleton(CompaniesApi::class, $client, $config);
        $this->registerSingleton(CustomObjectsApi::class, $client, $config);
        $this->registerSingleton(LeadsApi::class, $client, $config);
        $this->registerSingleton(NamedAccountListsApi::class, $client, $config);
        $this->registerSingleton(NamedAccountsApi::class, $client, $config);
        $this->registerSingleton(OpportunitiesApi::class, $client, $config);
        $this->registerSingleton(SalesPersonsApi::class, $client, $config);
        $this->registerSingleton(LeadStaticListsApi::class, $client, $config);
        $this->registerSingleton(UsageApi::class, $client, $config);
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [

            // Asset APIs
            ChannelsApi::class,
            EmailTemplatesApi::class,
            EmailsApi::class,
            FileContentsApi::class,
            FilesApi::class,
            FoldersApi::class,
            FormFieldsApi::class,
            FormsApi::class,
            LandingPageContentApi::class,
            LandingPageRedirectRulesApi::class,
            LandingPageTemplatesApi::class,
            LandingPagesApi::class,
            ProgramsApi::class,
            SegmentsApi::class,
            SmartCampaignsApi::class,
            SmartListsApi::class,
            SnippetsApi::class,
            StaticListsApi::class,
            TagsApi::class,
            TokensApi::class,

            IdentityApi::class,

            // Lead APIs
            ActivitiesApi::class,
            BulkExportActivitiesApi::class,
            BulkExportLeadsApi::class,
            BulkExportProgramMembersApi::class,
            BulkImportCustomObjectsApi::class,
            BulkImportLeadsApi::class,
            BulkImportProgramMembersApi::class,
            CampaignsApi::class,
            CompaniesApi::class,
            CustomObjectsApi::class,
            LeadsApi::class,
            NamedAccountListsApi::class,
            NamedAccountsApi::class,
            OpportunitiesApi::class,
            SalesPersonsApi::class,
            LeadStaticListsApi::class,
            UsageApi::class,
        ];
    }

    /**
     * Wraps some logic for quickly creating aliased
     * @param $className
     * @param $client
     * @param $config
     */
    private function registerSingleton($className, $client, $config)
    {
        $this->app->singleton($className, function () use ($className, $client, $config) {
            return new $className(
                $client,
                $config
            );
        });
    }

}
