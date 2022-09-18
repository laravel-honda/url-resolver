[<img src="art/banner.png" width="419px" />](art/banner.png)

# Url Resolver for Laravel

Resolve routes and urls with one function.

[![Tests](https://github.com/laravel-honda/url-resolver/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/laravel-honda/url-resolver/actions/workflows/tests.yml)
[![Formats](https://github.com/laravel-honda/url-resolver/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/laravel-honda/url-resolver/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/honda/url-resolver/version)](//packagist.org/packages/honda/url-resolver)
[![Total Downloads](https://poser.pugx.org/honda/url-resolver/downloads)](//packagist.org/packages/honda/url-resolver)
[![License](https://poser.pugx.org/honda/url-resolver/license)](//packagist.org/packages/honda/url-resolver)

## Installation

> Requires [PHP 8.0+](https://php.net/releases)

You can install the package via composer:

```bash
composer require felixdorn/laravel-url-resolver
```

## Usage

```php
use Honda\UrlResolver\UrlResolver;

UrlResolver::guess('welcome', []); 
```

* **The route exists:** `route('...', $context)`
* **The route does not exist:** `url(...')`
* **The "route" is an external URL:** returns it

## Testing

Runs the entire test suite:

```bash
composer test
```

Runs PHP CS Fixer:

```bash
composer lint
```

Runs PHPStan:

```bash
composer test:types
```

Runs unit tests

```bash
composer test:unit
```

**Url Resolver for Laravel** was created by [Félix Dorn](https://twitter.com/afelixdorn)  under the [MIT License](LICENSE.md)
