<?php

namespace api;

use GuzzleHttp\Client;


class Request
{

    public $user;
    public $Guzzle;

    /**
     * Request constructor.
     * @param $user
     * @param $Guzzle
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->Guzzle = new Client();
    }

    public function usersInfo()
    {
        $config = require "login.php";
        $login = $config["login"];
        $pass = $config["pass"];

        $res = $this->Guzzle->request('GET', 'https://api.github.com/users/' . $this->user, [
            'auth' => ["$login", "$pass"]
        ]);
        $newuser = json_decode($res->getBody());

        return $newuser;
    }


}