<?php
require("db_connect.php");
require("nav.phtml");
require("novinky-funkce.php");
$novinky=zobrazNovinky($db);
require("novinky-body.phtml");
require("footer.phtml");
?>