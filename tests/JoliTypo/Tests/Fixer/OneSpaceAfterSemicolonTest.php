<?php

/*
 * This file is part of JoliTypo - a project by JoliCode.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace JoliTypo\Tests\Fixer;

use JoliTypo\Fixer;

class OneSpaceAfterSemicolonTest extends \PHPUnit_Framework_TestCase
{
    public function testSimpleString()
    {
        $fixer = new Fixer\OneSpaceAfterSemicolon();
        $this->assertInstanceOf('JoliTypo\Fixer\OneSpaceAfterSemicolon', $fixer);

        $this->assertEquals('Superman'.Fixer::SEMICOLON.'Catwoman !', $fixer->fix('Superman; Catwoman !'));
    }
}
