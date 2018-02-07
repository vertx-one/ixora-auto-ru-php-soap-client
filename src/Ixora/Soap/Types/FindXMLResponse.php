<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindXMLResponse implements ResultInterface
{

    /**
     * @var FindXMLResult
     */
    private $FindXMLResult;

    /**
     * @return FindXMLResult
     */
    public function getFindXMLResult() : \Ixora\Soap\Types\FindXMLResult
    {
        return $this->FindXMLResult;
    }


}

