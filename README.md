# Never accidentally edit your Filament production panel again!

Filament Oops displays a clear 'Production' warning on your production Filament panel, helping you avoid costly mistakes and keeping your development safe.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saasykit/filament-oops.svg?style=flat-square)](https://packagist.org/packages/saasykit/filament-oops)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/saasykit/filament-oops/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/saasykit/filament-oops/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/saasykit/filament-oops/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/saasykit/filament-oops/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/saasykit/filament-oops.svg?style=flat-square)](https://packagist.org/packages/saasykit/filament-oops)


Filament Oops uses the `APP_ENV` environment variable to determine the environment your Filament panel is running in. If you're running your Filament panel in production, Filament Oops will display a clear 'Production' warning on your panel.



## Installation

You can install the package via composer:

```bash
composer require saasykit/filament-oops
```

Optionally, you can publish the views using (in case you want to customize the views):

```bash
php artisan vendor:publish --tag="filament-oops-views"
```

## Usage

```php
$filamentOops = new Saasykit\FilamentOops();
echo $filamentOops->echoPhrase('Hello, Saasykit!');
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SaaSykit](https://github.com/aswilam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
