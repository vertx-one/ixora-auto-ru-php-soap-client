<?php

namespace Ixora\Soap\Types;

class ArrayOfString
{

    /**
     * @var string
     */
    private $string;

    /**
     * @return string[]
     */
    public function getString() : array
    {
        return $this->string;
    }


}

