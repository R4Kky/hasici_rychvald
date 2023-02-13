<?php
require("db_connect.php");
require("nav.phtml");
require("dotace-funkce.php");
$dotace1 = zobraz1($db);
$dotace2= zobraz2($db);
$nesport = zobrazNesport($db);
require("dotace-body.phtml");
require("footer.phtml");
?>