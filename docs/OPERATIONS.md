# Frankfurter SDK for PHP: operations

5 operations. Each is a static method of a facade class (`FrankfurterSDK\...`); configure the SDK once with `FrankfurterAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Get available currencies | GET | `/currencies` | `Currencies::get()` |
| Get the latest rates | GET | `/latest` | `Latest::get()` |
| Get rates for a past date | GET | `/{date}` | `RootResource::getByDate()` |
| Get rates for a time period | GET | `/{start_date}..` | `StartDate::get()` |
| Get rates for a time period | GET | `/{start_date}..{end_date}` | `StartDateEndDate::get()` |
