<?php

$user = $_POST['username'];
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
    <link rel="stylesheet" href="styles.css">
</head>
<section>
    <div class="section light-blue darken-">
        <div class="container">

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
            <div class="card">
                <div class="card-image">
                    <img src="<?php
                    $texte = '<?php echo $json->avatar_url;?>';
                    echo $texte;
                    ?>">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <h3><?php
                        $texte = '<?php echo $json->login;?>';
                        echo $texte;
                        ?></h3>
                </div>
                <ul>
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

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

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
