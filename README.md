# Easy JSON Responses for your Laravel API

This package provides an easy way to return consistent, formatted JSON responses from your Laravel application to your front end Javascript framework.

Works with Laravel 5.4 and newer.

## Installation

### For Laravel 5.5 +
This package can be auto discovered by Laravel.

### For Laravel 5.4 or disabled package discovery
First, use Composer to pull in the package.

```bash
composer require nuewave/laravel-unified-responder
```

Then, add the service provider to your `config/app.php`.

```php
'providers' => [
    Nuewave\UnifiedResponder\UnifiedResponderServiceProvider::class,
];
```

## Usage
It's really straight forward to use Unified Responder. In the example below, I have broken down the pieces required to create a response.

`$httpCode` is the code to return to the browser, such as `200: OK` or `404: Not Found`.

`$apiCode` corresponds to a code you keep record of to track where this message is coming from in your codebase.

`$data` contains any data you want to return. It may be an array of objects or a single object.

```php
$httpCode = 401;
$apiCode = 2006;
$data = [
  'message' => 'Can\'t do that. You\'re not authorized.'
];

$response = UnifiedResponder::createResponseFromData($httpCode, $apiCode, $data);
return $response;
```

Another way...

```php
return UnifiedResponder::createResponseFromData(200, 2008, [
  'id' => 24,
  'name' => 'Wells Fargo',
  'exchange' => 'nyse',
  'symbol' => 'wfc',
  'founded_at' => '1852-03-18 00:00:00'
]);
```

... which will output the following:

```json
{
    "status": "200",
    "code": "2008",
    "data": {
        "id": 24,
        "name": "Wells Fargo",
        "exchange": "nyse",
        "symbol": "wfc",
        "founded_at": "1852-03-18 00:00:00"
    }
}
```

For issues, submit an issue here on GitHub. If you think you can improve the package, please do submit a pull request :)
