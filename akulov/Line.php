<?php

namespace Akulov;

use Akulov\AkulovException as E;

class Line
{
    protected $x;

    public function line($a, $b)
    {
        if ($a != 0) {
            MyLog::log("This is a line equation!\n\r");
            return $this->x = array(-$b / $a);
        }
        throw new E ('This line equation does not exist!');
    }
}
