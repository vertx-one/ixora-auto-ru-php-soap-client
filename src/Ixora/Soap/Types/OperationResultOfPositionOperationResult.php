<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OperationResultOfPositionOperationResult implements ResultInterface
{

    /**
     * @var ArrayOfPositionOperationResult
     */
    private $Data;

    /**
     * @return ArrayOfPositionOperationResult
     */
    public function getData() : \Ixora\Soap\Types\ArrayOfPositionOperationResult
    {
        return $this->Data;
    }


}

