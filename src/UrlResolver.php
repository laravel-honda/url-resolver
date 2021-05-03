<?php

namespace Honda\UrlResolver;

use Illuminate\Routing\UrlGenerator;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UrlResolver
{
    public static function guess(?string $url = '', array $context = []): string
    {
        if (empty($url)) {
            return app(UrlGenerator::class)->to(
                app('request')->path()
            );
        }

        try {
            return route($url, $context);
        } catch (RouteNotFoundException $_) {
            /** @var string $url */
            $url = url($url);
        }

        return $url;
    }
}
