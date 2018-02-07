<?php

namespace Ixora\Soap\Types;

class ArrayOfOrder
{

    /**
     * @var Order
     */
    private $Order;

    /**
     * @return Order[]
     */
    public function getOrder() : array
    {
        return $this->Order;
    }


}

