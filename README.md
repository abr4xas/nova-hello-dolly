

# Hello Dolly from WordPress to Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abr4xas/nova-hello-dolly.svg?style=flat-square)](https://packagist.org/packages/abr4xas/nova-hello-dolly)
[![Total Downloads](https://img.shields.io/packagist/dt/abr4xas/nova-hello-dolly.svg?style=flat-square)](https://packagist.org/packages/abr4xas/nova-hello-dolly)

[![Become a Patron!](https://img.shields.io/badge/become-a_patron!-red.svg?logo=patreon&style=flat)](https://www.patreon.com/bePatron?u=252896)



![](nova-hello-dolly.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require abr4xas/nova-hello-dolly
```

Next up, you must register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function cards()
{
    return [
        // ...
        new NovaHelloDolly,
    ];
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please use the issue tracker.

## Credits

- [Angel Cruz](https://github.com/abr4xas)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
