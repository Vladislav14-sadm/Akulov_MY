<?php

namespace tests;

use akulov\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{

    public function testLog()
    {
        $this->expectOutputString("This line equation does not exist");
        MyLog::log("This line equation does not exist");
        MyLog::write();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }

}