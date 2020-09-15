# Marketo Rest API Library

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package provides a simple set of classes for interacting with Marketo's Rest API. Built using Swagger Codegen directly from Marketo's documentation.

## Install using composer


```
composer require neclimdul/marketo-rest
```

You can read more about Composer on its [official webpage](https://getcomposer.org).


## Usage

### Laravel
This package comes with a provider to register all the API's and configuration.


### Custom

```php
<?php
$system_config = ;
$client = \NecLimDul\MarketoRest\ClientFactory::createOauthClient(new \NecLimDul\MarketoRest\Configuration([
    'clientId' => 'ASDFASDF',
    'clientSecret' => 'ASDFASDF',
    'baseUrl' => 'https://example.mktorest.com',
]));
$config = \NecLimDul\MarketoRest\LeadConfiguration::getDefaultConfiguration();
$config->setHost('https://example.mktorest.com');
$service = new \NecLimDul\MarketoRest\LeadsApi($client, $config);
$service->getLeadByIdUsingGET(16);
?>
```

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Contributing

Pull requests are welcome.

## Credits

- [James Gilliland](https://github.com/neclimdul)

## License

The MIT License (MIT). Please see [License File](https://github.com/neclimdul/marketo-rest/blob/master/LICENSE) for more information.
