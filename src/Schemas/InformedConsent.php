<?php

namespace Hanafalah\ModuleInformedConsent\Schemas;

use Hanafalah\ModuleInformedConsent\Contracts;
use Hanafalah\LaravelSupport\Supports\PackageManagement;

class MasterInfomedConsent extends PackageManagement implements Contracts\InformedConsent
{
    protected string $__entity = 'InformedConsentModel';
}
