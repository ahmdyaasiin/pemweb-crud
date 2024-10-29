<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '1234';
$dbname = 'pemweb-crud';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($mysqli->connect_errno) {
    die('Database connection failure');
}
