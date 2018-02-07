<?php

namespace Ixora\Soap\Types;

class OperationResultOfBasketPosition
{

    /**
     * @var ArrayOfBasketPosition
     */
    private $Data;

    /**
     * @return ArrayOfBasketPosition
     */
    public function getData() : \Ixora\Soap\Types\ArrayOfBasketPosition
    {
        return $this->Data;
    }


}

