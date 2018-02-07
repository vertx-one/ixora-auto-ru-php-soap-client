<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketPositionInWork implements RequestInterface
{

    /**
     * @var ArrayOfString
     */
    private $BasketPositions;

    /**
     * @var bool
     */
    private $PriceCorrection;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var ArrayOfString $BasketPositions
     * @var bool $PriceCorrection
     * @var string $AuthCode
     */
    public function __construct($BasketPositions, $PriceCorrection, $AuthCode = null)
    {
        $this->BasketPositions = $BasketPositions;
        $this->PriceCorrection = $PriceCorrection;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return ArrayOfString
     */
    public function getBasketPositions() : \Ixora\Soap\Types\ArrayOfString
    {
        return $this->BasketPositions;
    }

    /**
     * @return bool
     */
    public function isPriceCorrection() : bool
    {
        return $this->PriceCorrection;
    }

    /**
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     */
    public function setAuthCode($AuthCode)
    {
        $this->AuthCode = $AuthCode;
    }


}

