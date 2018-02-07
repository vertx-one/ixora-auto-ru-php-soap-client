<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class TestService implements RequestInterface
{

    /**
     * @var string
     */
    private $Message;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Message
     * @var string $AuthCode
     */
    public function __construct($Message, $AuthCode = null)
    {
        $this->Message = $Message;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->Message;
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

