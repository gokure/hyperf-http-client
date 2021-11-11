<?php

declare(strict_types=1);

namespace Gokure\Http\Client;

/**
 * @method static \GuzzleHttp\Promise\PromiseInterface response($body = null, $status = 200, $headers = [])
 * @method static \Gokure\Http\Client\Factory fake($callback = null)
 * @method static \Gokure\Http\Client\PendingRequest accept(string $contentType)
 * @method static \Gokure\Http\Client\PendingRequest acceptJson()
 * @method static \Gokure\Http\Client\PendingRequest asForm()
 * @method static \Gokure\Http\Client\PendingRequest asJson()
 * @method static \Gokure\Http\Client\PendingRequest asMultipart()
 * @method static \Gokure\Http\Client\PendingRequest async()
 * @method static \Gokure\Http\Client\PendingRequest attach(string|array $name, string $contents = '', string|null $filename = null, array $headers = [])
 * @method static \Gokure\Http\Client\PendingRequest baseUrl(string $url)
 * @method static \Gokure\Http\Client\PendingRequest beforeSending(callable $callback)
 * @method static \Gokure\Http\Client\PendingRequest bodyFormat(string $format)
 * @method static \Gokure\Http\Client\PendingRequest contentType(string $contentType)
 * @method static \Gokure\Http\Client\PendingRequest dd()
 * @method static \Gokure\Http\Client\PendingRequest dump()
 * @method static \Gokure\Http\Client\PendingRequest retry(int $times, int $sleep = 0, ?callable $when = null)
 * @method static \Gokure\Http\Client\PendingRequest sink(string|resource $to)
 * @method static \Gokure\Http\Client\PendingRequest stub(callable $callback)
 * @method static \Gokure\Http\Client\PendingRequest timeout(int $seconds)
 * @method static \Gokure\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
 * @method static \Gokure\Http\Client\PendingRequest withBody(resource|string $content, string $contentType)
 * @method static \Gokure\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
 * @method static \Gokure\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
 * @method static \Gokure\Http\Client\PendingRequest withHeaders(array $headers)
 * @method static \Gokure\Http\Client\PendingRequest withMiddleware(callable $middleware)
 * @method static \Gokure\Http\Client\PendingRequest withOptions(array $options)
 * @method static \Gokure\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
 * @method static \Gokure\Http\Client\PendingRequest withUserAgent(string $userAgent)
 * @method static \Gokure\Http\Client\PendingRequest withoutRedirecting()
 * @method static \Gokure\Http\Client\PendingRequest withoutVerifying()
 * @method static array pool(callable $callback)
 * @method static \Gokure\Http\Client\Response delete(string $url, array $data = [])
 * @method static \Gokure\Http\Client\Response get(string $url, array|string|null $query = null)
 * @method static \Gokure\Http\Client\Response head(string $url, array|string|null $query = null)
 * @method static \Gokure\Http\Client\Response patch(string $url, array $data = [])
 * @method static \Gokure\Http\Client\Response post(string $url, array $data = [])
 * @method static \Gokure\Http\Client\Response put(string $url, array $data = [])
 * @method static \Gokure\Http\Client\Response send(string $method, string $url, array $options = [])
 * @method static \Gokure\Http\Client\ResponseSequence fakeSequence(string $urlPattern = '*')
 * @method static void assertSent(callable $callback)
 * @method static void assertSentInOrder(array $callbacks)
 * @method static void assertNotSent(callable $callback)
 * @method static void assertNothingSent()
 * @method static void assertSentCount(int $count)
 * @method static void assertSequencesAreEmpty()
 *
 * @see \Gokure\Http\Client\Factory
 */
class Http
{
    public static function __callStatic($method, $args)
    {
        return make(Factory::class)->{$method}(...$args);
    }
}
