<?php

namespace League\IsPHP\Test;

use League\IsPHP;

class IsPHPTest extends \PHPUnit_Framework_TestCase
{

    public function testArrayMethodReturnTrue()
    {
        $is = new IsPHP;
        $result = $is.array([1, 2, 3]);

        $this->assertTrue($result);
    }
}
