<?php

namespace Ixora\Soap\Types;

class OrderStatus
{

    /**
     * @var string
     */
    private $Id;

    /**
     * @var \DateTime
     */
    private $Date;

    /**
     * @var string
     */
    private $Number;

    /**
     * @var \DateTime
     */
    private $DateArrivalOrient;

    /**
     * @var \DateTime
     */
    private $DateArrivalWarranty;

    /**
     * @var string
     */
    private $Region;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var string
     */
    private $Storage;

    /**
     * @var PerformanceStatus
     */
    private $Status;

    /**
     * @var ArrayOfOrderItem
     */
    private $Items;

    /**
     * @var bool
     */
    private $HasReplacement;

    /**
     * @var string
     */
    private $ReorderSourceId;

    /**
     * @var ReorderStatus
     */
    private $ReorderResult;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->Date;
    }

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->Number;
    }

    /**
     * @return \DateTime
     */
    public function getDateArrivalOrient() : \DateTime
    {
        return $this->DateArrivalOrient;
    }

    /**
     * @return \DateTime
     */
    public function getDateArrivalWarranty() : \DateTime
    {
        return $this->DateArrivalWarranty;
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
     * @return string
     */
    public function getComment() : string
    {
        return $this->Comment;
    }

    /**
     * @return string
     */
    public function getStorage() : string
    {
        return $this->Storage;
    }

    /**
     * @return PerformanceStatus
     */
    public function getStatus() : \Ixora\Soap\Types\PerformanceStatus
    {
        return $this->Status;
    }

    /**
     * @return ArrayOfOrderItem
     */
    public function getItems() : \Ixora\Soap\Types\ArrayOfOrderItem
    {
        return $this->Items;
    }

    /**
     * @return bool
     */
    public function isHasReplacement() : bool
    {
        return $this->HasReplacement;
    }

    /**
     * @return string
     */
    public function getReorderSourceId() : string
    {
        return $this->ReorderSourceId;
    }

    /**
     * @return ReorderStatus
     */
    public function getReorderResult() : \Ixora\Soap\Types\ReorderStatus
    {
        return $this->ReorderResult;
    }


}

