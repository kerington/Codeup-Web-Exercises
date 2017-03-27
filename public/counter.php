<?php

function pageController(){
    // Initialize an empty data array.
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

if($det === 'up'){
    $counter++;
} elseif ($det === 'down'){
    $counter--;
}
?>

<!-- HTML -->

<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
    </head>
    <body>
    <h1> counter </h1>
    <h3>
        <?=$counter ?>
    </h3>
        <a href="/counter.php?i=up&r=<?= $counter ?>">up</a>
        <a href="/counter.php?i=down&r=<?= $counter ?>">down</a>
    </body>
</html>