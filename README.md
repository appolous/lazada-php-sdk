[![Latest Version on Packagist](https://img.shields.io/packagist/v/appolous/lazada-php-sdk.svg?style=flat-square)](https://packagist.org/packages/appolous/lazada-php-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/appolous/lazada-php-sdk.svg?style=flat-square)](https://packagist.org/packages/appolous/lazada-php-sdk)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

# Lazada PHP SDK for Laravel

This PHP SDK is available to download at https://open.lazada.com

Support Laravel 7.x / 8.x / 9.x / 10.x / 11.x


## Installation

Via Composer

`composer require appolous/lazada-php-sdk`


## How To Use 

```php
use Lazada\LazopClient;
use Lazada\LazopRequest;


$lazadaUrl = "https://api.lazada.com.my/rest";
$apiKey = "YOURAPIKEY";
$apiSecret = "YOURAPISECRET";

$lazOp = new LazopClient($lazadaUrl, $apiKey, $apiSecret);
$lazRequest = new LazopRequest('/category/tree/get', 'GET');

// Request Params
$lazRequest->addApiParam($key, $param);

// Upload files
$lazRequest->addFileParam('image', file_get_contents($file));

// Process API 
$response = $lazOp->execute($lazRequest, $token); // JSON Response
```
You can find the required parameters here: https://open.lazada.com/apps/doc/api


## Credits

- [Alan Yeong](https://github.com/alanyeong)
- [Ibnu Halim Mustofa](https://github.com/ibnuhalimm)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.