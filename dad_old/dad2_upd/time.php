<?php
/*
function redirect() {
    header('location:index.php');
}
*/
?>



<?php

include 'config.php';

if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) != '/index.html') {
    header('Location: index.html');
    exit;
}
?>

