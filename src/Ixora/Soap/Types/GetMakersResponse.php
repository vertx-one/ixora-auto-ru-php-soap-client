<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMakersResponse implements ResultInterface
{

    /**
     * @var ArrayOfMakerInfo
     */
    private $GetMakersResult;

    /**
     * @return ArrayOfMakerInfo
     */
    public function getGetMakersResult() : \Ixora\Soap\Types\ArrayOfMakerInfo
    {
        return $this->GetMakersResult;
    }


}

