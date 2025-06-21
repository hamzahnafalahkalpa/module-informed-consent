<?php

namespace Hanafalah\ModuleInformedConsent\Resources\InformedConsent;


use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewInformedConsent extends ApiResource
{
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
