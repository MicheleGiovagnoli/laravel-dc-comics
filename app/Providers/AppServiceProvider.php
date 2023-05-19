<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //passo il file a tutte le viste
        //key = nome dell'informazione che voglio passare sul front
        //value = il contenuto che voglio condividere con tutte le viste
        //$valore = config('file.text');
        //View::share('key' , 'value');
    }
}
