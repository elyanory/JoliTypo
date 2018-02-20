<?php

/*
 * This file is part of JoliTypo - a project by JoliCode.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace JoliTypo\Tests\Fixer;

use JoliTypo\Fixer;

class OneSpaceAfterPointTest extends \PHPUnit_Framework_TestCase
{
    public function testSimpleString()
    {
        $fixer = new Fixer\OneSpaceAfterPoint();
        $this->assertInstanceOf('JoliTypo\Fixer\OneSpaceAfterPoint', $fixer);

        $this->assertEquals('Superman'.Fixer::POINT.'Catwoman !', $fixer->fix('Superman. Catwoman !'));
    }
}
