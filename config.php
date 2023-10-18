<?php

    define('HOST', getenv('DB_HOST'));
    define('USER', getenv('DB_USER'));
    define('PASS', getenv('DB_PASSWORD'));
    define('BASE', getenv('DB_NAME'));

    $conn = new MySQLi(HOST,USER,PASS,BASE);