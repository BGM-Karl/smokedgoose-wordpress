<?php

use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Exceptions\RtnException;

require __DIR__ . '/../../../vendor/autoload.php';

try {
    $factory = new Factory([
        'hashKey' => '5294y06JbISpM5x9',
        'hashIv' => 'v77hoKGq4kWxNNIS',
        'hashMethod' => 'md5',
    ]);
    $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');

    $input = [
        'MerchantID' => '2000132',
        'LogisticsSubType' => 'FAMI',

        // 請參考 example/Logistics/Domestic/GetCreateTestDataResponse.php 範例開發
        'ClientReplyURL' => 'https://www.ecpay.com.tw/example/client-reply',

    ];
    $action = 'https://logistics-stage.ecpay.com.tw/Express/CreateTestData';

    echo $autoSubmitFormService->generate($input, $action);
} catch (RtnException $e) {
    echo '(' . $e->getCode() . ')' . $e->getMessage() . PHP_EOL;
}
