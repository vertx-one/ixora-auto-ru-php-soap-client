<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfPositionOperationResult implements ResultInterface
{

    /**
     * @var PositionOperationResult
     */
    private $PositionOperationResult;

    /**
     * @return PositionOperationResult[]
     */
    public function getPositionOperationResult() : array
    {
        return $this->PositionOperationResult;
    }


}

