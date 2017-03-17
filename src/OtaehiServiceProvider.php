<?php

namespace Ammonkc\Otaehi;

use Ammonkc\Otaehi\ClassMap;
use Ammonkc\Otaehi\ServiceType\OTAP;
use Ammonkc\Otaehi\ServiceType\OTAV;
use Illuminate\Support\ServiceProvider;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class OtaehiServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OTAV::class, function ($app) {
            $otav = new OTAV([
                AbstractSoapClientBase::WSDL_URL => config('services.ehi.wsdl'),
                AbstractSoapClientBase::WSDL_LOGIN => config('services.ehi.login'),
                AbstractSoapClientBase::WSDL_PASSWORD => config('services.ehi.password'),
                AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
                AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            ]);
            return $otav->setLocation(config('services.ehi.location'));
        });

        $this->app->bind(OTAP::class, function ($app) {
            $otap = new OTAP([
                AbstractSoapClientBase::WSDL_URL => config('services.ehi.wsdl'),
                AbstractSoapClientBase::WSDL_LOGIN => config('services.ehi.login'),
                AbstractSoapClientBase::WSDL_PASSWORD => config('services.ehi.password'),
                AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
                AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            ]);
            return $otap->setLocation(config('services.ehi.location'));
        });
    }

    public function provides()
    {
        return [
            OTAV::class,
            OTAP::class,
        ];
    }
}
