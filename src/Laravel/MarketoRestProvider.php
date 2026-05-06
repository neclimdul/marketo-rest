<?php

namespace NecLimDul\MarketoRest\Laravel;

use GuzzleHttp\Psr7\HttpFactory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use NecLimDul\MarketoRest\Asset\Api\ChannelsApi;
use NecLimDul\MarketoRest\Asset\Api\EmailsApi;
use NecLimDul\MarketoRest\Asset\Api\EmailsNewApi;
use NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi;
use NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi;
use NecLimDul\MarketoRest\Asset\Api\FileContentsApi;
use NecLimDul\MarketoRest\Asset\Api\FilesApi;
use NecLimDul\MarketoRest\Asset\Api\FoldersApi;
use NecLimDul\MarketoRest\Asset\Api\FormFieldsApi;
use NecLimDul\MarketoRest\Asset\Api\FormsApi;
use NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi;
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
use Neclimdul\OpenapiPhp\Helper\Client;
use Neclimdul\OpenapiPhp\Helper\Configuration as BaseConfiguration;
use Neclimdul\OpenapiPhp\Helper\Model\ModelInterface;
use Neclimdul\OpenapiPhp\Helper\RequestFactory;
use Neclimdul\OpenapiPhp\Helper\Serialization\Deserializer;
use Neclimdul\OpenapiPhp\Helper\Serialization\Serializer;
use Psr\Container\ContainerInterface;

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

    public function boot(): void
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

        $this->app->singleton('marketo_rest_client', fn(ContainerInterface $app) => new Client(
            ClientFactory::createOauthClient(new Configuration([
                'clientId' => $system_config['marketo_rest.clientId'],
                'clientSecret' => $system_config['marketo_rest.clientSecret'],
                'baseUrl' => $system_config['marketo_rest.baseUrl'],
            ])),
            $app->get('marketo_rest_deserializer'),
        ));
        $this->app->singleton('marketo_rest_serializer', fn() => new Serializer(ModelInterface::class));
        $this->app->singleton('marketo_rest_deserializer', fn() => new Deserializer());


        // Asset APIs
        $config = new AssetConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->app->singleton(
            'marketo_rest_asset_request_factory',
            fn(ContainerInterface $app) => new RequestFactory(
                new HttpFactory(),
                $app->get('marketo_rest_serializer'),
                $config,
            ),
        );
        $this->registerSingleton(ChannelsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(EmailsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(EmailsNewApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(EmailTemplatesApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(EmailTemplatesNewApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FileContentsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FilesApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FoldersApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FormFieldsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FormsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(FragmentsNewApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(LandingPageContentApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(LandingPageRedirectRulesApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(LandingPagesApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(LandingPageTemplatesApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(ProgramsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(SegmentsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(SmartCampaignsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(SmartListsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(SnippetsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(StaticListsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(TagsApi::class, $config, 'marketo_rest_asset_request_factory');
        $this->registerSingleton(TokensApi::class, $config, 'marketo_rest_asset_request_factory');

        // Lead APIs
        $config = new LeadConfiguration();
        $config->setHost($system_config['marketo_rest.baseUrl']);
        $this->app->singleton(
            'marketo_rest_lead_request_factory',
            fn(ContainerInterface $app) => new RequestFactory(
                new HttpFactory(),
                $app->get('marketo_rest_serializer'),
                $config,
            ),
        );
        $this->registerSingleton(ActivitiesApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkExportActivitiesApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkExportCustomObjectsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkExportLeadsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkExportProgramMembersApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkImportCustomObjectsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkImportLeadsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(BulkImportProgramMembersApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(CampaignsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(CompaniesApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(CustomObjectsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(LeadsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(NamedAccountListsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(NamedAccountsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(OpportunitiesApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(ProgramMembersApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(SalesPersonsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(LeadStaticListsApi::class, $config, 'marketo_rest_lead_request_factory');
        $this->registerSingleton(UsageApi::class, $config, 'marketo_rest_lead_request_factory');
    }

    /**
     * {@inheritDoc}
     *
     * @phpstan-return class-string[]
     */
    public function provides()
    {
        return [

            // Asset APIs
            ChannelsApi::class,
            EmailsApi::class,
            EmailsNewApi::class,
            EmailTemplatesApi::class,
            EmailTemplatesNewApi::class,
            FileContentsApi::class,
            FilesApi::class,
            FoldersApi::class,
            FormFieldsApi::class,
            FormsApi::class,
            FragmentsNewApi::class,
            LandingPageContentApi::class,
            LandingPageRedirectRulesApi::class,
            LandingPagesApi::class,
            LandingPageTemplatesApi::class,
            ProgramsApi::class,
            SegmentsApi::class,
            SmartCampaignsApi::class,
            SmartListsApi::class,
            SnippetsApi::class,
            StaticListsApi::class,
            TagsApi::class,
            TokensApi::class,

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
     * @param BaseConfiguration $config
     * @param string $request_factory_service
     *   Request factory service.
     */
    private function registerSingleton(string $className, BaseConfiguration $config, string $request_factory_service): void
    {
        $this->app->singleton($className, fn(Container $app) => new $className(
            $config,
            $app->get('marketo_rest_client'),
            $app->get($request_factory_service),
            $app->get('marketo_rest_serializer'),
        ));
    }
}
