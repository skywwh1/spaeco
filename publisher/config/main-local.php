<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Publisher-UmoZ2p7Utj-_hdUN_m2sBVMOZoKTr-rL',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
//    $config['modules']['gii'] = [
//        'class' => 'yii\gii\Module',
//    ];
    $config['modules']['gii'] = array('class'=>'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.*.*', '192.168.56.10'],
    );
}

return $config;
