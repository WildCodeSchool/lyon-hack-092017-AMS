<?php


namespace api;

const FICHIER = "snippets/new.txt";
const ORIGIN = "snippets/1.txt";


class File
{

    public $user;

    /**
     * File constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    function writeApiUser(){
        $fichier = FICHIER;
        $var = "curl_init('https://api.github.com/users/$this->user');";
        $text=fopen($fichier,'r') or die("Fichier manquant");
        $contenu=file_get_contents($fichier);
        $contenuMod=str_replace('coucou', $var, $contenu);
        fclose($text);

//ouverture en écriture
        $text2=fopen($fichier,'w+') or die("Fichier manquant");
        fwrite($text2,$contenuMod);
        fclose($text2);
    }

    function writeRepos()
    {
        $fichier = FICHIER;
        $var2 = "curl_init('https://api.github.com/users/$this->user/repos');";
        $text3 = fopen($fichier, 'r') or die("Fichier manquant");
        $contenu3 = file_get_contents($fichier);
        $contenuMod2 = str_replace('salut', $var2, $contenu3);
        fclose($text3);

//ouverture en écriture
        $text4 = fopen($fichier, 'w+') or die("Fichier manquant");
        fwrite($text4, $contenuMod2);
        fclose($text4);
    }
}