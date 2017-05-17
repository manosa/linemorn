<?php
$access_token = 'I4zLX2Zed+kCGRWtPDZDdNoRIYkPGS0kf2p4KuRe1/DPfx8VKa2ie/3MXOXIvKkSDU/2BiGHAJBVhKoLZHJAfKirIVeRsbbpLB4xDd3JepGeLmmA15zMbgcQnTK0fh9AJqT85A3+GXR8YWzkkC5d7QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
