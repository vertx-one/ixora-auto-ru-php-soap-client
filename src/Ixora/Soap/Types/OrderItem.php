<?php

namespace Ixora\Soap\Types;

class OrderItem
{

    /**
     * @var string
     */
    private $DetailNumber;

    /**
     * @var string
     */
    private $DetailMaker;

    /**
     * @var string
     */
    private $DetailName;

    /**
     * @var int
     */
    private $Ordered;

    /**
     * @var int
     */
    private $Purchased;

    /**
     * @var int
     */
    private $OnTheWay;

    /**
     * @var int
     */
    private $HasCome;

    /**
     * @var int
     */
    private $Issued;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var bool
     */
    private $IsReplacement;

    /**
     * @return string
     */
    public function getDetailNumber() : string
    {
        return $this->DetailNumber;
    }

    /**
     * @return string
     */
    public function getDetailMaker() : string
    {
        return $this->DetailMaker;
    }

    /**
     * @return string
     */
    public function getDetailName() : string
    {
        return $this->DetailName;
    }

    /**
     * @return int
     */
    public function getOrdered() : int
    {
        return $this->Ordered;
    }

    /**
     * @return int
     */
    public function getPurchased() : int
    {
        return $this->Purchased;
    }

    /**
     * @return int
     */
    public function getOnTheWay() : int
    {
        return $this->OnTheWay;
    }

    /**
     * @return int
     */
    public function getHasCome() : int
    {
        return $this->HasCome;
    }

    /**
     * @return int
     */
    public function getIssued() : int
    {
        return $this->Issued;
    }

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return $this->Price;
    }

    /**
     * @return bool
     */
    public function isIsReplacement() : bool
    {
        return $this->IsReplacement;
    }


}

