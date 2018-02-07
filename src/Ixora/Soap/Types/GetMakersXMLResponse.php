<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMakersXMLResponse implements ResultInterface
{

    /**
     * @var GetMakersXMLResult
     */
    private $GetMakersXMLResult;

    /**
     * @return GetMakersXMLResult
     */
    public function getGetMakersXMLResult() : \Ixora\Soap\Types\GetMakersXMLResult
    {
        return $this->GetMakersXMLResult;
    }


}

