<?php

namespace Ixora\Soap\Types;

class OperationResultOfOrderStatus
{

    /**
     * @var ArrayOfOrderStatus
     */
    private $Data;

    /**
     * @return ArrayOfOrderStatus
     */
    public function getData() : \Ixora\Soap\Types\ArrayOfOrderStatus
    {
        return $this->Data;
    }


}

