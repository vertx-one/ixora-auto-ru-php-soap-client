<?php

namespace Ixora\Soap\Types;

class ArrayOfOrderItem
{

    /**
     * @var OrderItem
     */
    private $OrderItem;

    /**
     * @return OrderItem[]
     */
    public function getOrderItem() : array
    {
        return $this->OrderItem;
    }


}

