<?php
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
?>