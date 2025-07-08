<?php

use Hanafalah\ModuleInformedConsent\{
    Models as ModuleInformedConsent,
    Contracts
};

return [
    'namespace' => 'Hanafalah\ModuleInformedConsent',
    'app' => [
        'contracts'  => [
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'data' => 'Data',
        'resource' => 'Resources',
        'request' => 'Requests',
        'migration' => '../assets/database/migrations'
    ],
    'database'   => [
        'models' => [
        ]
    ],
];
