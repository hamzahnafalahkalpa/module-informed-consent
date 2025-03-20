<?php

namespace Gii\ModuleInformedConsent\Models;

use Gii\ModuleInformedConsent\Resources\ViewInformedConsent;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;

class InformedConsent extends BaseModel {
    use HasUlids, HasProps;

    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    protected $list       = ['id','transaction_id','author_id','author_type',"master_consent_id","status","props"];
    protected $show       = [];

    public function toViewApi(){
        return new ViewInformedConsent($this);
    }

    public function toShowApi(){
        return new ViewInformedConsent($this);
    }

    //END EIGER SECTION
    public function author(){return $this->morphTo();}
    public function transaction(){return $this->belongsToModel("Transaction");}
    public function masterConsent(){return $this->belongsToModel("MasterInformedConsent",'master_consent_id',"id");}
}
