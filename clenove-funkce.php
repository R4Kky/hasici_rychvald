<?php
function zobrazCleny($db) {
    $dotazClenove = "
        select *
        from clenove
        where mh=0
        order by jmeno
    ";
    
    $vysledekCleni = mysqli_query($db, $dotazClenove);
    $clenove = mysqli_fetch_all($vysledekCleni, MYSQLI_ASSOC); 
    return $clenove;
}
function zobrazMH($db) {
    $dotazMH = "
        select *
        from clenove
        where mh=1
        order by jmeno
    ";

    $vysledekMH = mysqli_query($db, $dotazMH);
    $MH = mysqli_fetch_all($vysledekMH, MYSQLI_ASSOC); 
    return $MH;
}
?>