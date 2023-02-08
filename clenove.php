<?php
require("./nav.phtml");
require("./db_connect.php");
require("./clenove-funkce.php");
$clenove = zobrazCleny($db);

require("./clenove-body.phtml");
require("./footer.phtml");
?>