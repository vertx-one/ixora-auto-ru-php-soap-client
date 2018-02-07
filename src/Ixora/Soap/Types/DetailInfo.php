<?php

namespace Ixora\Soap\Types;

class DetailInfo
{

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $maker;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var int
     */
    private $lotquantity;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $pricedestination;

    /**
     * @var int
     */
    private $days;

    /**
     * @var int
     */
    private $dayswarranty;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $estimation;

    /**
     * @var string
     */
    private $orderreference;

    /**
     * @var DetailGroup
     */
    private $group;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $weight;

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getMaker() : string
    {
        return $this->maker;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getLotquantity() : int
    {
        return $this->lotquantity;
    }

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getPricedestination() : float
    {
        return $this->pricedestination;
    }

    /**
     * @return int
     */
    public function getDays() : int
    {
        return $this->days;
    }

    /**
     * @return int
     */
    public function getDayswarranty() : int
    {
        return $this->dayswarranty;
    }

    /**
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getEstimation() : string
    {
        return $this->estimation;
    }

    /**
     * @return string
     */
    public function getOrderreference() : string
    {
        return $this->orderreference;
    }

    /**
     * @return DetailGroup
     */
    public function getGroup() : \Ixora\Soap\Types\DetailGroup
    {
        return $this->group;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }


}

