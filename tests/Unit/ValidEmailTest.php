<?php

use PHPUnit\Framework\TestCase;

class ValidEmailTest extends TestCase
{
    public function testWorkingEmail()
    {
        $this->assertTrue(AfriCC\Valid\email('hello@afri.cc'));
    }

    public function testNonWorkingEmail()
    {
        $this->assertFalse(AfriCC\Valid\email('hello'));
    }

    public function testUtf8Local()
    {
        if (version_compare(PHP_VERSION, '7.1.0', '>=')) {
            $this->assertTrue(AfriCC\Valid\email('günter@afri.cc'));
        } else {
            $this->assertFalse(AfriCC\Valid\email('günter@afri.cc'));
        }
    }

    public function testUtf8Domain()
    {
        $this->assertTrue(AfriCC\Valid\email('afri@günter.cc'));
    }
}
