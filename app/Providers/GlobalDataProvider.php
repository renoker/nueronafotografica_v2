<?php

namespace App\Providers;

use App\Models\Translation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GlobalDataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        View::composer('*', function ($view) {
            $language = App::getLocale();
            if ($language == 'es') {
                $header = Translation::select(['translate_es AS title'])->where('key', 'header')->where('page', 'Header')->get();
                $footer = Translation::select(['translate_es AS title'])->where('key', 'footer')->where('page', 'Footer')->get();
            } elseif ($language == 'en') {
                $header = Translation::select(['translate_en AS title'])->where('key', 'header')->where('page', 'Header')->get();
                $footer = Translation::select(['translate_en AS title'])->where('key', 'footer')->where('page', 'Footer')->get();
            } else {
                $header = Translation::select(['translate_es AS title'])->where('key', 'header')->where('page', 'Header')->get();
                $footer = Translation::select(['translate_es AS title'])->where('key', 'footer')->where('page', 'Footer')->get();
            }
            $view->with('header', $header);
            $view->with('footer', $footer);
        });
    }
}
