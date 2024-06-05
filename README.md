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
You can find the required parameters here: https://open.lazada.com/doc/api.htm


## Credits

[Ibnu Halim Mustofa](https://github.com/ibnuhalimm)
