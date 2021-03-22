[<img src="art/banner.png" width="419px" />](art/banner.png)

# Url Resolver

[![Tests](https://github.com/laravel-honda/url-resolver/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/laravel-honda/url-resolver/actions/workflows/tests.yml)
[![Formats](https://github.com/laravel-honda/url-resolver/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/laravel-honda/url-resolver/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/honda/url-resolver/version)](//packagist.org/packages/honda/url-resolver)
[![Total Downloads](https://poser.pugx.org/honda/url-resolver/downloads)](//packagist.org/packages/honda/url-resolver) 
[![License](https://poser.pugx.org/honda/url-resolver/license)](//packagist.org/packages/honda/url-resolver)

## Installation

> Requires [PHP7.4.0+](https://php.net/releases)

You can install the package via composer:

```bash
composer require honda/url-resolver
```

## Usage

```php
use Honda\UrlResolver\UrlResolver;

UrlResolver::guess('welcome'); 
```

* If the route welcome exist then it does route('welcome') under the hood
* If the route welcome does not exist it does url('welcome') under the hood
* If the route passed is null then it returns the current url

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

Url Resolver was created by [Félix Dorn](https://twitter.com/afelixdorn)  under the [MIT License](LICENSE.md)