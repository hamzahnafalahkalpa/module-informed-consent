<?php

namespace Gii\ModuleInformedConsent\Resources;


use Zahzah\LaravelSupport\Resources\ApiResource;
use Gii\ModuleService\Enums\ServiceItem\Flag;
use Zahzah\ModuleTransaction\Resources\PriceComponent\ShowPriceComponent;

class ViewMasterConsent extends ApiResource
{
    protected static $__depth = 0;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) : array {
       $arr = [
           'id'               => $this->id,
           'name'             => $this->name,
           'linked'           => $this->linked,
           'status'           => $this->flag,
           'label'           => $this->label,
           'price_component'  => $this->relationValidation("priceComponent", function() {
               return $this->priceComponent->toViewApi();
           }),
           'price_components'  => $this->relationValidation("priceComponents", function() {
               return $this->priceComponents->transform(function($price_component){
                   return $price_component->toViewApi();
               });
           }),
       ];

        $props = $this->getPropsData();
        foreach ($props as $key => $prop) {
            if($prop != "created_at" || $prop != "updated_at") {
                $arr['forms'][$key] = $prop;
            }
        }

       
       return $arr;
  }
}
