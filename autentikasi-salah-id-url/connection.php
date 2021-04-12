<?php

    $servername = 'localhost';
    $database   = 'singkat-powerful';
    $username   = 'root';
    $password   = '';
    
    $db         = new PDO("mysql:host=$servername;dbname=$database", $username, $password);