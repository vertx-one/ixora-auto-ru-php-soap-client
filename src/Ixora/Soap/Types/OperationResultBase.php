<?php

namespace Ixora\Soap\Types;

class OperationResultBase
{

    /**
     * @var OperationWarning
     */
    private $Warning;

    /**
     * @return OperationWarning
     */
    public function getWarning() : \Ixora\Soap\Types\OperationWarning
    {
        return $this->Warning;
    }


}

