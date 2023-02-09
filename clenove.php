<?php
require("./nav.phtml");
require("./db_connect.php");
require("./clenove-funkce.php");
$clenove = zobrazCleny($db);
$MH = zobrazMH($db);
require("./clenove-body.phtml");
require("./footer.phtml");
?>