<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'thani');
   define('DB_PASSWORD', '123');
   define('DB_DATABASE', 'seusldb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>