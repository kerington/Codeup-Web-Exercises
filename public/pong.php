<?php

require 'functions.php';

function pageController(){
    $data = [];
    if (isset($_GET['i'])){
        $data['det'] = $_GET['i'];
    } else {
        $data['det'] = NULL;
    }

    if(isset($_GET['r'])){
        $data['counter'] = $_GET['r'];
    } else {
        $data['counter'] = 0;
    }

    return $data;
}

extract(pageController());

if($det === 'hit'){
    $counter++;
} elseif ($det === 'miss'){
    $counter = 0;
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>
        <title>Ping Pong</title>
    </head>
    <body>
    <h1> Ping / Pong </h1>
    <h3>
        <?=$counter ?>
    </h3>
        <a href="/ping.php?i=hit&r=<?= $counter ?>">HIT</a>
        <a href="/ping.php?i=miss&r=<?= $counter ?>">MISS</a>
    </body>
</html>
