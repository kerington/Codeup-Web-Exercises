<html>
<head>
  <style type="text/css" media="screen">
    .active {
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php

//THIS IS THE NAVBAR MENU
$items = ["home", "news", "about", "contact"];

foreach ($items as $item)
{
    if (isset($_GET['page']) && $_GET['page'] == $item)
    {
        echo '<a href="?page=' . $item . '" class="active"> ' . $item .'</a><br>';
        $activePage = $item . ".php";
    }
    else
    {
        echo '<a href="?page=' . $item . '"> ' . $item . '&nbsp;' . '&nbsp;' . '&nbsp;' . '</a>';
    }
}

// Include your page
if (isset($activePage))
{
    include $activePage;
}
else
{
    include "header.php";
    include "home.php";
    include "footer.php";
}

?>

</body>
</html>
