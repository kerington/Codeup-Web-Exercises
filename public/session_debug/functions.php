<?php
function redirect($location)
{
    header("Location: $location");
    exit;
}

function isUserAuthenticated()
{
    return isset($_SESSION['logged_in_user']);
}

function user()
{
    return isset($_SESSION['logged_in_user']);
}

function authenticate($username, $password)
{
    if ($_POST['username'] == 'guest' && $_POST['password'] == 'password') {
        $_SESSION['logged_in_user'] = $username;
        return true;
    }
    return false;
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function input($key, $default = '')
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function clearSession()
{
    session_unset();
    session_regenerate_id(true);
}
