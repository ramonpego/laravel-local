# Execute commands on a local machine based on spatie/laravel-remote



[![Latest Version on Packagist](https://img.shields.io/packagist/v/ramonpego/laravel-local.svg?style=flat-square)](https://packagist.org/packages/ramonpego/laravel-local)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ramonpego/laravel-local/run-tests?label=tests)](https://github.com/ramonpego/laravel-local/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ramonpego/laravel-local/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ramonpego/laravel-local/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/ramonpego/laravel-local.svg?style=flat-square)](https://packagist.org/packages/ramonpego/laravel-local)

This package provides a command to execute CLI or Artisan command on a local server.

## Based on Spatie package consider support them

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-skeleton-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-skeleton-laravel)


## Installation

You can install the package via composer:

```bash
composer require ramonpego/laravel-local
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="RamonPego\Local\CommandServiceProvider" --tag="local-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * Here you can define the path prefix where the commands should be executed.
     */
    'default' => '/home',
    'path'=>env('COMMAND_PATH_PREFIX')
];
```

## Usage

```bash
php artisan local whoami
php artisan local cache:clear --artisan
php artisan local optimize -a
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

- [Ramon Pêgo](https://github.com/ramonpego)
- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
