<?php

namespace Honda\Support\Support;

use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UrlResolver
{
    public static function guess(?string $url = '', array $context = []): string
    {
        if (empty($url)) {
            return '/' . ltrim(request()->path(), '/');
        }

        if (str_contains($url, '/')) {
            return $url;
        }

        try {
            return route($url, $context);
        } catch (RouteNotFoundException $exception) {
            return $url;
        }
    }
}
