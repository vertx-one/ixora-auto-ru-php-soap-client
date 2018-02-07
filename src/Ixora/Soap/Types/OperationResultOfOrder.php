<?php

namespace Ixora\Soap\Types;

class OperationResultOfOrder
{

    /**
     * @var ArrayOfOrder
     */
    private $Data;

    /**
     * @return ArrayOfOrder
     */
    public function getData() : \Ixora\Soap\Types\ArrayOfOrder
    {
        return $this->Data;
    }


}

