<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OrderStatusGetByClientReferenceResponse implements ResultInterface
{

    /**
     * @var OrderStatusGetResult
     */
    private $OrderStatusGetResult;

    /**
     * @return OrderStatusGetResult
     */
    public function getOrderStatusGetResult() : \Ixora\Soap\Types\OrderStatusGetResult
    {
        return $this->OrderStatusGetResult;
    }


}

