<?php

namespace Gii\ModuleInformedConsent\Models;

use Gii\ModuleInformedConsent\Resources\ViewMasterConsent;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;
use Zahzah\MicroTenant\Concerns\Models\TenantConnection;

class MasterInformedConsent extends BaseModel {
    use HasProps,TenantConnection;

    protected $table      = "master_informed_consents";
    protected $list       = ['id','name','linked','status',"type","label","props"];
    protected $show       = [];

    public function toViewApi(){
        return new ViewMasterConsent($this);
    }

    public function toShowApi(){
        return new ViewMasterConsent($this);
    }

    //END EIGER SECTION
    public function priceComponent(){return $this->morphOneModel("PriceComponent","model");}
    public function priceComponents(){return $this->morphManyModel("PriceComponent","model");}
    public function informedConsent(){return $this->hasOneModel("InformedConsent",'master_consent_id');}
}
