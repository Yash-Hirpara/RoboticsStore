<?php

$curl = curl_init();

curl_setopt_array($curl, [
        CURLOPT_URL => "https://paypaldimasv1.p.rapidapi.com/webhookEvent",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: PayPaldimasV1.p.rapidapi.com"
        ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
        echo "cURL Error #:" . $err;
} else {
        echo $response;
}

