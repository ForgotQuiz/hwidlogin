<W<?php
$host = "localhost";
$dbname = "id18487624_wp_98929ead8975d42f1dc195cef6580d5c";
$username = "id18487624_wp_98929ead8975d42f1dc195cef6580d5c";
$password = "GleeWinning-000";
try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}catch(Exception $e){
    die("Fatal error: ".$e->getMessage());
}
