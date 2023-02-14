<?php
require("db_connect.php");
require("nav.phtml");
function zobraz2022($db) {
    $dotaz2022 = "
        select *
        from vyjezdy
        where year = 2022
        order by datum desc
    ";

    $vysledek2022 = mysqli_query($db, $dotaz2022);
    $v2022 = mysqli_fetch_all($vysledek2022, MYSQLI_ASSOC); 
    return $v2022;
}
function zobraz2021($db) {
    $dotaz2021 = "
        select *
        from vyjezdy
        where year = 2021
        order by datum desc
    ";

    $vysledek2021 = mysqli_query($db, $dotaz2021);
    $v2021 = mysqli_fetch_all($vysledek2021, MYSQLI_ASSOC); 
    return $v2021;
}
function zobraz2020($db) {
    $dotaz2020 = "
        select *
        from vyjezdy
        where year = 2020
        order by datum desc
    ";

    $vysledek2020 = mysqli_query($db, $dotaz2020);
    $v2020 = mysqli_fetch_all($vysledek2020, MYSQLI_ASSOC); 
    return $v2020;
}
function zobraz2019($db) {
    $dotaz2019 = "
        select *
        from vyjezdy
        where year = 2019
        order by datum desc
    ";

    $vysledek2019 = mysqli_query($db, $dotaz2019);
    $v2019 = mysqli_fetch_all($vysledek2019, MYSQLI_ASSOC); 
    return $v2019;
}
function zobraz2018($db) {
    $dotaz2018 = "
        select *
        from vyjezdy
        where year = 2018
        order by datum desc
    ";

    $vysledek2018 = mysqli_query($db, $dotaz2018);
    $v2018 = mysqli_fetch_all($vysledek2018, MYSQLI_ASSOC); 
    return $v2018;
}
function zobraz2017($db) {
    $dotaz2017 = "
        select *
        from vyjezdy
        where year = 2017
        order by datum desc
    ";

    $vysledek2017 = mysqli_query($db, $dotaz2017);
    $v2017 = mysqli_fetch_all($vysledek2017, MYSQLI_ASSOC); 
    return $v2017;
}
function zobraz2016($db) {
    $dotaz2016 = "
        select *
        from vyjezdy
        where year = 2016
        order by datum desc
    ";

    $vysledek2016 = mysqli_query($db, $dotaz2016);
    $v2016 = mysqli_fetch_all($vysledek2016, MYSQLI_ASSOC); 
    return $v2016;
}
function zobraz2015($db) {
    $dotaz2015 = "
        select *
        from vyjezdy
        where year = 2015
        order by datum desc
    ";

    $vysledek2015 = mysqli_query($db, $dotaz2015);
    $v2015 = mysqli_fetch_all($vysledek2015, MYSQLI_ASSOC); 
    return $v2015;
}
function zobraz2014($db) {
    $dotaz2014 = "
        select *
        from vyjezdy
        where year = 2014
        order by datum desc
    ";

    $vysledek2014 = mysqli_query($db, $dotaz2014);
    $v2014 = mysqli_fetch_all($vysledek2014, MYSQLI_ASSOC); 
    return $v2014;
}
$v2022 = zobraz2022($db);
$v2021 = zobraz2021($db);
$v2020 = zobraz2020($db);
$v2019 = zobraz2019($db);
$v2018 = zobraz2018($db);
$v2017 = zobraz2017($db);
$v2016 = zobraz2016($db);
$v2015 = zobraz2015($db);
$v2014 = zobraz2014($db);
?>

<div class="container mt-2 mb-5">
    <h2 class="text-center">2022</h2>
    <div class="row text-center">
        <div class="col">
            <p><b>Datum</b></p>
        </div>
        <div class="col">
            <p><b>Typ události</b></p>
        </div>
        <div class="col">
            <p><b>technika</b></p>
        </div>
    </div>
    <?php foreach ($v2022 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2021</h2>
    <?php foreach ($v2021 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2020</h2>
    <?php foreach ($v2020 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2019</h2>
    <?php foreach ($v2019 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2018</h2>
    <?php foreach ($v2018 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2017</h2>
    <?php foreach ($v2017 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2016</h2>
    <?php foreach ($v2016 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2015</h2>
    <?php foreach ($v2015 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2014</h2>
    <?php foreach ($v2014 as $vyjezd) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $vyjezd["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["typ"] ?></p>
            </div>
            <div class="col">
                <p><?= $vyjezd["technika"] ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<?php
require("footer.phtml");
?>