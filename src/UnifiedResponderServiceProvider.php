<?php

namespace Nuewave\UnifiedResponder;

use Illuminate\Support\ServiceProvider;

class UnifiedResponderServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('unifiedresponder', function () {
            return new UnifiedResponder();
        });
    }
}
