<?php

use akulov\AkulovException;
use akulov\Line;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    /**
     * @dataProvider lineProvider
     * @param $a
     * @param $b
     * @param $c
     */

    public function testLine($a, $b, $c)
    {
        $app = new Line();
        $this->assertEquals($c, $app->line($a, $b));
    }

    public function lineProvider()
    {
        return array(
            array(3, 9, [-3]),
            array(2, -4, [2]),
        );
    }

    /**
     * @dataProvider ExceptionProvider
     * @param $v
     * @param $z
     */

    public function testLine2($v, $z)
    {
        $app = new Line();
        $this->expectExceptionMessage('This line equation does not exist');
        $this->expectException(AkulovException::class);
        $app->line($v, $z);
    }

    public function ExceptionProvider()
    {
        return array(
            array(0, -7),
            array(0, 2)
        );
    }

}