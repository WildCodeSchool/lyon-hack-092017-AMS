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

    public function reposInfo()
    {
        $config = require "login.php";
        $login = $config["login"];
        $pass = $config["pass"];

        $res = $this->Guzzle->request('GET', 'https://api.github.com/users/' . $this->user . '/repos', [
            'auth' => ["$login", "$pass"]
        ]);
        $newuser = json_decode($res->getBody());

        return $newuser;
    }

    public function reposDate()
    {
       $newuser = $this->reposInfo();
       $newuserArrayObject = new \ArrayObject($newuser);
        $newuserArrayObject->updated_at->asort();

        return $newuserArrayObject;

    }

    public function valid()
    {

        if(curl_errno($this->usersInfo()))
        {
            return curl_error($this->usersInfo());
        }


    }
}