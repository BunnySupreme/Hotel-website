<?php
session_start();

// Lade header


if(isset($_POST["username"]) && isset($_POST["password"]))
{
    if($_POST["username"] == "admin" && $_POST["password"] == "admin")
    {
        // Login erfolgreich
        $_SESSION["usernameSession"] = $_POST["username"];
    } 

}

if (isset($_SESSION["usernameSession"])){
    echo "Angemeldet als: " . $_SESSION["usernameSession"];
}
// Lade Seiten

$page = "404.php";
$p = '';
if(isset($_GET['page']))
{
    $p = $_GET['page'];
}

if($p == '' || $p == 'home')
{
    $page = 'home.php';
}

if($p == 'help')
{
    $page = 'Hilfeseite.php';
}

if($p == 'login')
{
    $page = 'login.php';
}

if($p == 'registrierung')
{
    $page = 'registrierung.php';
} 

if($p == 'impressum')
{
    $page = 'impressum.php';
}

if($p == 'buchen')
{
    $page = 'buchen.php';
}

if($p == 'news-beitrag')
{
    $page = 'news-beitrag.php';
}

if($p == 'logout')
{
    $page = 'logout.php';
}

if($p == 'logout')
{


    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page after logout
    header("Location: index.php?page=home");
    echo "Sie sind jetzt abgemeldet";
    exit();
    

}

include('header.php');
include('nav.php');

include($page);

// Lade Footer

include('footer.php');


?>