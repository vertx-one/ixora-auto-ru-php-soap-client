<?php

namespace Ixora\Soap;

class Client extends \Phpro\SoapClient\Client
{

    public function testService(\Ixora\Soap\Types\TestService $TestService) : \Ixora\Soap\Types\TestServiceResponse
    {
        return $this->call('TestService', $TestService);
    }

    public function find(\Ixora\Soap\Types\Find $Find) : \Ixora\Soap\Types\FindResponse
    {
        return $this->call('Find', $Find);
    }

    public function findXML(\Ixora\Soap\Types\FindXML $FindXML) : \Ixora\Soap\Types\FindXMLResponse
    {
        return $this->call('FindXML', $FindXML);
    }

    public function getMakers(\Ixora\Soap\Types\GetMakers $GetMakers) : \Ixora\Soap\Types\GetMakersResponse
    {
        return $this->call('GetMakers', $GetMakers);
    }

    public function getMakersXML(\Ixora\Soap\Types\GetMakersXML $GetMakersXML) : \Ixora\Soap\Types\GetMakersXMLResponse
    {
        return $this->call('GetMakersXML', $GetMakersXML);
    }

    public function basketGetPart(\Ixora\Soap\Types\BasketGetPart $BasketGetPart) : \Ixora\Soap\Types\BasketGetPartResponse
    {
        return $this->call('BasketGetPart', $BasketGetPart);
    }

    public function basketGetByDetailNumber(\Ixora\Soap\Types\BasketGetByDetailNumber $BasketGetByDetailNumber) : \Ixora\Soap\Types\BasketGetByDetailNumberResponse
    {
        return $this->call('BasketGetByDetailNumber', $BasketGetByDetailNumber);
    }

    public function basketGetByReference(\Ixora\Soap\Types\BasketGetByReference $BasketGetByReference) : \Ixora\Soap\Types\BasketGetByReferenceResponse
    {
        return $this->call('BasketGetByReference', $BasketGetByReference);
    }

    public function basketGetByOrderId(\Ixora\Soap\Types\BasketGetByOrderId $BasketGetByOrderId) : \Ixora\Soap\Types\BasketGetByOrderIdResponse
    {
        return $this->call('BasketGetByOrderId', $BasketGetByOrderId);
    }

    public function basketInsertOrders(\Ixora\Soap\Types\BasketInsertOrders $BasketInsertOrders) : \Ixora\Soap\Types\BasketInsertOrdersResponse
    {
        return $this->call('BasketInsertOrders', $BasketInsertOrders);
    }

    public function basketPositionChangeDetailName(\Ixora\Soap\Types\BasketPositionChangeDetailName $BasketPositionChangeDetailName) : \Ixora\Soap\Types\BasketPositionChangeDetailNameResponse
    {
        return $this->call('BasketPositionChangeDetailName', $BasketPositionChangeDetailName);
    }

    public function basketPositionChangeQuantity(\Ixora\Soap\Types\BasketPositionChangeQuantity $BasketPositionChangeQuantity) : \Ixora\Soap\Types\BasketPositionChangeQuantityResponse
    {
        return $this->call('BasketPositionChangeQuantity', $BasketPositionChangeQuantity);
    }

    public function basketPositionChangeReference(\Ixora\Soap\Types\BasketPositionChangeReference $BasketPositionChangeReference) : \Ixora\Soap\Types\BasketPositionChangeReferenceResponse
    {
        return $this->call('BasketPositionChangeReference', $BasketPositionChangeReference);
    }

    public function basketPositionChangeStatus(\Ixora\Soap\Types\BasketPositionChangeStatus $BasketPositionChangeStatus) : \Ixora\Soap\Types\BasketPositionChangeStatusResponse
    {
        return $this->call('BasketPositionChangeStatus', $BasketPositionChangeStatus);
    }

    public function basketPositionCheck(\Ixora\Soap\Types\BasketPositionCheck $BasketPositionCheck) : \Ixora\Soap\Types\BasketPositionCheckResponse
    {
        return $this->call('BasketPositionCheck', $BasketPositionCheck);
    }

    public function basketPositionDelete(\Ixora\Soap\Types\BasketPositionDelete $BasketPositionDelete) : \Ixora\Soap\Types\BasketPositionDeleteResponse
    {
        return $this->call('BasketPositionDelete', $BasketPositionDelete);
    }

    public function basketPositionInWork(\Ixora\Soap\Types\BasketPositionInWork $BasketPositionInWork) : \Ixora\Soap\Types\BasketPositionInWorkResponse
    {
        return $this->call('BasketPositionInWork', $BasketPositionInWork);
    }

    public function orderStatusGetByOrderId(\Ixora\Soap\Types\OrderStatusGetByOrderId $OrderStatusGetByOrderId) : \Ixora\Soap\Types\OrderStatusGetByOrderIdResponse
    {
        return $this->call('OrderStatusGetByOrderId', $OrderStatusGetByOrderId);
    }

    public function orderStatusGetByDetailNumber(\Ixora\Soap\Types\OrderStatusGetByDetailNumber $OrderStatusGetByDetailNumber) : \Ixora\Soap\Types\OrderStatusGetByDetailNumberResponse
    {
        return $this->call('OrderStatusGetByDetailNumber', $OrderStatusGetByDetailNumber);
    }

    public function orderStatusGetByClientReference(\Ixora\Soap\Types\OrderStatusGetByClientReference $OrderStatusGetByClientReference) : \Ixora\Soap\Types\OrderStatusGetByClientReferenceResponse
    {
        return $this->call('OrderStatusGetByClientReference', $OrderStatusGetByClientReference);
    }

    public function orderStatusGet(\Ixora\Soap\Types\OrderStatusGet $OrderStatusGet) : \Ixora\Soap\Types\OrderStatusGetResponse
    {
        return $this->call('OrderStatusGet', $OrderStatusGet);
    }


}

