<?php

use Honda\UrlResolver\UrlResolver;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase;

uses(TestCase::class);

it('can resolve a laravel route', function () {
    Route::get('/here', fn () => 'Hello')->name('my-route');

    expect(UrlResolver::guess('my-route'))->toBe('http://localhost/here');
});

it('can resolve a laravel route with context', function () {
    Route::get('/here/{name}', fn () => 'Hello')->name('my-route');

    expect(UrlResolver::guess('my-route', [
        'name' => 'Hello',
    ]))->toBe('http://localhost/here/Hello');
});

it('returns the given url if the route does not exist', function () {
    expect(UrlResolver::guess('some-route'))->toBe('http://localhost/some-route');
});

it('returns the current url if null is given', function () {
    expect(UrlResolver::guess())->toBe('http://localhost');
});
