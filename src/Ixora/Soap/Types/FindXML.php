<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindXML implements RequestInterface
{

    /**
     * @var string
     */
    private $Number;

    /**
     * @var string
     */
    private $Maker;

    /**
     * @var bool
     */
    private $StockOnly;

    /**
     * @var SearchSubstFilter
     */
    private $SubstFilter;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * Constructor
     *
     * @var string $Number
     * @var string $Maker
     * @var bool $StockOnly
     * @var SearchSubstFilter $SubstFilter
     * @var string $AuthCode
     */
    public function __construct($Number, $Maker, $StockOnly, $SubstFilter, $AuthCode = null)
    {
        $this->Number = $Number;
        $this->Maker = $Maker;
        $this->StockOnly = $StockOnly;
        $this->SubstFilter = $SubstFilter;
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
    public function getMaker() : string
    {
        return $this->Maker;
    }

    /**
     * @return bool
     */
    public function isStockOnly() : bool
    {
        return $this->StockOnly;
    }

    /**
     * @return SearchSubstFilter
     */
    public function getSubstFilter() : \Ixora\Soap\Types\SearchSubstFilter
    {
        return $this->SubstFilter;
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

