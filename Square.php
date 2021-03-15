<?php

namespace Akulov;

use core\EquationInterface;

class Square extends Line implements EquationInterface
{
    protected function desc($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;

    }

    public function solve($a, $b, $c)
    {
        if ($a === 0) {
            return parent::line($b, $c);
        }

        MyLog::log("This is a square equation!\n\r");
        $d = $this->desc($a, $b, $c);

          if ($d > 0) {
            $sd = sqrt($d);
            return $this->x = array((-$b - $sd) / (2 * $a), (-$b + $sd) / (2 * $a));
        }

        if ($d === 0) {
            return $this->x = array ((-$b )/ (2 * $a));
        }
        throw new AkulovException("This square equation does not exist!");

    }
}