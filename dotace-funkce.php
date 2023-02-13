<?php
function zobraz1($db) {
    $dotaz1 = "
        select *
        from clenove
        where dotace = 1
    ";

    $vysledekDotaz1 = mysqli_query($db, $dotaz1);
    $dotace1 = mysqli_fetch_all($vysledekDotaz1, MYSQLI_ASSOC); 
    return $dotace1;
}
function zobraz2($db) {
    $dotaz2 = "
        select *
        from clenove
        where dotace = 2
    ";

    $vysledekDotaz2 = mysqli_query($db, $dotaz2);
    $dotace2 = mysqli_fetch_all($vysledekDotaz2, MYSQLI_ASSOC); 
    return $dotace2;
}
function zobrazNesport($db) {
    $dotazNesport = "
        select *
        from clenove
        where dotace = 1
    ";

    $vysledekDotaz = mysqli_query($db, $dotazNesport);
    $nesport = mysqli_fetch_all($vysledekDotaz, MYSQLI_ASSOC); 
    return $nesport;
}
?>