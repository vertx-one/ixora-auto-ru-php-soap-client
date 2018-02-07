<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindResponse implements ResultInterface
{

    /**
     * @var ArrayOfDetailInfo
     */
    private $FindResult;

    /**
     * @return ArrayOfDetailInfo
     */
    public function getFindResult() : \Ixora\Soap\Types\ArrayOfDetailInfo
    {
        return $this->FindResult;
    }


}

