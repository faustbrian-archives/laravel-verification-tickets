# Laravel Verification Tickets

[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-verification-tickets)](https://packagist.org/packages/kodekeep/laravel-verification-tickets)
[![Software License](https://badgen.net/packagist/license/kodekeep/laravel-verification-tickets)](https://packagist.org/packages/kodekeep/laravel-verification-tickets)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-verification-tickets/run-tests?label=tests)](https://github.com/kodekeep/laravel-verification-tickets/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/laravel-verification-tickets)](https://codeclimate.com/github/kodekeep/laravel-verification-tickets)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/laravel-verification-tickets)](https://codeclimate.com/github/kodekeep/laravel-verification-tickets)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-verification-tickets)](https://packagist.org/packages/kodekeep/laravel-verification-tickets)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides an easy way of implementing entity verification.

## Installation

```bash
composer require kodekeep/laravel-verification-tickets
```

## Usage

```php
$skeleton = new KodeKeep\VerificationTicket();
echo $skeleton->echoPhrase('Hello, KodeKeep!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Laravel Verification Tickets is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
