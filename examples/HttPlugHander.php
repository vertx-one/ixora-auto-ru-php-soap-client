<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$classmap = include dirname(__DIR__) . '/src/Ixora/Soap/classmap.php';

use Ixora\Soap\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Http\Adapter\Guzzle6\Client as HttpClient;


$wsdl = 'http://ws.ixora-auto.ru/soap/ApiService.asmx?WSDL';
$code = file_get_contents(dirname(__DIR__) . '/code.txt');
$authCode = $code !== false ? $code : '';

$clientFactory = new ClientFactory(Client::class);
$soapOptions = [
	'cache_wsdl' => WSDL_CACHE_NONE
];

$httpClient = HttpClient::createWithConfig([]);

$clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
$clientBuilder->withHandler(\Phpro\SoapClient\Soap\Handler\HttPlugHandle::createForClient($httpClient));
$clientBuilder->withEventDispatcher(new EventDispatcher());
$clientBuilder->withClassMaps($classmap);
/**
 * @var $client Client
 */
$client = $clientBuilder->build();

$response = $client->testService(new \Ixora\Soap\Types\TestService('test', $authCode));
echo $response->getTestServiceResult();

$response = $client->GetMakers(new \Ixora\Soap\Types\GetMakers(null, $authCode));
var_dump($response->getGetMakersResult()->getMakerInfo());
