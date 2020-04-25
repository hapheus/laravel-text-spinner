<?php

namespace HAF\TextSpinner;

/**
 * Interface TextSpinnerInterface
 *
 * @package HAF\TextSpinner
 */
interface TextSpinnerInterface
{
    /**
     * Spin
     *
     * @param string $text
     *
     * @return string
     */
    public function spin(string $text): string;
}
