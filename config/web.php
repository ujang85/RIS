<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'Radiologi',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '7rWuNPy8aZyKsYbpMmc3idhU1AaWpN_L',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        
       
        /*
        'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=rsjogja-app', //maybe other dbms such as psql,...
        'username' => 'root',
        'password' => '',
        ], 

		'db' => [
            'class' => 'yii\db\Connection',
        'driverName' => 'sqlsrv',
        'dsn' => 'sqlsrv:Server=localhost;Database=rsudkota_2013',
        'username' => 'sa',
        'password' => 'Agussalim7',
        'charset' => 'utf8'
        ],
        */
        'db' => [
        'class' => 'yii\db\Connection',
       'dsn' => 'mysql:host=192.168.128.3;dbname=radiologi', //maybe other dbms such as psql,...
        'username' => 'ujang',
        'password' => '123456',
        ], 

        'dbrs' => [
            'class' => 'yii\db\Connection',
        'driverName' => 'sqlsrv',
        'dsn' => 'sqlsrv:Server=192.168.128.3;Database=rsudkota2013',
     //   'dsn' => 'sqlsrv:Server=localhost;Database=rsudkota_2013',
        'username' => 'sa',
        'password' => 'Agussalim7',
        'charset' => 'utf8'
        ],

        
        /*
        'db1' => $db1,
        'db2' => $db2,
    

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],   */
           
    ],
    'modules' => [
                'gridview' =>  [
                    'class' => '\kartik\grid\Module',
                ],
            ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
