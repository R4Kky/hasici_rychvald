<?php
require("db_connect.php");
function vedouci($db) {
    $dotazVedouci = "
    select *
    from clenove
    where vedouci=1
    ";

    $vysledekVedouci = mysqli_query($db, $dotazVedouci);
    $Vedouci = mysqli_fetch_all($vysledekVedouci, MYSQLI_ASSOC); 
    return $Vedouci;
}
$vedouci = vedouci($db);
require("nav.phtml");
require("mladi_hasici-body.phtml");
require("footer.phtml");
?>