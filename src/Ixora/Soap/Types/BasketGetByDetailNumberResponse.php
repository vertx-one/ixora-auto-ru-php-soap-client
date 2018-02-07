<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class BasketGetByDetailNumberResponse implements ResultInterface
{

    /**
     * @var BasketGetResult
     */
    private $BasketGetResult;

    /**
     * @return BasketGetResult
     */
    public function getBasketGetResult() : \Ixora\Soap\Types\BasketGetResult
    {
        return $this->BasketGetResult;
    }


}

