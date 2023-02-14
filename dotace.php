<?php
require("db_connect.php");
require("nav.phtml");

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
$dotace1 = zobraz1($db);
$dotace2= zobraz2($db);
$nesport = zobrazNesport($db);
require("footer.phtml");
?>

<div class="container mt-2 mb-5">
    <div class="row">
        <p class="text-center">Seznam členů – Dotace z města Rychvald k 26. 11. 2022</p>
        <h2 class="mt-2 text-center">0-21</h2>
        <?php foreach ($dotace1 as $mlady) { ?>
            <div class="text-center">
                <p><?= $mlady["jmeno"] ?></p>
            </div>
        <?php } ?>
        <h2 class="mt-2 text-center">21+</h2>
        <?php foreach ($dotace2 as $dospely) { ?>
            <div class="text-center">
                <p><?= $dospely["jmeno"] ?></p>
            </div>
        <?php } ?>
        <h2 class="mt-2 text-center">Nesportovci</h2>
        <?php foreach ($nesport as $nesportovec) { ?>
            <div class="text-center">
                <p><?= $nesportovec["jmeno"] ?></p>
            </div>
        <?php } ?>
    </div>
</div>