<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OrderStatusGetByClientReference implements RequestInterface
{

    /**
     * @var string
     */
    private $Reference;

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
     * @var string $Reference
     * @var \DateTime $DateFrom
     * @var \DateTime $DateTo
     * @var string $AuthCode
     */
    public function __construct($Reference, $DateFrom, $DateTo, $AuthCode = null)
    {
        $this->Reference = $Reference;
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return string
     */
    public function getReference() : string
    {
        return $this->Reference;
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

