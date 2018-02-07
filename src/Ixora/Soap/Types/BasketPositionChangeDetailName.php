<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketPositionChangeDetailName implements RequestInterface
{

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @var string
     */
    private $DetailName;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $OrderId
     * @var string $DetailName
     * @var string $AuthCode
     */
    public function __construct($OrderId, $DetailName, $AuthCode = null)
    {
        $this->OrderId = $OrderId;
        $this->DetailName = $DetailName;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->OrderId;
    }

    /**
     * @return string
     */
    public function getDetailName() : string
    {
        return $this->DetailName;
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

