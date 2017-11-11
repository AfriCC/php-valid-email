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
        $this->assertTrue(AfriCC\Valid\email('günter@afri.cc'));
    }

    public function testUtf8Domain()
    {
        $this->assertTrue(AfriCC\Valid\email('afri@günter.cc'));
    }
}
