<?php
    session_start();

    if ($_POST['lang'] === 'br') {
        $_SESSION['lang'] = 'br';
    } elseif ($_POST['lang'] === 'en') {
        $_SESSION['lang'] = 'en';
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
?>