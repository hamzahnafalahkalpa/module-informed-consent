<?php

namespace Hanafalah\ModuleInformedConsent\Resources;


use Hanafalah\LaravelSupport\Resources\ApiResource;
use Hanafalah\ModuleService\Enums\ServiceItem\Flag;

class ViewInformedConsent extends ApiResource
{
    protected static $__depth = 0;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        $arr = [
            'id'               => $this->id,
            'transaction'      => $this->relationValidation("transaction", function () {
                return $this->transaction->toShowApi();
            }),
            'master_consent'   => $this->relationValidation("masterConsent", function () {
                return $this->masterConsent->toViewApi();
            }),
            'author'           => $this->relationValidation("author", function () {
                return $this->author->toShowApi();
            }),
            'status'           => $this->status,
            'result'           => $this->result,
        ];


        return $arr;
    }
}
