<?php

namespace Ixora\Soap\Types;

class ArrayOfBasketPosition
{

    /**
     * @var BasketPosition
     */
    private $BasketPosition;

    /**
     * @return BasketPosition[]
     */
    public function getBasketPosition() : array
    {
        return $this->BasketPosition;
    }


}

