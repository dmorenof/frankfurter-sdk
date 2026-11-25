# Frankfurter SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/frankfurter-sdk.svg)](https://packagist.org/packages/dmorenof/frankfurter-sdk)

**Current and historical exchange rates as typed PHP, no API key.**

Latest rates, rates on a date, rate series over a period and the list of currencies from the Frankfurter API (European Central Bank and other public providers), with typed answers and no key to manage.

> Unofficial. Not affiliated with, endorsed by or supported by the Frankfurter project. See [NOTICE.md](NOTICE.md).

## Why this SDK

- Free API without a key: install and call.
- Run against the live service: the calls in the quick start were made for real.
- Currencies and rates typed: a base currency is an enum, a rate table a typed map.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/frankfurter.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 5 operations and 7 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/frankfurter-sdk
```

## Quick start

```php
<?php
use FrankfurterSDK\Configuration;
use FrankfurterSDK\Enums\Base;
use FrankfurterSDK\FrankfurterAPISDK;
use FrankfurterSDK\GetParams\Latest as LatestParams;
use FrankfurterSDK\Latest;

$configuration = new Configuration();
FrankfurterAPISDK::configure($configuration);

$params = new LatestParams();
$params->base = Base::USD;
$params->symbols = ['EUR', 'GBP'];

$latest = Latest::get($params);

echo json_encode($latest), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

5 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `/` | 3 |
| `currencies` | 1 |
| `latest` | 1 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Rates are informational and come from public providers such as the European Central Bank; this is not financial advice.
- The service has rate limits: cache what you can.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://frankfurter.dev/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
