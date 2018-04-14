<?php
$response = "<?xml version='1.0' encoding='UTF-8'?>
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

xml_parse_into_struct(xml_parser_create(), $response, $data, $value); // this will parse the xml into an array and pass the results to the $data variable

// the status code of the transaction can be located value key of the 4th index
// from the above xml will return 0

$status_code = $data[4]['value'];

// status_message can be found in the 6th index['value']
// from the above xml will return Accept the service request successfully.

$status_message = $data[6]['value'];

// external transaction_id can be found in the value key of the 8th index
// from the above xml will return AG_20180413_00006db5596c16d995f5

$transaction_id = $data[8]['value'];
