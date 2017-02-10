<?php
$access_token = 'Nwzack6/A+KoD2BcWqEHXh6SZJmLI9DsJ2nKpf03HnrAhjVXlKYVePIeHO27a6xb5JpXEGDOABZY6oc6UU72Wk/6+aZU+3Ps+5uHAkgqMxS/fBBmr7WTGL9H/ap7qiqE9uac/T02OUGiT2acywvOIgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>