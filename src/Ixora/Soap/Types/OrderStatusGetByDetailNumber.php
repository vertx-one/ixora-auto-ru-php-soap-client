<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OrderStatusGetByDetailNumber implements RequestInterface
{

    /**
     * @var string
     */
    private $Number;

    /**
     * @var \DateTime
     */
    private $DateFrom;

    /**
     * @var \DateTime
     */
    private $DateTo;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Number
     * @var \DateTime $DateFrom
     * @var \DateTime $DateTo
     * @var string $AuthCode
     */
    public function __construct($Number, $DateFrom, $DateTo, $AuthCode = null)
    {
        $this->Number = $Number;
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
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
     * @return \DateTime
     */
    public function getDateFrom() : \DateTime
    {
        return $this->DateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo() : \DateTime
    {
        return $this->DateTo;
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

