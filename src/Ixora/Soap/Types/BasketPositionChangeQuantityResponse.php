<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class BasketPositionChangeQuantityResponse implements ResultInterface
{

    /**
     * @var PositionOperationResult
     */
    private $PositionOperationResult;

    /**
     * @return PositionOperationResult
     */
    public function getPositionOperationResult() : \Ixora\Soap\Types\PositionOperationResult
    {
        return $this->PositionOperationResult;
    }


}

