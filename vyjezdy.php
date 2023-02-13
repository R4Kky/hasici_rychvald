<?php
require("db_connect.php");
require("nav.phtml");
require("vyjezdy-funkce.php");
$v2022 = zobraz2022($db);
$v2021 = zobraz2021($db);
$v2020 = zobraz2020($db);
$v2019 = zobraz2019($db);
$v2018 = zobraz2018($db);
$v2017 = zobraz2017($db);
$v2016 = zobraz2016($db);
$v2015 = zobraz2015($db);
$v2014 = zobraz2014($db);
require("vyjezdy-body.phtml");
require("footer.phtml");
?>