<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class BasketInsertOrdersResponse implements ResultInterface
{

    /**
     * @var BasketInsertOrdersResult
     */
    private $BasketInsertOrdersResult;

    /**
     * @return BasketInsertOrdersResult
     */
    public function getBasketInsertOrdersResult() : \Ixora\Soap\Types\BasketInsertOrdersResult
    {
        return $this->BasketInsertOrdersResult;
    }


}

