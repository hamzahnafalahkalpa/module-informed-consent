<?php

namespace Hanafalah\ModuleInformedConsent\Concerns;

trait HasService
{
    public function initialieHasService()
    {
        $this->ServiceModel()::setIdentityFlags($this->__flags_Service);
    }
}
