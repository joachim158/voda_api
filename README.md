<?php

$response="
<?xml version='1.0' encoding='UTF-8'?>
<S:Envelope xmlns:S='http://schemas.xmlsoap.org/soap/envelope/'>
<S:Body>
<ns0:paymentServiceResponse xmlns:ns0='http://services.apiservices.vodafone.com.gh/'>
<return>
<StatusCode>0</StatusCode>
<StatusMessage>Accept the service request successfully.</StatusMessage>
<TransactionID>AG_20180413_00006db5596c16d995f5</TransactionID>
</return>
</ns0:paymentServiceResponse>
</S:Body>
</S:Envelope>";

//echo $response;
//exit;

echo "<pre>".htmlentities($response)."</pre>";
//exit;

$obj = simplexml_load_string($response);

//print_r($obj);


foreach($obj->children('http://schemas.xmlsoap.org/soap/envelope/')->Body->children('http://services.apiservices.vodafone.com.gh/')->paymentServiceResponse-> return as $returns)
{
           $statuscode= (string)$returns->StatusCode;
	$statusmessage= (string)$returns->StatusMessage;
	      $transid= (string)$returns->TransactionID;
	
}

echo "correlationid= $statuscode". "<br />";
echo "status=$statusmessage". "<br />";
echo "code=$transid". "<br />";


//exit;
?>
