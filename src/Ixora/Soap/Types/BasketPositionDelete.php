<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketPositionDelete implements RequestInterface
{

    /**
     * @var ArrayOfString
     */
    private $BasketPositions;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var ArrayOfString $BasketPositions
     * @var string $AuthCode
     */
    public function __construct($BasketPositions, $AuthCode = null)
    {
        $this->BasketPositions = $BasketPositions;
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

