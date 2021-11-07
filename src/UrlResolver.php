<?php

namespace Honda\UrlResolver;

use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UrlResolver
{
    /**
     * @param array<string|int, mixed> $context
     */
    public static function guess(?string $url = '', array $context = []): string
    {
        if (is_null($url)) {
            trigger_error('Passing null to the UrlResolver is deprecated and will be removed in the next major version. Pass an empty string instead.', E_USER_DEPRECATED);
        }

        // TODO: Next major version change that to just $url === ''
        if ($url === '' || $url === null) {
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
