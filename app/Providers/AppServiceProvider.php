<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\logos;
use Illuminate\Support\Facades\View; 
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
       // Schema::defaultStringLength(191);
       // Blade::component('components.title', 'title');
       // Blade::component('components.gallery', 'gallery');
       // Blade::component('components.card', 'card');

        $logos = logos::all();
       // $redes = Content::where('section','redes')->first();
       // $contacto = Content::where('section','contacto')->first();
       // $logos = $logos->file['imagenes'];
       // $contacto = $contacto->file['mapas'];
//        dd($contacto);
        view::share('logos',$logos);
        //view::share('redes',$redes);
       // view::share('contacto',$contacto);
    }
}
