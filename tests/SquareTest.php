<?php

namespace tests;

use akulov\AkulovException;
use akulov\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    protected $v;

    public function setUp(): void
    {
        $this->v = new Square();
    }

    /**
     * @dataProvider squareProvider
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */

    public function testSquare($a, $b, $c, $d)
    {
        $this->assertEquals($d, $this->v->solve($a, $b, $c));
    }

    public function squareProvider()
    {
        return array(
            array(-1, 0, 16, [4, -4]),
            array(0, 3, 9, [-3]),
            array(1, 6, 9, [-3])
        );
    }

    /**
     * @dataProvider squareExProvider
     * @param $a
     * @param $b
     * @param $c
     */

    public function testSquare2($a, $b, $c)
    {
        $this->expectExceptionMessage('This square equation does not exist!');
        $this->expectException(AkulovException::class);
        $this->v->solve($a, $b, $c);
    }

    public function squareExProvider()
    {
        return array(
            array(14, 2, 1),
            array(4, 2, 1)
        );
    }

}