<?php

namespace Ixora\Soap\Types;

class OperationWarning
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var string
     */
    private $Description;

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }


}

