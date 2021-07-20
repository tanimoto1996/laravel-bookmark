<?php

namespace App\Providers;

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
        // インターフェイスと紐付けいてることを宣言する
        $this->app->bind(\App\Lib\LinkPreview\LinkPreviewInterface::class, \App\Lib\LinkPreview\LinkPreview::class);

        // モックリンクにするとテストを簡単にできる
        // $this->app->bind(\App\Lib\LinkPreview\LinkPreviewInterface::class, \App\Lib\LinkPreview\MockLinkPreview::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
