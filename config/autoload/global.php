<?php
return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=corps;hostname=localhost',
        'username' => '',
        'password' => '',
    ],
    'service_manager' => [
        'factories' => [
            'LaminasDbAdapter'
            => 'Laminas\Db\Adapter\AdapterServiceFactory',
        ],
        ],
];

