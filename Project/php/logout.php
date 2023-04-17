<?php

session_start();

/* SESSION UNSET */
$sessionKeys = array_keys($_SESSION);
foreach($sessionKeys as $key) {
    if($key != 'theme')
        unset($_SESSION[$key]);
}

setcookie('surname', null, -1);
setcookie('name', null, -1);
setcookie('id', null, -1);
header("Location: http://localhost:8080/health/php/main_page.php");

?>