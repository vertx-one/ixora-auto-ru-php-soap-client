<?php

namespace Ixora\Soap\Types;

class ArrayOfOrderStatus
{

    /**
     * @var OrderStatus
     */
    private $OrderStatus;

    /**
     * @return OrderStatus[]
     */
    public function getOrderStatus() : array
    {
        return $this->OrderStatus;
    }


}

