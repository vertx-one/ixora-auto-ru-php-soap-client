<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketGetByReference implements RequestInterface
{

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Reference
     * @var string $AuthCode
     */
    public function __construct($Reference, $AuthCode = null)
    {
        $this->Reference = $Reference;
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

