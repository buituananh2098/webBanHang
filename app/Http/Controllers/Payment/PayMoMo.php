<?php

function setDataPayment(Request $request){
    $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
    $partnerCode = "MOMOBIE420200428";
    $accessKey = "xOOYkFVIuMACsn7J";
    $secretKey = "X9QDCl2QtkSWDLdEp7pEG2UKlxxL29Op";
    $requestId = time()."";
    $requestType = "transactionStatus";

}
