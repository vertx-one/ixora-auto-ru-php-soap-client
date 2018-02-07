<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BasketGetPart implements RequestInterface
{

    /**
     * @var BasketPart
     */
    private $Part;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var BasketPart $Part
     * @var string $AuthCode
     */
    public function __construct($Part, $AuthCode = null)
    {
        $this->Part = $Part;
        $this->AuthCode = $AuthCode;
    }

    /**
     * @return BasketPart
     */
    public function getPart() : \Ixora\Soap\Types\BasketPart
    {
        return $this->Part;
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

