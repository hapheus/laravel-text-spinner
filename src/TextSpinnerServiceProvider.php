<?php

namespace HAF\TextSpinner;

use Illuminate\Support\ServiceProvider;

/**
 * Class TextSpinnerServiceProvider
 *
 * @package HAF\TextSpinner
 */
class TextSpinnerServiceProvider extends ServiceProvider
{
    /**
     * Register
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(TextSpinnerFacade::FACADE_ACCESSOR, function () {
            return new TextSpinner();
        });
    }
}
