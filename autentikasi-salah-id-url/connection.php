<?php

    $servername = 'localhost';
    $database   = 'singkat-powerful';
    $username   = 'root';
    $password   = 'admin';
    
    $db         = new PDO("mysql:host=$servername;dbname=$database", $username, $password);