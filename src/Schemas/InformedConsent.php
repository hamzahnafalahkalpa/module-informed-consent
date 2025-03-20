<?php

namespace Gii\ModuleInformedConsent\Schemas;

use Gii\ModuleInformedConsent\Contracts;
use Zahzah\LaravelSupport\Supports\PackageManagement;

class MasterInfomedConsent extends PackageManagement implements Contracts\InformedConsent{
    protected array $__guard   = ['id'];
    protected array $__add     = ["name","linked",'status',"type","label"];
    protected string $__entity = 'InformedConsentModel';
}
