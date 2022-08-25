<?php
    session_start();
    if(!isset($_SERVER['auth'])){
        header('location: ../login.php');
    }