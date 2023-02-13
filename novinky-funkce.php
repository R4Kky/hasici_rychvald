<?php
function zobrazNovinky($db) {
    $dotazNovinky = "
    select *
    from novinky
    order by datum desc
    ";

    $vysledekNovinky = mysqli_query($db, $dotazNovinky);
    $novinky = mysqli_fetch_all($vysledekNovinky, MYSQLI_ASSOC); 
    return $novinky;
}
?>