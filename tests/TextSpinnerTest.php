<?php

namespace HAF\TextSpinner\Test;

use HAF\TextSpinner\TextSpinner;
use PHPUnit\Framework\TestCase;

/**
 * Class TextSpinnerTest
 *
 * @package HAF\TextSpinner\TextSpinnerTest
 */
class TextSpinnerTest extends TestCase
{
    /**
     * Test TextSpinner Spin No Replace
     *
     * @return void
     */
    public function testTextSpinnerSpinNoReplace(): void
    {
        $text = uniqid();

        $spinnedText = $this->createTextSpinner()->spin($text);

        $this->assertSame($text, $spinnedText);
    }

    /**
     * Test TextSpinner Spin Replace
     *
     * @return void
     */
    public function testTextSpinnerSpinReplace(): void
    {
        $prepend = uniqid();
        $append = uniqid();
        $text = $prepend . '{1|2|3}' . $append;

        $spinnedText = $this->createTextSpinner()->spin($text);

        $this->assertNotSame($text, $spinnedText);

        $pattern = sprintf('#%s[1,2,3]%s#', $prepend, $append);
        $this->assertMatchesRegularExpression($pattern, $spinnedText);
    }

    /**
     * Create TextSpinner
     *
     * @return TextSpinner
     */
    private function createTextSpinner(): TextSpinner
    {
        return new TextSpinner();
    }
}
