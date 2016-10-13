<?php
$access_token = 'NB53Ca26nRCusuRdiUx1utrIqfifczNRLNTqqWn12QQkXbfD7ux4u18gGNjbtFzQVktrMzbxlmvX4guVby5sBVQQiEu1Kw2UOhXbH8loqHhNRHF0yecErtXEgBBcc4/aaVKI6+ppy201JL47RtCBTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
