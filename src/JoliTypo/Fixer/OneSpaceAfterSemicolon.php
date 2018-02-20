<?php

namespace JoliTypo\Fixer;

use JoliTypo\FixerInterface;
use JoliTypo\StateBag;
use JoliTypo\Fixer;

/**
 * Class OneSpaceAfterSemicolon
 *
 * @package JoliTypo\Fixer
 */
class OneSpaceAfterSemicolon implements FixerInterface
{
    /**
     * @param $content
     * @param StateBag|null $stateBag
     *
     * @return null|string|string[]
     */
    public function fix($content, StateBag $stateBag = null)
    {
        $content = preg_replace('@'.Fixer::SEMICOLON.'([a-zA-Z])@mu', Fixer::SEMICOLON.Fixer::NO_BREAK_THIN_SPACE.'$1', $content);

        return $content;
    }
}
