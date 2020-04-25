<?php

namespace HAF\TextSpinner;

use Illuminate\Support\Facades\Facade;

/**
 * Class TextSpinnerFacade
 *
 * @package HAF\TextSpinner
 */
class TextSpinnerFacade extends Facade
{
    /**
     * @var string
     */
    public const FACADE_ACCESSOR = 'text-spinner';

    /**
     * Get Facade Accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return static::FACADE_ACCESSOR;
    }
}
