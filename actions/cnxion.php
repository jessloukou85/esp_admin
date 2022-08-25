<?php
    try {
        session_start();
        $cnx = new pdo ('mysql:host=localhost;dbname=espace_adminer;charset=utf8','root','');
    } catch (Exception $e) {
        die ("une erreure a été trouvé :". $e->getMessage());
    }