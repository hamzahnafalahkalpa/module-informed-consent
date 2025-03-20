<?php

namespace Hanafalah\ModuleInformedConsent\Schemas;

use Hanafalah\ModuleInformedConsent\Contracts;
use Hanafalah\LaravelSupport\Supports\PackageManagement;

class MasterInfomedConsent extends PackageManagement implements Contracts\InformedConsent
{
    protected array $__guard   = ['id'];
    protected array $__add     = ["name", "linked", 'status', "type", "label"];
    protected string $__entity = 'InformedConsentModel';
}
