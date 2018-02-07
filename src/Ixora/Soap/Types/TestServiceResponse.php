<?php

namespace Ixora\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class TestServiceResponse implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $TestServiceResult;

    /**
     * Constructor
     *
     * @var string $TestServiceResult
     */
    public function __construct($TestServiceResult)
    {
        $this->TestServiceResult = $TestServiceResult;
    }

    /**
     * @return string
     */
    public function getTestServiceResult() : string
    {
        return $this->TestServiceResult;
    }


}

