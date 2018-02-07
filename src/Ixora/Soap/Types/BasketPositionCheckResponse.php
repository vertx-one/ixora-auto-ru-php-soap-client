<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class BasketPositionCheckResponse implements ResultInterface
{

    /**
     * @var PositionOperationResultSet
     */
    private $PositionOperationResultSet;

    /**
     * @return PositionOperationResultSet
     */
    public function getPositionOperationResultSet() : \Ixora\Soap\Types\PositionOperationResultSet
    {
        return $this->PositionOperationResultSet;
    }


}

