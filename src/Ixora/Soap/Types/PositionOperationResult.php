<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class PositionOperationResult implements ResultInterface
{

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->OrderId;
    }


}

