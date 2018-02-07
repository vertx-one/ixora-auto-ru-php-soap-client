<?php

namespace Ixora\Soap\Types;

class Order
{

    /**
     * @var string
     */
    private $OrderReference;

    /**
     * @var int
     */
    private $Quantity;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var bool
     */
    private $CanRepeat;

    /**
     * @var float
     */
    private $CanRepeatWithIncreaseInPrice;

    /**
     * @var int
     */
    private $CanRepeatWithIncreaseInTerm;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var string
     */
    private $Error;

    /**
     * @var string
     */
    private $Id;

    /**
     * @return string
     */
    public function getOrderReference() : string
    {
        return $this->OrderReference;
    }

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->Quantity;
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
    public function isCanRepeat() : bool
    {
        return $this->CanRepeat;
    }

    /**
     * @return float
     */
    public function getCanRepeatWithIncreaseInPrice() : float
    {
        return $this->CanRepeatWithIncreaseInPrice;
    }

    /**
     * @return int
     */
    public function getCanRepeatWithIncreaseInTerm() : int
    {
        return $this->CanRepeatWithIncreaseInTerm;
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
    public function getError() : string
    {
        return $this->Error;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }


}

