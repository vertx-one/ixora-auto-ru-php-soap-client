<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OrderStatusGet implements RequestInterface
{

    /**
     * @var string
     */
    private $Number;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var PerformanceStatus
     */
    private $Status;

    /**
     * @var \DateTime
     */
    private $DateFrom;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Number
     * @var string $Reference
     * @var PerformanceStatus $Status
     * @var \DateTime $DateFrom
     * @var string $AuthCode
     */
    public function __construct($Number, $Reference, $Status, $DateFrom, $AuthCode = null)
    {
        $this->Number = $Number;
        $this->Reference = $Reference;
        $this->Status = $Status;
        $this->DateFrom = $DateFrom;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->Number;
    }

    /**
     * @return string
     */
    public function getReference() : string
    {
        return $this->Reference;
    }

    /**
     * @return PerformanceStatus
     */
    public function getStatus() : \Ixora\Soap\Types\PerformanceStatus
    {
        return $this->Status;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom() : \DateTime
    {
        return $this->DateFrom;
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

