<?php

//namespace League\IsPHP\Test;

use League\IsPHP\IsPHP;

class IsPHPTest extends \PHPUnit_Framework_TestCase
{

    public function testArrayMethodReturnTrue()
    {
        $is = new IsPHP;
        //$result = $is.array([1, 2, 3]);
        $hello = $is->hello();

        $this->assertSame('hello',$hello);

        //$this->assertTrue($result);
    }
}
