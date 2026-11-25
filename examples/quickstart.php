<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

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
