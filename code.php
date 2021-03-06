<?php
require 'vendor/autoload.php';

use api\File;
use api\Request;

$user = $_POST['username'];

    $monfichier = fopen('snippets/new.txt', 'w+');
    $template = file_get_contents("snippets/1.txt");
    fputs($monfichier, $template);

    $generate = new File($user);
    $generate->writeApiUser();
    $generate->writeRepos();


$request = new Request($user);

$newuser = $request->usersInfo();
$newrepo = $request->reposInfo();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous|Sahitya" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="function.js">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<section>
    <div class="section light-blue lighten-2">
        <br><br>
        <div class="container ">


            <div class="row valign-wrapper ">
                <div class="col s9 center-align">
                    <a href="form.php" class="waves-effect waves-light btn blue-grey darken-3">Go back to the Generator</a>
                    <br><br><br>
                    <a  class="waves-effect waves-light btn green darken-1" href="download.php">Click to download the Code</a>
                </div>
                <div class="col s3">
                    <div class="card center-align blue-grey darken-3">
                        <div class="card-image">
                            <img src="<?php echo $newuser->avatar_url;?>">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content white-text">
                            <h4><?php echo $newuser->login?></h4>
                        </div>

                        <ul>
                            <li class="white-text">My last repos :</li>
                            <?php

                            for($i = 0; $i <= 2; $i++){
                                echo "<li>" . "<a href=\"";
                                echo $newrepo[$i]->html_url;
                                echo "\">";
                                echo $newrepo[$i]->name . "</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>


                        <div class="card-action">
                            <a href="<?php echo $newuser->html_url;?>" class="white-text">Go in my github</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content blue-grey darken-3">
                            <span class="card-title white-text">Your code :</span>

                            <blockquote class="white-text">
                                <p>

                                    <?php
                                    $texte = '<&#63;php'. PHP_EOL;


                                    echo $texte;
                                    ?>

                                    $url = curl_init('https://api.github.com/users/<?php echo $user ?>'); <br>
                                    curl_setopt($url, CURLOPT_RETURNTRANSFER, true); <br>
                                    curl_setopt($url, CURLOPT_HEADER, 0); <br>
                                    curl_setopt($url, CURLOPT_TIMEOUT, 3); <br>
                                    curl_setopt($url, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');<br>
                                    curl_setopt($url, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Authorization: Bearer 20d648f938bf5963e996ab2df836f357675a8c67" ));<br>
                                    $data = curl_exec($url);<br>
                                    curl_close($url);<br>
                                    $json = json_decode($data);<br>

                                    $repos = curl_init('https://api.github.com/users/<?php echo $user ?>/repos');<br>
                                    curl_setopt($repos, CURLOPT_RETURNTRANSFER, true);<br>
                                    curl_setopt($repos, CURLOPT_HEADER, 0);<br>
                                    curl_setopt($repos, CURLOPT_TIMEOUT, 3);<br>
                                    curl_setopt($repos, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');<br>
                                    curl_setopt($repos, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Authorization: Bearer 20d648f938bf5963e996ab2df836f357675a8c67" ));<br>
                                    $datarepos = curl_exec($repos);<br>
                                    curl_close($repos);<br>
                                    $jsonrepos = json_decode($datarepos);<br>
                                    <?php
                                    $texte = '?>';
                                    echo $texte;
                                    ?>
    <xmp>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col s3">
            <div class="card center-align blue-grey darken-3">
                <div class="card-image">
                    <img src="<?php
                    $texte = '<?php echo $json->avatar_url;?>';
                    echo $texte;
                    ?>">
                    <span class="card-title"></span>
                </div>
                <div class="card-content white-text">
                    <h3><?php
                        $texte = '<?php echo $json->login;?>';
                        echo $texte;
                        ?></h3>
                </div>
                <ul>
                    <li class="white-text">My last repos :</li>
                    <?php
                    $texte = '<?php
                    for($i = 0; $i <= 2; $i++){';
                    echo $texte;
                    ?>

                    echo "<li>" . "<a href=\"";
                    echo $jsonrepos[$i]->html_url;
                    echo "\">";
                    echo $jsonrepos[$i]->name . "</a>";
                    echo "</li>";
                    }
                    ?>

                </ul>


                <div class="card-action">
                    <a href="<?php
                    $texte = '<?php echo $json->html_url;?>';
                    echo $texte;
                    ?>">Go in my github</a>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
    </xmp>
</p>

                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
