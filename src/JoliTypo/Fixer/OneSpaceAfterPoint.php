<?php

namespace JoliTypo\Fixer;

use JoliTypo\FixerInterface;
use JoliTypo\StateBag;
use JoliTypo\Fixer;

/**
 * Class OneSpaceAfterPoint
 *
 * @package JoliTypo\Fixer
 */
class OneSpaceAfterPoint implements FixerInterface
{
    /**
     * @param $content
     * @param StateBag|null $stateBag
     *
     * @return null|string|string[]
     */
    public function fix($content, StateBag $stateBag = null)
    {
        $content = preg_replace('@['.Fixer::POINT.']+([a-zA-Z])@mu', Fixer::POINT.Fixer::NO_BREAK_THIN_SPACE.'$1', $content);

        return $content;
    }
}
