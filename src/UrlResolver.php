<?php

namespace Honda\UrlResolver;

use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UrlResolver
{
    /** @param array<string|int, mixed> $context */
    public static function guess(string $url = '', array $context = []): string
    {
        if ($url === '') {
            /* @phpstan-ignore-next-line */
            return url()->current();
        }

        try {
            return route($url, $context);
        } catch (RouteNotFoundException) {
            /** @var string $url */
            $url = url($url);
        }

        return $url;
    }
}
