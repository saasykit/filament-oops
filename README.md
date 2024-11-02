# Never accidentally edit your Filament production panel again! Filament Oops displays a clear 'Production' warning, helping you avoid costly mistakes and keeping your development safe.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saasykit/filament-oops.svg?style=flat-square)](https://packagist.org/packages/saasykit/filament-oops)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/saasykit/filament-oops/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/saasykit/filament-oops/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/saasykit/filament-oops/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/saasykit/filament-oops/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/saasykit/filament-oops.svg?style=flat-square)](https://packagist.org/packages/saasykit/filament-oops)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require saasykit/filament-oops
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-oops-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-oops-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-oops-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentOops = new Saasykit\FilamentOops();
echo $filamentOops->echoPhrase('Hello, Saasykit!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SaaSykit](https://github.com/aswilam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
