<?php

namespace Ixora\Soap\Types;

class BasketPosition
{

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $OrderReference;

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
    private $Quantity;

    /**
     * @var int
     */
    private $LotQuantity;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var float
     */
    private $Sum;

    /**
     * @var int
     */
    private $Days;

    /**
     * @var int
     */
    private $DaysWarranty;

    /**
     * @var string
     */
    private $Region;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var \DateTime
     */
    private $DateAdd;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }

    /**
     * @return string
     */
    public function getOrderReference() : string
    {
        return $this->OrderReference;
    }

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
    public function getQuantity() : int
    {
        return $this->Quantity;
    }

    /**
     * @return int
     */
    public function getLotQuantity() : int
    {
        return $this->LotQuantity;
    }

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return $this->Price;
    }

    /**
     * @return float
     */
    public function getSum() : float
    {
        return $this->Sum;
    }

    /**
     * @return int
     */
    public function getDays() : int
    {
        return $this->Days;
    }

    /**
     * @return int
     */
    public function getDaysWarranty() : int
    {
        return $this->DaysWarranty;
    }

    /**
     * @return string
     */
    public function getRegion() : string
    {
        return $this->Region;
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
    public function getDateAdd() : \DateTime
    {
        return $this->DateAdd;
    }


}

