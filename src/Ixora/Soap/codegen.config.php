<?php
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Ixora\Soap\CodeGenerator\Assembler\ArrayOfGetterAssembler;
use Ixora\Soap\CodeGenerator\Assembler\FixedNSReturnGetterAssembler;
use Ixora\Soap\CodeGenerator\Assembler\ArrayOfPropertyAssembler;
use Ixora\Soap\CodeGenerator\Assembler\ConstructorAssembler as IxoraConstructorAssembler;


$strRequestCommands = implode( '$|', [
	'BasketGetByDetailNumber',
	'BasketGetByOrderId',
	'BasketGetByReference',
	'BasketGetPart',
	'BasketInsertOrders',
	'BasketPositionChangeDetailName',
	'BasketPositionChangeQuantity',
	'BasketPositionChangeReference',
	'BasketPositionChangeStatus',
	'BasketPositionCheck',
	'BasketPositionDelete',
	'BasketPositionInWork',
	'Find',
	'FindXML',
	'GetMakers',
	'GetMakersXML',
	'OrderStatusGet',
	'OrderStatusGetByClientReference',
	'OrderStatusGetByDetailNumber',
	'OrderStatusGetByOrderId',
	'TestService'
]);

return Config::create()
             ->setWsdl('http://ws.ixora-auto.ru/soap/ApiService.asmx?WSDL')
             ->setTypeDestination('Types')
             ->setTypeNamespace('Ixora\\Soap\\Types')
             ->setClientDestination('./')
             ->setClientNamespace('Ixora\\Soap')
             ->setClientName('Client')
             ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
             ->addRule(new Rules\AssembleRule(
	             new FixedNSReturnGetterAssembler( //Fix root NS
		             (new Assembler\GetterAssemblerOptions())
			             ->withReturnType(true)
			             ->withBoolGetters(true)
	             )))

             ->addRule(new Rules\TypenameMatchesRule(
	             new Rules\MultiRule([
		             new Rules\AssembleRule(new Assembler\RequestAssembler()),
		             new Rules\AssembleRule(new IxoraConstructorAssembler())
	             ]),
	             '/' . $strRequestCommands . '/'
             ))
             ->addRule(new Rules\PropertynameMatchesRule(
	             (new Rules\AssembleRule(new Assembler\SetterAssembler())),
	             '/^AuthCode$/'
             ))
             ->addRule(new Rules\TypenameMatchesRule(
	             new Rules\AssembleRule(new Assembler\ResultAssembler()),
	             '/Result$|Response$/'
             ))
             ->addRule(new Rules\TypenameMatchesRule(
	             new Rules\MultiRule([
		             //new Rules\AssembleRule(new ArrayOfPropertyAssembler()),
		             new Rules\AssembleRule(new ArrayOfGetterAssembler(
			             (new Assembler\GetterAssemblerOptions())
				             ->withReturnType(true)
				             ->withBoolGetters(true)
		             ))
	             ]),
	             '/^ArrayOf/'
             ))
	;