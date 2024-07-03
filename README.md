[![Latest Stable Version](https://poser.pugx.org/appolous/lazada-php-sdk/v/stable)](https://packagist.org/packages/appolous/lazada-php-sdk)
[![Total Downloads](https://poser.pugx.org/appolous/lazada-php-sdk/downloads)](https://packagist.org/packages/appolous/lazada-php-sdk)
[![MIT Licensed](https://poser.pugx.org/appolous/lazada-php-sdk/license)](LICENSE.md)
[![Buy Me A Coffee](https://img.shields.io/badge/-buy_me_a%C2%A0coffee-gray?logo=buy-me-a-coffee)](https://buymeacoffee.com/appolous)

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
- [Afiq Sazlan](https://github.com/afiqsazlan)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.