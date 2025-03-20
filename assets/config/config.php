<?php

use Gii\ModuleInformedConsent\{
    Models as ModuleInformedConsent,
    Contracts
};

return [
    'contracts'  => [
        'informed_consent'        => Contracts\InformedConsent::class,
        'master_informed_consent' => Contracts\MasterInformedConsent::class,
        'module_informed_consent' => Contracts\ModuleInformedConsent::class
    ],
    'database'   => [
        'models' => [
            'MasterInformedConsent' => ModuleInformedConsent\MasterInformedConsent::class,
            'InformedConsent'       => ModuleInformedConsent\InformedConsent::class,
        ]
    ],
];
