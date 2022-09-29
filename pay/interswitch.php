<?php
function clean_data($data) {
    /* trim whitespace */
    $data = trim($data);
    return $data;
}

try {
    $url = "https://qa.interswitchng.com/collections/api/v1/gettransaction.json";
    $query = [
        "merchantcode" => clean_data($_POST['merchantcode']),
        "transactionreference" => clean_data($_POST['transactionreference']),
        "amount" => clean_data($_POST['amount'])
    ];
    $query = http_build_query($query);
    $url = "{$url}?$query";

    $cURLConnection = curl_init();

    curl_setopt($cURLConnection, CURLOPT_URL, $url);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $transVerified = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($transVerified);
    return $jsonArrayResponse;
} catch (\Throwable $th) {
    return json_encode([
        "message" => $th->getMessage()
    ]);
}
