<?php

namespace HAF\TextSpinner;

/**
 * Class TextSpinner
 *
 * @package HAF\TextSpinner
 */
class TextSpinner implements TextSpinnerInterface
{
    /**
     * Spin
     *
     * @param string $text
     *
     * @return string
     */
    public function spin(string $text): string
    {
        return preg_replace_callback('/\{(((?>[^\{\}]+)|(?R))*)\}/x', [$this, 'replace'], $text);
    }

    /**
     * Replace
     *
     * @param array $text
     *
     * @return string
     */
    private function replace(array $text): string
    {
        $text = $this->spin($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}
