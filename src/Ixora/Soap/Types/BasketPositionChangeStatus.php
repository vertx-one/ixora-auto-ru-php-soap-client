<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketPositionChangeStatus implements RequestInterface
{

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @var BasketPositionStatus
     */
    private $Status;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $OrderId
     * @var BasketPositionStatus $Status
     * @var string $AuthCode
     */
    public function __construct($OrderId, $Status, $AuthCode = null)
    {
        $this->OrderId = $OrderId;
        $this->Status = $Status;
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
     * @return BasketPositionStatus
     */
    public function getStatus() : \Ixora\Soap\Types\BasketPositionStatus
    {
        return $this->Status;
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

