<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetMakers implements RequestInterface
{

    /**
     * @var string
     */
    private $Number;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Number
     * @var string $AuthCode
     */
    public function __construct($Number, $AuthCode = null)
    {
        $this->Number = $Number;
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

