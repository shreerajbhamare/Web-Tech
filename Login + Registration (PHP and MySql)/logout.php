<?php
    session_start();

    $_SESSION = array();

    session_destroy();

    header("Location:../Yotube login Project/index.php");

?>