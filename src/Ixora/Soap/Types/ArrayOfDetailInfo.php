<?php

namespace Ixora\Soap\Types;

class ArrayOfDetailInfo
{

    /**
     * @var DetailInfo
     */
    private $DetailInfo;

    /**
     * @return DetailInfo[]
     */
    public function getDetailInfo() : array
    {
        return $this->DetailInfo;
    }


}

