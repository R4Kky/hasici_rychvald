<?php
require("db_connect.php");
require("nav.phtml");

function zobrazS2022($db) {
    $dotazS2022 = "
        select *
        from souteze
        where year = 2022
        order by datum desc
    ";

    $vysledekS2022 = mysqli_query($db, $dotazS2022);
    $s2022 = mysqli_fetch_all($vysledekS2022, MYSQLI_ASSOC); 
    return $s2022;
}
function zobrazS2021($db) {
    $dotazS2021 = "
        select *
        from souteze
        where year = 2021
        order by datum desc
    ";

    $vysledekS2021 = mysqli_query($db, $dotazS2021);
    $s2021 = mysqli_fetch_all($vysledekS2021, MYSQLI_ASSOC); 
    return $s2021;
}
function zobrazS2020($db) {
    $dotazS2020 = "
        select *
        from souteze
        where year = 2020
        order by datum desc
    ";

    $vysledekS2020 = mysqli_query($db, $dotazS2020);
    $s2020 = mysqli_fetch_all($vysledekS2020, MYSQLI_ASSOC); 
    return $s2020;
}
function zobrazS2019($db) {
    $dotazS2019 = "
        select *
        from souteze
        where year = 2019
        order by datum desc
    ";

    $vysledekS2019 = mysqli_query($db, $dotazS2019);
    $s2019 = mysqli_fetch_all($vysledekS2019, MYSQLI_ASSOC); 
    return $s2019;
}
function zobrazS2018($db) {
    $dotazS2018 = "
        select *
        from souteze
        where year = 2018
        order by datum desc
    ";

    $vysledekS2018 = mysqli_query($db, $dotazS2018);
    $s2018 = mysqli_fetch_all($vysledekS2018, MYSQLI_ASSOC); 
    return $s2018;
}
function zobrazS2017($db) {
    $dotazS2017 = "
        select *
        from souteze
        where year = 2017
        order by datum desc
    ";

    $vysledekS2017 = mysqli_query($db, $dotazS2017);
    $s2017 = mysqli_fetch_all($vysledekS2017, MYSQLI_ASSOC); 
    return $s2017;
}
function zobrazS2016($db) {
    $dotazS2016 = "
        select *
        from souteze
        where year = 2016
        order by datum desc
    ";

    $vysledekS2016 = mysqli_query($db, $dotazS2016);
    $s2016 = mysqli_fetch_all($vysledekS2016, MYSQLI_ASSOC); 
    return $s2016;
}
function zobrazS2015($db) {
    $dotazS2015 = "
        select *
        from souteze
        where year = 2015
        order by datum desc
    ";

    $vysledekS2015 = mysqli_query($db, $dotazS2015);
    $s2015 = mysqli_fetch_all($vysledekS2015, MYSQLI_ASSOC); 
    return $s2015;
}
function zobrazS2014($db) {
    $dotazS2014 = "
        select *
        from souteze
        where year = 2014
        order by datum desc
    ";

    $vysledekS2014 = mysqli_query($db, $dotazS2014);
    $s2014 = mysqli_fetch_all($vysledekS2014, MYSQLI_ASSOC); 
    return $s2014;
}
function zobrazS2013($db) {
    $dotazS2013 = "
        select *
        from souteze
        where year = 2013
        order by datum desc
    ";

    $vysledekS2013 = mysqli_query($db, $dotazS2013);
    $s2013 = mysqli_fetch_all($vysledekS2013, MYSQLI_ASSOC); 
    return $s2013;
}
function zobrazS2012($db) {
    $dotazS2012 = "
        select *
        from souteze
        where year = 2012
        order by datum desc
    ";

    $vysledekS2012 = mysqli_query($db, $dotazS2012);
    $s2012 = mysqli_fetch_all($vysledekS2012, MYSQLI_ASSOC); 
    return $s2012;
}
function zobrazS2011($db) {
    $dotazS2011 = "
        select *
        from souteze
        where year = 2011
        order by datum desc
    ";

    $vysledekS2011 = mysqli_query($db, $dotazS2011);
    $s2011 = mysqli_fetch_all($vysledekS2011, MYSQLI_ASSOC); 
    return $s2011;
}
function zobrazS2010($db) {
    $dotazS2010 = "
        select *
        from souteze
        where year = 2010
        order by datum desc 
    ";

    $vysledekS2010 = mysqli_query($db, $dotazS2010);
    $s2010 = mysqli_fetch_all($vysledekS2010, MYSQLI_ASSOC); 
    return $s2010;
}
function zobrazS2009($db) {
    $dotazS2009 = "
        select *
        from souteze
        where year = 2009
        order by datum desc
    ";

    $vysledekS2009 = mysqli_query($db, $dotazS2009);
    $s2009 = mysqli_fetch_all($vysledekS2009, MYSQLI_ASSOC); 
    return $s2009;
}
function zobrazS2008($db) {
    $dotazS2008 = "
        select *
        from souteze
        where year = 2008
        order by datum desc
    ";

    $vysledekS2008 = mysqli_query($db, $dotazS2008);
    $s2008 = mysqli_fetch_all($vysledekS2008, MYSQLI_ASSOC); 
    return $s2008;
}
function zobrazS2007($db) {
    $dotazS2007 = "
        select *
        from souteze
        where year = 2007
        order by datum desc
    ";

    $vysledekS2007 = mysqli_query($db, $dotazS2007);
    $s2007 = mysqli_fetch_all($vysledekS2007, MYSQLI_ASSOC); 
    return $s2007;
}
function zobrazS2006($db) {
    $dotazS2006 = "
        select *
        from souteze
        where year = 2006
        order by datum desc
    ";

    $vysledekS2006 = mysqli_query($db, $dotazS2006);
    $s2006 = mysqli_fetch_all($vysledekS2006, MYSQLI_ASSOC); 
    return $s2006;
}
$s22 = zobrazS2022($db);
$s21 = zobrazS2021($db);
$s20 = zobrazS2020($db);
$s19 = zobrazS2019($db);
$s18 = zobrazS2018($db);
$s17 = zobrazS2017($db);
$s16 = zobrazS2016($db);
$s15 = zobrazS2015($db);
$s14 = zobrazS2014($db);
$s13 = zobrazS2013($db);
$s12 = zobrazS2012($db);
$s11 = zobrazS2011($db);
$s10 = zobrazS2010($db);
$s09 = zobrazS2009($db);
$s08 = zobrazS2008($db);
$s07 = zobrazS2007($db);
$s06 = zobrazS2006($db);
require("footer.phtml");
?>
<div class="container mt-2 mb-5">
    <h2 class="text-center">2022</h2>
    <?php foreach ($s22 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2021</h2>
    <?php foreach ($s21 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2020</h2>
    <?php foreach ($s20 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2019</h2>
    <?php foreach ($s19 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2018</h2>
    <?php foreach ($s18 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2017</h2>
    <?php foreach ($s17 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2016</h2>
    <?php foreach ($s16 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2015</h2>
    <?php foreach ($s15 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2014</h2>
    <?php foreach ($s14 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2013</h2>
    <?php foreach ($s13 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2012</h2>
    <?php foreach ($s12 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2011</h2>
    <?php foreach ($s11 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2010</h2>
    <?php foreach ($s10 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2009</h2>
    <?php foreach ($s09 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2008</h2>
    <?php foreach ($s08 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2007</h2>
    <?php foreach ($s07 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
    <h2 class="text-center">2006</h2>
    <?php foreach ($s06 as $soutez) { ?>
        <div class="row text-center">
            <div class="col">
                <p><?= $soutez["datum"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["misto"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["ucastnik"] ?></p>
            </div>
            <div class="col">
                <p><?= $soutez["umisteni"] ?></p>
            </div>
        </div>
    <?php } ?>
</div>