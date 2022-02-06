<?php

namespace NecLimDul\MarketoRest\Laravel;

use GuzzleHttp\Client;
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
use NecLimDul\MarketoRest\Configuration;
use NecLimDul\MarketoRest\Identity\Api\IdentityApi;
use NecLimDul\MarketoRest\Identity\Configuration as IdentityConfiguration;
use NecLimDul\MarketoRest\Lead\Api\ActivitiesApi;
use NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi;
use NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi;
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
use NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi;
use NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi;
use NecLimDul\MarketoRest\Lead\Api\StaticListsApi as LeadStaticListsApi;
use NecLimDul\MarketoRest\Lead\Api\UsageApi;
use NecLimDul\MarketoRest\Lead\Configuration as LeadConfiguration;

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
            __DIR__ . '/../../config/config.php' => $this->app->basePath() . '/config/marketo_rest.php',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'marketo_rest');
        $system_config = $this->app->get('config');

        $configuration = new Configuration([
            'clientId' => $system_config['marketo_rest.clientId'],
            'clientSecret' => $system_config['marketo_rest.clientSecret'],
            'baseUrl' => $system_config['marketo_rest.baseUrl'],
        ]);
        $client = ClientFactory::create($configuration);
        $oauthClient = ClientFactory::createOauthClient($configuration);

        // Identity API works different so don't register it the same. Also,
        // with our oauth wrapper, it shouldn't be needed.
        $config = IdentityConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(IdentityApi::class, $client, $config);

        // Asset APIs
        $config = AssetConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(ChannelsApi::class, $oauthClient, $config);
        $this->registerSingleton(EmailsApi::class, $oauthClient, $config);
        $this->registerSingleton(EmailTemplatesApi::class, $oauthClient, $config);
        $this->registerSingleton(FileContentsApi::class, $oauthClient, $config);
        $this->registerSingleton(FilesApi::class, $oauthClient, $config);
        $this->registerSingleton(FoldersApi::class, $oauthClient, $config);
        $this->registerSingleton(FormFieldsApi::class, $oauthClient, $config);
        $this->registerSingleton(FormsApi::class, $oauthClient, $config);
        $this->registerSingleton(LandingPageContentApi::class, $oauthClient, $config);
        $this->registerSingleton(LandingPageRedirectRulesApi::class, $oauthClient, $config);
        $this->registerSingleton(LandingPageTemplatesApi::class, $oauthClient, $config);
        $this->registerSingleton(LandingPagesApi::class, $oauthClient, $config);
        $this->registerSingleton(ProgramsApi::class, $oauthClient, $config);
        $this->registerSingleton(SegmentsApi::class, $oauthClient, $config);
        $this->registerSingleton(SmartCampaignsApi::class, $oauthClient, $config);
        $this->registerSingleton(SmartListsApi::class, $oauthClient, $config);
        $this->registerSingleton(SnippetsApi::class, $oauthClient, $config);
        $this->registerSingleton(StaticListsApi::class, $oauthClient, $config);
        $this->registerSingleton(TagsApi::class, $oauthClient, $config);
        $this->registerSingleton(TokensApi::class, $oauthClient, $config);

        // Lead APIs
        $config = LeadConfiguration::getDefaultConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->registerSingleton(ActivitiesApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkExportActivitiesApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkExportCustomObjectsApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkExportLeadsApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkExportProgramMembersApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkImportCustomObjectsApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkImportLeadsApi::class, $oauthClient, $config);
        $this->registerSingleton(BulkImportProgramMembersApi::class, $oauthClient, $config);
        $this->registerSingleton(CampaignsApi::class, $oauthClient, $config);
        $this->registerSingleton(CompaniesApi::class, $oauthClient, $config);
        $this->registerSingleton(CustomObjectsApi::class, $oauthClient, $config);
        $this->registerSingleton(LeadsApi::class, $oauthClient, $config);
        $this->registerSingleton(NamedAccountListsApi::class, $oauthClient, $config);
        $this->registerSingleton(NamedAccountsApi::class, $oauthClient, $config);
        $this->registerSingleton(OpportunitiesApi::class, $oauthClient, $config);
        $this->registerSingleton(ProgramMembersApi::class, $oauthClient, $config);
        $this->registerSingleton(SalesPersonsApi::class, $oauthClient, $config);
        $this->registerSingleton(LeadStaticListsApi::class, $oauthClient, $config);
        $this->registerSingleton(UsageApi::class, $oauthClient, $config);
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
            BulkExportCustomObjectsApi::class,
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
            ProgramMembersApi::class,
            SalesPersonsApi::class,
            LeadStaticListsApi::class,
            UsageApi::class,
        ];
    }

    /**
     * Wraps some logic for quickly creating aliased.
     *
     * @param class-string $className
     * @param \GuzzleHttp\Client $client
     * @param mixed $config
     */
    private function registerSingleton(string $className, Client $client, $config): void
    {
        $this->app->singleton($className, function () use ($className, $client, $config) {
            return new $className(
                $client,
                $config
            );
        });
    }

}
