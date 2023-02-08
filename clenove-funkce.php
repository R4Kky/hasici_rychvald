<?php
function zobrazCleny($db) {
    $dotazClenove = "
        select *
        from clenove
    ";
    
    $vysledekCleni = mysqli_query($db, $dotazClenove);
    $clenove = mysqli_fetch_all($vysledekCleni, MYSQLI_ASSOC); 
    return $clenove;
}
?>