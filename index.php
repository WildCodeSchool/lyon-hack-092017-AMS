<?php
require 'vendor/autoload.php';


$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/users/al2b');
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

foreach ($res->getBody() as $name => $values) {
    echo $name . ': ' . implode(', ', $values) . "\r\n";
}

