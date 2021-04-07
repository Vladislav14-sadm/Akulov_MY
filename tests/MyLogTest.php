<?php

require __DIR__ . './../vendor/autoload.php';

use akulov\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{

    public function testWrite()
    {
        $this->assertEquals('', \akulov\MyLog::write(123));
        $this->assertEquals('', \akulov\MyLog::write("test"));
        $this->assertEquals('', \akulov\MyLog::write());
    }

    /**
     * @dataProvider providerSolve
     * @param $str
     */
    public function testMyLog($str)
    {
        $this->assertEquals('', \akulov\MyLog::log($str));
    }

    public function providerSolve(): array
    {
        return array(
            array("Logtest"),
            array("lOg@!$%(#$"),
            array(1211001101),
            array(false)
        );
    }

    public function testMyLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('', MyLog::log(null));
        $this->assertEquals('', MyLog::log());
    }
}