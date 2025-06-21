<?php

namespace Hanafalah\ModuleInformedConsent\Schemas;

use Hanafalah\LaravelSupport\Schemas\Unicode;
use Hanafalah\ModuleInformedConsent\Contracts\Data\MasterInformedConsentData;
use Hanafalah\ModuleInformedConsent\Contracts\Schemas\MasterInformedConsent as ContractsMasterInformedConsent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MasterInformedConsent extends Unicode implements ContractsMasterInformedConsent
{
    protected string $__entity = 'MasterInformedConsent';
    public static $master_informed_consent_model;
    protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'master_informed_consent',
            'tags'     => ['master_informed_consent', 'master_informed_consent-index'],
            'forever'  => true
        ]
    ];

    public function prepareStoreMasterInformedConsent(MasterInformedConsentData $master_informed_consent_dto): Model{     
        $master_informed_consent = $this->prepareStoreUnicode($master_informed_consent_dto);       
        return static::$master_informed_consent_model = $master_informed_consent;
    }

    public function master_informed_consent(mixed $conditionals = null): Builder{
        return $this->unicode($conditionals);
    }
}
