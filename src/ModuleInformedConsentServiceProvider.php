<?php

namespace Gii\ModuleInformedConsent;

use Gii\ModuleInformedConsent\{
    Models\ServiceItem,
    Schemas\ServiceItem as SchemaServiceItem,
};
use Zahzah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleInformedConsentServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleInformedConsent::class)
             ->registerCommandService(Providers\CommandServiceProvider::class)
             ->registers([
                '*',
                'Services'  => function(){
                    $this->binds([

                    ]);
                },
             ]);
    }

    protected function dir(): string{
        return __DIR__.'/';
    }

    protected function migrationPath(string $path = ''): string{
        return database_path($path);
    }
}
