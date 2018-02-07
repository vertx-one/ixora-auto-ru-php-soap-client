<?php

namespace Ixora\Soap\Types;

class ArrayOfMakerInfo
{

    /**
     * @var MakerInfo
     */
    private $MakerInfo;

    /**
     * @return MakerInfo[]
     */
    public function getMakerInfo() : array
    {
        return $this->MakerInfo;
    }


}

