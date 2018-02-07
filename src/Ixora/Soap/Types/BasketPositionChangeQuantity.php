<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketPositionChangeQuantity implements RequestInterface
{

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @var int
     */
    private $Quantity;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $OrderId
     * @var int $Quantity
     * @var string $AuthCode
     */
    public function __construct($OrderId, $Quantity, $AuthCode = null)
    {
        $this->OrderId = $OrderId;
        $this->Quantity = $Quantity;
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
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->Quantity;
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

