<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketInsertOrders implements RequestInterface
{

    /**
     * @var ArrayOfOrder
     */
    private $Orders;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var ArrayOfOrder $Orders
     * @var string $AuthCode
     */
    public function __construct($Orders, $AuthCode = null)
    {
        $this->Orders = $Orders;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return ArrayOfOrder
     */
    public function getOrders() : \Ixora\Soap\Types\ArrayOfOrder
    {
        return $this->Orders;
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

