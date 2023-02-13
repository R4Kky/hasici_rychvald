<?php
function zobrazNovinky($db) {
    $dotazNovinky = "
    select *
    from novinky
    ";

    $vysledekNovinky = mysqli_query($db, $dotazNovinky);
    $novinky = mysqli_fetch_all($vysledekNovinky, MYSQLI_ASSOC); 
    return $novinky;
}
?>