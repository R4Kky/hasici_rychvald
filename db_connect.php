<?php
$DBserver = "localhost";
$DBuzivatel = "root";
$DBheslo = "";
$DBnazev = "sdhrychvald";

$db = mysqli_connect($DBserver, $DBuzivatel, $DBheslo, $DBnazev);
mysqli_set_charset($db, "utf8");