<?php

namespace Hanafalah\ModuleInformedConsent\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleInformedConsent\Contracts\Schemas\InformedConsent;

class MasterInfomedConsent extends PackageManagement implements InformedConsent
{
    protected string $__entity = 'InformedConsentModel';
}
