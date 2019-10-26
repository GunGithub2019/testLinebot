<?php
$access_token = 'j1bOierLHanM2zjEDhxg2hSEdCe4jC3yLbJq0mV0aA3aTeN7d4aR5N4ZdjiL1/+imnWeX9FKEHCHn4G12IA99Vv4PeatTxjn2tAtabwWfvW9xLno/U53di7/xQ4jAWqlXqbuIdKHu9uBWhHvYW1IVAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
