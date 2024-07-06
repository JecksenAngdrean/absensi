<?php

namespace App\Providers;

use App\Models\TahunAkademik;
use Illuminate\Support\ServiceProvider;
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
        View::composer(['user.layouts.layout3'], function ($view) {
            // Ambil data tahun akademik yang aktif
            $tak = TahunAkademik::where('status', 1)->first();
    
            // Kirim data tahun akademik ke view
            $view->with('tak', $tak);
        });
    }
}
