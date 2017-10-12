<?php
require 'vendor/autoload.php';

$user = "ManuelBriand";
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/users/' . $user, [
    'auth' => ['al2b', 'yxvd3NPC'],
]);
//echo $res->getStatusCode();
// "200"
//echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
//echo $res->getBody();
// {"type":"User"...'

//foreach ($res->getBody() as $name => $values) {
//    echo $name . ': ' . implode(', ', $values) . "\r\n";
//}

//$newuser = json_decode($res->getBody());
//var_dump($newuser);
//echo $newuser->avatar_url;

$res2 = $client->request('GET', 'https://api.github.com/users/' . $user . "/repos", [
    'auth' => ['al2b', 'yxvd3NPC'],
]);

$newdepos = json_decode($res2->getBody());
var_dump($newdepos);
