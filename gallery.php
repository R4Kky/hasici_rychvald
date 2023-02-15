<?php
require("nav.phtml");
?>

<style>
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-menu1 {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-menu1 a {
  text-decoration: none;
  display: block;
}
.show {display:block;}
</style>
<script>
function myFunction(id) {
    document.getElementById(id).classList.toggle("show");
}
window.onclick = function(event) {
    if (!event.target.matches('.menu2')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu1");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>
<div class="container mb-5 mt-2 text-center">
    <div class=" dropdown row w-100 mb-2">
        <button onclick="myFunction('22')" class="btn btn-primary btn-lg btn-block w-100" type="button" data-toggle="dropdown">2022</button>
        <ul class="dropdown-menu1 bg-secondary" id="22">
        <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.10.2022_-_Drakiada/" role="button">Drakiáda - 14.10.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.9.2022_-_MLOK_Vrbice/" role="button">MLOK Vrbice - 11.9.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.9.2022_-_MLOK_Horni_Sucha/" role="button">MLOK Horní Suchá - 10.9.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.9.2022_-_MLOK_Rychvald/" role="button">MLOK Rychvald - 3.9.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.8.2022_-_soutez_Petrvald/" role="button">soutěž Petřvald - 13.8.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.6.2022_-_Krajske_kolo_dorostu/" role="button">Krajské kolo dorostu, Frýdek - Místek - 12.6.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.5.2022_-_Okresni_kolo_dorostu_-_Cesky_Tesin/" role="button">Okresní kolo dorostu, Český Těšín - 15.5.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.5.2022_-_Okresni_kolo_Plamen%2C_Cesky_Tesin/" role="button">Okresní kolo PLAMEN, Český Těšín - 14.5.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.5.2022_-_OSMU/" role="button">OŠMÚ - 13.5.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.5.2022_-_MLOK_Orlova_Mesto/" role="button">MLOK Orlová Město - 7.5.2022</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9.4.2022_-_Okrskovy_turnaj_ve_stolnim_tenise/" role="button">Okrskový turnaj ve stolním tenise - 9.4.2022</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('21')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2021</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="21">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/Oceneni_na_mestskem_urade/" role="button">Ocenění MH a dorostu na městském úřadě - 20.12.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.10.2021_-_MH%2C_ZPV/" role="button">MH + dorost, ZPV, Kopytov  - 16.10.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/NDT_Rychvald_-_3.10.2021/" role="button">NDT Rychvald - 3.10.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/Havirov_Mesto_-_2.10.2021/" role="button">Havířov Město - 2.10.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.9.2021_-_TFA%2C_4.kolo_-_Sobesovice/" role="button">4.kolo TFA ligy pro MH a dorost - Soběšovice - 25.9.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.9.2021_-_MH%2C_Vrbice/" role="button">MH, Vrbice - 12.9.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.9.2021_-_MH%2C_Horni_Sucha/" role="button">MH, Horní Suchá - 11.9.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.9.2021_-_MH_Rychvald/" role="button">MH, Rychvald - 5.9.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/MH_dorost_TFA_Hostalkovice_-_4.9.2021/" role="button">3.kolo TFA ligy pro MH a dorost - Ostrava Hošťalkovice - 4.9.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/MH_dorost%2C_TFA_-_Haj_ve_Slezsku_28.8.2021/" role="button">2.kolo TFA ligy pro MH a dorost - Háj ve Slezsku - 28.8.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/MH%2C_chata_Skalka_-_1.8_-_6.8.2021/" role="button">MH - chata Skalka - 1.8.-6.8.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.8.2021_-_ukazka_Slavoj_Rychvald/" role="button">Ukázka na Slavoji - 11.7.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.6.2021_-_MH_Dorost%2C_Orlova_Poruba/" role="button">MH + dorost, Orlová Poruba - 26.6.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.6.2021_-_TFA_pro_MH_a_Dorsto%2C_Horni_Sucha/" role="button">1.kolo TFA ligy pro MH a dorost - Horní Suchá - 19.6.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.6.2021_-_dorostenci%2C_Krajske_kolo%2C_Opava/" role="button">dorost, Krajské kolo v požárním sportu, Opava - 6.6.2021</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.6.2021_-_MH_Krajske_kolo_v_Opave/" role="button">Starší žáci, Krajské kolo, Opava - 5.6.2021</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('20')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2020</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="20">
        <div class="row"><a class="btn btn-secondary" href="" role="button"></a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9.12.2020_-_MH%2C_Mikulas/" role="button">MH + dorost, Mikuláš - 9.12.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.9.2020_-_MH_dorost%2C_nocni_soutez_Terlicko_Hradiste/" role="button">MH + dorost, noční soutěž Těrlicko Hradiště - 25.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.10.2020_-_cerpani_vody/" role="button">Čerpání vody - 13.10.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.9.2020_-_Dorost_Orlova_Poruba/" role="button">Dorost - Orlová Poruba - 27.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.9.2020_-_MH_nocni_Terlicko_Hradiste/" role="button">MH + dorost, Těrlicko Hradiště noční soutěž - 26.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.9.2020_-_MH_Kopytov/" role="button">MH, Kopytov - 26.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.9.2020_-_MH%2C_soutez_Vrbice/" role="button">MH + dorost - Vrbice - 20.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.9.2020_-_MH_Chotebuz/" role="button">MH, Chotěbuz - 19.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.9.2020_-_MH_Rychvald/" role="button">MH + dorost, Rychvald - 6.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.9.2020_-_O_pohar_KSH_MSK/" role="button">Soutěž o putovní pohár KSH MSK - 5.9.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.8.2020_-_Doubrava/" role="button">soutěž Doubrava - 29.8.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.8.2020_-_Orlova_Poruba/" role="button">Soutěž Orlová Poruba - 29.8.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.6_-_6.8.2020_-_Skalka/" role="button">Skalka - 1.8 - 6.8.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.7.2020_-_cerpani_Slavoje/" role="button">Čerpání vody - 2.7.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.6.2020_-_brigada_HZ/" role="button">Brigáda na HZ - 27.6.2020</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.1.2020_-_VVH/" role="button">VVH - 18.1.2020</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('19')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2019</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="19">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.10.2019_-_ZPV_Horni_Sucha/" role="button">ZPV Horní Suchá - 19.10.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.10.2019_-_NDT_Rychvald/" role="button">NDT Rychvald - 6.10.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28.9.2019_-_MH%2C_Terlicko_Hradiste/" role="button">MH, Těrlicko Hradiště - 28.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28.9.2019_-_MH%2C_Bohumin_Kopytov/" role="button">MH, Bohumín Kopytov - 28.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.9.2019_-_Orlova_Poruba%2C_dorost/" role="button">Dorost, Orlová Poruba - 21.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.9.2019_-_MH%2C_Orlova_Poruba/" role="button">MH, Orlová Poruba - 21.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.9.2019_-_MH%2C_Chotebuz/" role="button">MH, Chotěbuz - 15.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.9.2019_-_TFA_Bobrovniky/" role="button">TFA Bobrovníky - 14.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.9.2019_-_MH%2C_Horni_Sucha/" role="button">MH, Horní Suchá - 14.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.9.2019_-_MH%2C_vrbice/" role="button">MH, Vrbice - 9.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.9.2019_-_Rychvald%2C_dorost/" role="button">Dorost, Rychvald - 7.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.9.2019_-_MH%2C_Rychvald/" role="button">MH, Rychvald - 7.9.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.8._-_8.8._2019_-_Vylet_na_Skalku/" role="button">Výlet na Skalku - 3.8. - 8.8.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23.6.2019_-_MH_Petrovice_Zavada/" role="button">MH, Petrovice Závada - 23.6.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.6.2019_-_MH%2C_TFA_Horni_Sucha/" role="button">MH, TFA Horní Suchá - 22.6.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9.6.2019_-_MH%2C_Karvina_Hranice/" role="button">MH, Karviná Hranice - 9.6.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.6.2019_-_Bohumin_Skrecon%2C_dospeli_dorost/" role="button">Bohumín Skřečoň - 8.6.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.6.2019_-_MH%2C_Bohumin_Skrecon/" role="button">MH, Bohumín Skřečoň - 8.6.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.5.2019_-_Dorostenci%2C_Okresni_kolo/" role="button">Dorost, Okresní kolo Český Těšín - 27.5.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.5.2019_-_MH%2C_Plamen/" role="button">MH, Plamen - 26.5.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.5.2019_-_Zakladni_skola_-_ukazka/" role="button">Ukázka na ZŠ - 3.5.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.5.2019_-_MH_Orlova_Mesto/" role="button">MH, Orlová Město - 4.5.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.4.2019_-_Okrskova_soutez%2C_Doubrava/" role="button">Okrsková soutěž, Doubrava - 27.4.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.4.2019_-_MH_TFA_Dolni_Lutyne/" role="button">MH, TFA Dolní Lutyně - 27.4.2019</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.3.2019_-_MH%2C_exukrze_HBZS/" role="button">MH, exkurze HBZS - 27.3.2019</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('18')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2018</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="18">
            <div class="row"><a class="btn btn-secondary" href="" role="button">Valná hromada 13.1.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.1.2018_-_MH%2C_exkurze_HZS_MSK_Ostrava_Zabreh/" role="button">MH, exkurze HZS MSK Ostrava Zábřeh - 25.1.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.2.2018_MeU_Rychvald_predani_oceneni" role="button">MěÚ předání ocenění 6.2.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">MH - Hala Havířov - 17.2.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.3.2018_Hasici_pochovani_basy_2018/" role="button">Pochování Basy - 3.3.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.3.2018_-_MDZ/" role="button">MDŽ - 10.3.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.3.2018_Josefovska/" role="button">Josefovská soutěže - 17.3.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.3.2018_-_MH%2C_hala_Petrovice/" role="button">MH - Hala Petrovice - 24.3.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.4.2018_-_MH%2C_TFA_Petrvald/" role="button">MH - TFA Petřvald - 7.4.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.4.2018_-_Okrskovy_turnaj_ve_stolnim_tenise/" role="button">Okrskový turnaj ve stolním tenise - 14.4.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.4.2018_-_MH%2C_TFA_Dolni_Lutyne/" role="button">MH - TFA Dolní Lutyně - 21.4.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.4.2018_-_MH%2C_karneval/" role="button">MH - Karneval - 25.4.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28.4.2018_-_Okrsek_Orlova/" role="button">Okrsek Orlová - 28.4.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.5.2018_-_MH_Orlova_Mesto/" role="button">MH - Orlová Město - 5.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.5.2018_-_MH%2C_Plamen/" role="button">MH - PLAMEN - 19.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.5.2018_-_Okresni_kolo/" role="button">Okresní Kolo - 20.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.5.2018_-_ZS_pomoc_pri_brannem_dni/" role="button">Pomoc při branném dni na ZŠ - 25.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.5.2018_-_Orlova_Poruba/" role="button">Orlová Poruba - soutěž - 26.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.5.2018_-_Sunychl/" role="button">Bohumín Šunychl - soutěž - 26.5.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.6.2018_-_MH_Orlova_Poruba/" role="button">MH - Orlová Poruba - 2.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.6.2018_-_Orlova_Mesto%2C_soutez/" role="button">Orlová Město - soutěž - 2.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.6.2018_-_MH_Petrovice_Zavada/" role="button">MH - Petrovice Závada - 17.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.6.2018_-_MH_Bohumin_Zablati/" role="button">MH - Bohumín Záblatí - 17.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23.6.2018_-_Doubrava_soutez/" role="button">Doubrava - soutěž - 23.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23.6.2018_-_Bohumin_Zablati/" role="button">Bohumín Záblatí - soutěž - 23.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/30.6.2018_-_MH_Petrvald/" role="button">MH - Petřvald - 30.6.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.8_-_9.8.2018_-_MH%2C_Skalka/" role="button">chata Skalka - 6.8 - 9.8.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.9.2018_-_Orlova_Poruba/" role="button">Orlová Poruba - soutěž - 1.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.9.2018_-_Doubrava/" role="button">Doubrava - soutěž - 1.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.9.2018_-_MH_Rychvald/" role="button">MH - Rychvald - 8.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.9.2018_-_Bohumin_Zablatni%2C_nocni_soutez/" role="button">Bohumín Záblatí - noční soutěž - 8.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.9.2018_-_MH_Horni_Sucha/" role="button">MH - Horní Suchá - 15.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.9.2018_-_Hasici_100_let_OSP_Krzyzowice/" role="button">Hasiči 100 let OSP Krzyzowice</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.9.2018_-_Detmarovice/" role="button">Dětmarovice - soutěž - 15.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.9.2018_-_MH_Vrbice/" role="button">MH - Vrbice - 16.9.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.9.2018_-_VH_a_sazeni_pametne_lipy_ke_100.letemu_vyroci/" role="button">VH a sázení pamětní lípy ke 100.letému výročí</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.10.2018_-_TFA_Horni_Sucha/" role="button">MH - TFA Horní Suchá - 6.10.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.10.2018_-_Havirov_Mesto/" role="button">Havířov Město - soutěž - 6.10.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.10.2018_-_MH_-_bobova_draha/" role="button">MH - Bobová dráha - 10.10.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.10.2018_-_MH%2C_branny_zavod/" role="button">MH - Branný závod - 13.10.2018</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.10.2018_-_dorost_-_Orlova_Poruba/" role="button">MH - Dorost, - Orlová Poruba - 21.10.2018</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('17')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2017</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="17">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.2.2017_-_Cviceni/" role="button">JSDH - Cvičení - 18.2.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.2.2017_-_MH_-_Hala_Havirov/" role="button">MH - Hala Havířov - 25.2.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.3.2017_-_MH_-_exkurze%2C_HZSK_MSK_-_Privoz/" role="button">MH - exkurze, HZS MSK - Ostrava Přívoz - 1.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.3.2017_Pochovani_basy/" role="button">Pochování Basy - 4.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.3.2017_-_MH_-_Hala_Petrovice/" role="button">MH - Hala Petrovice - 11.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.3.2017_-_MDZ/" role="button">MDŽ - 11.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.3.2017_pratelska_josefovska_soutez/" role="button">Josefovská soutěž - 18.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.3.2017_-_MH_karneval/" role="button">MH - Karneval - 22.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/31.3.2017-_MH%2C_Plneni_odznaky_odbornosti/" role="button">MH - Plnění odznaků odborností - 31.3.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.4.2017_-_MH%2C_Hasicske_muzeum_Polsko%2C_Myslowice/" role="button">MH - Hasičské muzeum Polsko Myslowice - 22.4.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.5.2017_-_Ukazka/" role="button">Ukázka - 1.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.5.2017_-_Kres_noveho_zasahoveho_automobilu_-_Tatra_815/" role="button">Křest auta Tatra 815 - 5.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.5.2017_MLOK_Orlova-Mesto/" role="button">MH - Orlová Město - 6.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.5.2017_-_MH_-_Terlicko_Hradiste/" role="button">MH - Těrlicko Hradiště - 13.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.5.2017_-_MH_Plamen/" role="button">MH - Plamen - 20.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.5.2017_-_Bohumin_Sunychl/" role="button">Bohumín Šunychl - soutěž - 27.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28.5.2017_-_MH%2C_Globus_cup_v_Opave/" role="button">MH - Globus CUP v Opavě - 28.5.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.6.2017_-_MH_Doubrava/" role="button">MH - Doubrava - 10.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.6.2017_-_MH_Karvina_Hranice/" role="button">MH - Karviná Hranice - 11.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.6.2017_-_MH%2C_Bohumin_Zablati/" role="button">MH - Bohumín Záblatí - 17.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.6.2017_-_MH%2C_Petrovice_Zavada/" role="button">MH - Petrovice Závada - 18.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.6.2017_-_Orlova_mesto/" role="button">Orlová Město - soutěž - 24.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.6.2017_-_MH_Petrvald/" role="button">MH - Petřvald - 24.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.6.2017_-_MH_Havirov_Mesto/" role="button">MH - Havířov Město - 25.6.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.7.2017_-_soutez_Letni_slavnosti/" role="button">Letní slavnosti a soutěž - 5.7.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.7.2017_-_Bohumin_Zablati/" role="button">Bohumín Záblatí - soutěž - 22.7.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.7.2017_-_Nametove_cviceni_okrsku_Orlova/" role="button">Námětové cvičení Okrsku Orlová - 25.7.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.8.2017_-_Dolni_marklovice_-_sani_z_reky/" role="button">Dolní Marklovice, sání z řeky - soutěž - 5.8.2017 </a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.8.-10.8.2017_-_Vylet_MH_na_chatu_Skalku/" role="button">Výlet MH, chata Skalka - 7.8.-10.8.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.8.2017_-_Petrvald/" role="button">Petřvald - soutěž - 12.8.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.8.2017_-_Doubrava_-_sani/" role="button">Doubrava - sání - 19.8.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.8.2017_-_Bohumin_Zablati_-_nocni_soutez/" role="button">Bohumín Záblatí - noční soutěž - 19.8.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.9.2017_-_TFA%2C_FIREFIGHTERS_CHALENGE_-_Ludgerovice/" role="button">TFA, FIREFIGHTERS CHALENGE - Ludgeřovice - 2.9.207</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">MH - Rychvald - 10.9.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.9.2017_-_MH%2C_Vrbice/" role="button">MH - Vrbice - 11.9.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.10.2017_-_Havirov_Mesto/" role="button">Havířov město - soutěž - 7.10.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.10.2017_-_Kopytov/" role="button">Kopytov - soutěž - 8.10.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.10.2017_-_MH%2C_Kopytov/" role="button">MH - Kopytov - 8.10.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.10.2017_-_MH_-_Branny_zavod%2C_Orlova/" role="button">MH - Závod požárnické všestrannosti - 14.10.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.10.2017_-_NDT_Kopytov/" role="button">NDT - Kopytov - 15.10.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.11.2017_-_MH_vyzdoba/" role="button">MH - výzdoba - 29.11.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.12.2017_-_MH_Mikulas/" role="button">MH - Mikuláš - 6.12.2017</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.12.2017_-_MH_Vanocni/" role="button">MH - Vánoční - 20.12.2017</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('16')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2016</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="16">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.2.2016_-_Skoleni_stanov_SH_CMS/" role="button">Školení stanov SH ČMS - 20.2.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.2.2016_-_XXVII._rocnik_haly_Havirov_a_XXV._rocnik_neoficialniho_mistrovstvi_CMS_a_Slovenska/" role="button">MH hala Havířov - 27.2.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.2.2016_-_svatba_Jarek_Charbusky_a_Verca_Serwetnicka/" role="button">svatba Jaroslav Charbuský a Veronika Serwetnická - 27.2.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.3.2016_Pochovani_basy/" role="button">Pochování basy - 5.3.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.3.2016_Navsteva_materskych_skolek/" role="button">Návštěva mateřských školek - 10.3.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.3.2016_-_MH%2C_hala_Petrovice/" role="button">MH hala Petrovice - 12.3.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.3.2016_Josefovska_soutez/" role="button">Josefovská soutěž - 19.3.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.4.2016_stolni_tenis/" role="button">Okrskový turnaj ve stolním tenise - 16.4.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">MH soutěž TFA - Dolní Lutyně 23.4.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">MH soutěž - Orlová Město - 30.4.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.5.2016_-_MH_plneni_odznaku_odbornosti/" role="button">MH plnění odznaku odborností - 6.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.5.2016_dzien_strazaka_Psczyna/" role="button">Dzien strazaka Psczyna - 7.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Orlová Poruba, memoriál R.Borsiczkého - 14.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.5.2016_Smazeni_vajeciny/" role="button">Smažení vaječiny - 14.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.5.2016_Plamen_Cesky_Tesin/" role="button">PLAMEN - Český Těšín - 21.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.5.2016_okresni_kolo_v_PS_cesky_Tesin/" role="button">Okres - Český Těšín - 22.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.5.2016_-_GLOBUS_CUP_Hrabyne/" role="button">GLOBUS CUP - 29.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.5.2016_-_MH%2C_ukazka_na_Slavoji_-_detsky_den/" role="button">MH - ukázka na dětském dni, Slavoj - 29.5.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.6.2016_-_MH_-_nocni_soutez_Kravare/" role="button">MH - Kravaře, noční soutěž - 3.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.6.2016_-_MH_Orlova_Poruba/" role="button">MH - Orlová Poruba - 4.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.6.2016_-_MH_Karvina_Hranice/" role="button">MH - Karviná Hranice - 5.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.6.2016_-_MH_Doubrava/" role="button">MH - Doubrava - 11.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.6.2016_-_Doubrava%2C_soutez_dospeli/" role="button">Doubrava - soutěž dospělí - 11.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.6.2016_-_MH_Petrovice_Zavada/" role="button">MH - Petrovice Závada - 12.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.6.2016_-_Schuzka_s_rodici/" role="button">MH - závěrečná schůzka s rodiči - 29.6.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.7.-3.7.2016_-_MH%2C_ukonceni_skolniho_roku_a_privitani_prazdnin/" role="button">Ukončení školního roku a přivítání prázdnin 1.7-3.7.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.7.2016_soutez_o_pohar_starostky_mesta/" role="button">Letní slavnosti a soutěž 5.7.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23.7.2016_Bohumim_Zablati_-_Memorial_Aloise_Skuty/" role="button">Bohumín Záblatí - soutěž dospělí - 23.7.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.8.2016_-_Dolni_Marklovice%2C_soutez/" role="button">Dolní Marklovice - soutěž dospělí - 6.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.8.2016_-_Zavada%2C_nocni_soutez/" role="button">Závada - noční soutěž dospělí - 14.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.8.2016_-_Doubrava_soutez/" role="button">Doubrava - soutěž dospělí - 20.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.8.2016_-_MH_-_Terlicko_Hradiste/" role="button">MH - Těrlicko Hradiště - 27.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.8.2016_Orlova_Poruba/" role="button">Orlová Poruba - soutěž dospělí - 27.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28.8.2016_-_MH_-_Chotebuz/" role="button">MH - Chotěbuz - 28.8.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.9.2016_MH_-o_pohar_KS_MSK/" role="button">MH - o pohár KSH MSK - 3.9.2016 </a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.9.2016_-_MH%2C_Skrecon/" role="button">MH - Skřečoň - 4.9.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.9.2016_-_Skrecon_soutez/" role="button">Skřečoň - soutěž dospělí - 4.9.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.9.2016_-_MH_-_Rychvald/" role="button">MH - Rychvald - 10.9.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.9.2016_-_MH_-_Vrbice/" role="button">MH - Vrbice - 11.9.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.9.2016_-_MH_dospeli_-_Bohumin_-_Kopytov/" role="button">MH + dospělí - Kopytov - 24.9.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.10.2016_proverovaci_cviceni_Petrvald/" role="button">JSDH prověřovací cvičení - 1.10.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.10.2016_-_MH_Havirov-Mesto/" role="button">MH - Havířov Město - 1.10.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.10.2016_Havirovske_okenko/" role="button">Havířov Město - dospělí soutěž - 1.10.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.10.2016_-_NDT_Kopytov/" role="button">NDT Kopytov - 8.10.2016</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.11.2016_Halova_soutez_mladych_hasicu_Bohumin/" role="button">MH - Hala Bohumín - 12.11.2016</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('15')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2015</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="15">
            <div class="row"><a class="btn btn-secondary" href="" role="button">Repas - oprava Tatry T 138 - 2014/2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.1.2015_-_Vyrocni_valna_hromada/" role="button">Výroční Valná Hromada - 24.1.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.2.2015_-_Pochovani_basy/" role="button">Ples - 21.2.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.3.2015_-_Pochovani_basy/" role="button">Pochování Basy - 7.3.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.3.2015_-_Josefovska_soutez/" role="button">Josefovská soutěž - 14.3.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.3.2015_-_ukazka_pro_MS/" role="button">Ukázka pro MŠ - 17.3.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.3.2015_-_Operace_majak/" role="button">Jednotka, oprava majáku - 22.3.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.4.2015_-_Krzyzowice%2C_krest_auta/" role="button">Krzyzowice - křest auta - 26.4.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.5.2015_-_Ukazka_na_detskem_majovem_dopoledni_v_Rychvalde/" role="button">Ukázka na dětském májovém dopoledni 1.5.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.5.2015_-_Okrsek_Orlova/" role="button">Okrsek Orlová - 2.5.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9.5.2015_-_2._rocnik_memorialu_R._Borsiczkeho" role="button">Soutěž Orlová Poruba - memoriál R.Borsiczkého - 9.5.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10._5._2015_Okrskovy_turnaj_ve_fotbale/" role="button">Okrskový turnaj ve fotbale - 10.5.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19._-_21._6._2015_Oslavy_120._let_od_zalozeni_SDH_Rychvald/" role="button">Oslavy 120.let založení sboru SDH Rychvald</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/30.5.2015_-_MH_Orlova_Poruba" role="button">MH soutěž - Orlová Poruba - 30.5.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.6.2015_-_MH_-_Bohumin_Zablati/" role="button">MH soutěž - Bohumín Záblatí - 20.6.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.6.2015_-_Mezinarodni_soutez%2C_Jedlownik/" role="button">Mezinárodní soutěž Jedlownik - 27.6.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.6.-30.6.2015_-_Ukonceni_skolni_roku_MH/" role="button">MH - ukončení šk.roku a přivítání prázdnin - 29.6-30.6.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.7.2015_-_Letni_slavnosti_soutez/" role="button">Letní slavnosti - 5.7.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.7.2015_-_Bohumin_Zablati_-_soutez" role="button">Soutěž - Bohumín Záblatí - 18.7.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.8.2015_-_Petrvald_soutez/" role="button">Petřvald soutěž - 15.8.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.8.2015_-_Doubrava_soutez/" role="button">Doubrava soutěž - 22.8.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22.8.2015_-_Bohumin_Zablati_nocni_soutez/" role="button">Bohumín Záblatní noční soutěž - 22.8.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.8.2015_-_Orlova_Poruba_-_soutez/" role="button">Orlová Poruba soutěž - 29.8.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/30.8.2015_-_MH_vylet_Zoo_Ostrava/" role="button">MH výlet ZOO Ostrava - 30.8.2015 </a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.9.2015_-_MH_-_Soutez_o_pohar_KSH_MSK/" role="button">MH soutěž o pohár KSH MSK - 5.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.9.2015_-_Skrecon_soutez/" role="button">Skřečoň soutěž - 5.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.9.2015_-_MH_-_C.T.Mosty/" role="button">MH soutěž - Č.T.Mosty - 6.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">MH soutěž - Rychvald 12.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.9.2015_Nocni_soutez_Petrovice/" role="button">Petrovice Závada noční soutěž - 12.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.9.2015_-_MH_soutez_Vrbice" role="button">MH soutěž - Vrbice 13.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.9.2015_-_MH_soutez_Kopytov" role="button">MH soutěž - Kopytov - 26.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Kopytov soutěž - 26.9.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.10.2015_-_MH_Havirov_Mesto/" role="button">MH soutěž - Havířov Město - 3.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.10.2015_-_Detmarovice_soutez/" role="button">Dětmarovice soutěž - 3.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.10.2015_-_Cerpani_studny/" role="button">Čištění studny - 4.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.10.2015_-_skoleni%2C_strom/" role="button">Školení, strom - 4.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.10.2015_-_Soutez_Kopytov_NDT/" role="button">Soutěž Kopytov NDT - 10.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.10.2015_-_TFA_Karvina_2/" role="button">TFA Karviná - 17.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.10.2015_-_MLOK%2C_Brany_zavod_-_Rychvald/" role="button">Rychvald - Plamen, branný závod - 24.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.10.2015_-_Takticke_cviceni_-_okrsek_Orlova/" role="button">Taktické cvičení JSDH - 25.10.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.11.2015_-_MH_PL%2C_Jaworzno/" role="button">MH, PL Jaworzno - 7.11.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.11.2015_Mladi_hasici_skoleni_CCK/" role="button">MH školení ČČK - 25.11.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.12.2015_-_MH%2C_Mikulas/" role="button">MH Mikuláš - 4.12.2015</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.12.2015_-_Mikulasska" role="button">Mikulášská - 5.12.2015</a></div>            
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('14')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2014</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="14">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4_.1._2014_pomoc_pri_odchytu_papouska/" role="button">Odchyt papouška - 4.1.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.1.2014_-_Vyrocni_valna_hromada/" role="button">Výroční Valná Hromada - 18.1.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15._2._2014_Pochovani_Basy/" role="button">Ples - 15.2.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1._3._2014_Pochovani_basy/" role="button">Pochování Basy - 1.3.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8._3._2014_MDZ/" role="button">MDŽ - 8.3.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9._3._2014_Voda/" role="button">Školení jednotky + voda - 9.3.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20._3._2014_Skolka/" role="button">Návštěva školy na HZ - 20.3.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22._3._2014_Josefovska_soutez/" role="button">Josefovská soutěž - 2.3.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/22._3._2014_Josefovska_soutez/" role="button">Jednotka, číštění studny - 6.4.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20._4._2014_Kondicni_jizdy/" role="button">Protáčení mašiny + kondiční jízdy - 20.4.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26._4._2014_Varrock/" role="button">Varrock, cvičení - 26.4.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.5.2014_Pszczyna/" role="button">Pszczyna - 11.5.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.6.2014_-_Smazeni_vajeciny/" role="button">Smažení vaječiny - 7.6.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.6.2014_-_Soutez_MH_-_Karvina_Hranice/" role="button">MH - soutěž Ka Hranice - 8.6.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.6.2014_-_MH_soutez_-_Doubrava/" role="button">MH - soutěž Doubrava - 14.6.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/29.6-30.6.2014_-_MH_-_Ukonceni_skolniho_roku_a_privitani_prazdnin/" role="button">MH výlet - 29.6-30.6.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5._7._2014_Soutez_o_pohar_starosty_mesta_afterparty/" role="button">Soutěž a letní slavnosti - 5.7.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Mezinárodní soutěž - 12.7.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23._8._2014_-_Soutez_Doubrava_a_Ukazka_na_HZ/" role="button">Soutěž Doubrava + ukázka Rychvald - 23.8.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Soutěž - Orlová Poruba - 30.8.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.9.2014_-_MH_soutez_C.T.Mosty/" role="button">MH - soutěž Č.T.Mosty - 7.9.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.9.2014_-_Soutez_MH_Rychvald/" role="button">MH - soutěž Rychvald 13.9.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.9.2014_-_Detmarovice_soutez/" role="button">Soutěž Dětmarovice - 13.9.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.9.2014_-_Vyjezdni_zasedani_Studenicne/" role="button">Výjezdní zasedání - 20.9.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.10.2014_-_MH_soutez_PL_Jaworzno/" role="button">MH - soutěž PL Jaworzno</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.10.2014_-_Soutez_Orlova_Mesto_NDT/" role="button">Soutěž Orlová Město NDT - 11.10.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.10.2014_-_TFA_Kavina/" role="button">TFA Karviná - 18.10.214</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Výcvikový rok + mikulášská 6.12.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.12.2014_-_MH_Mikulas/" role="button">MH - Mikuláš 17.12.2014</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.12.2014_-_JSDH_cviceni/" role="button">Jednotka - prověřovací cvičení - 20.12.2014</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('13')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2013</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="13">
            <div class="row"><a class="btn btn-secondary" href="" role="button">Výroční Valná Hromada - 19.1.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Pochování Basy - 22.2.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16._3._2013_-_Josefovska_soutez/" role="button">Josefovská soutěž - 16.3.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21._4._2013_-_Brigada_-_uklid_sklepa/" role="button">Brigáda - 21.4.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1._5._2013_-_kolobezky/" role="button">Koloběžky - 1.5.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.5.2013_-_Libros/" role="button">Libros - 4.5.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.5..2013_-_MH_Havirov/" role="button">Soutěž - děti Havířov Město - 18.5.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.5.2013_-_Smazeni_vajeciny/" role="button">Smažení vaječiny - 18.5.213</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.5.2013_-_Cesky_Tesin_-_plamen_MH/" role="button">Soutěž - Český Těšín - Plamen - 25.5.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.6.2013_-_MH_Doubrava/" role="button">Soutěž - děti - Doubrava 8.6.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.6.2013_-_Soutez_Doubrava/" role="button">Soutěž - Doubrava 8.6.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/9.6.2013_-_MH_hranice/" role="button">Soutěž - děti - Karviná hranice 9.6.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.6.2013_-_Ukazka_Slavoj/" role="button">Ukázka Slavoj - 16.6.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/30._6._2013_cerpani_laguny_ul._Mezi_lany/" role="button">Čerpaní laguny - 30.6.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.7.2013_-_vylet_MH_Stramberk%2C_Koprivnice/" role="button">MH - výlet - Štramberk, Kopřivnice - 2.7.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.7.2013_-_Hasicska_soutez_Afterparty/" role="button">Soutěž a letní slavnosti - 5.7.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/31.8.2013_-_O_pohar_KSH_CMS%2C_Slavko_u_Opavy/" role="button">MH - O pohár KSH ČMS, Slavkov u Opavy - 31.8.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.9.2013_-_Ukazka_pro_deti_za_ZS/" role="button">Ukázka pro děti na ZŠ Rychvald - 27.9.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/28._9._2013_-_Soutez_MH_Rychvald/" role="button">Soutěž - děti - Rychvald - 28.9.2013</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/7.12.2013_-_Mikulasska_a_ukonceni_roku_VJ/" role="button">Ukončení roku a Mikulášská - 7.12.2013</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('12')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2012</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="12">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.1.2012_-_VVH/" role="button">Výroční Valná Hromada 21.1.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.3.3012_-_Pochovani_basy/" role="button">Pochování Basy 3.3.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.3.2012_-_karneval/" role="button">Karneval 16.3.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/17.3.2011_-_josefovska_soutez/" role="button">Josefovská soutěž 19.3.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.5.2012_-_Soutez_-_Orlova_Mesto_-_deti/" role="button">Soutěž - děti Orlová Město 5.5.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.5.2012_-_cviceni_s_HZS_Bohumin/" role="button">Cvičení s HSZ Bohumín 10.5.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/12.5.2012_-_Soutez_-_Okrsek/" role="button">Soutěž Okrsek 12.5.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.5.2012_-_soutez_-_Havirov_Mesto_-_deti/" role="button">Soutěž - děti Havířov Město 19.5.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/27.5.2012_-_Soutez_-_Orlova_Poruba_-_deti/" role="button">Soutěž - děti Orlová Poruba 27.5.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.6.2012_-_ukazka_kolobezky/" role="button">Ukázka - koloběžky 1.6.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.9.2012_-_skolka_-_pomoc_pri_akci_-_cestou%2C_necestou/" role="button">Školka, pomoc při akci ,,Cestou, necestou,, 26.9.2012</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/1.10.2012_-_Zakladni_skola_MDU/" role="button">Základní škola - MDU 1.10.2012</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('11')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2011</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="11">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.3.2011_-_soutez_Rychvald_-_Josefovska/" role="button">Josefovská soutěž 19.3.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/30.4.2011_soutez_starych_panu_-_Doubrava/" role="button">Soutěž starých pánů - Doubrava 30.4.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/14.5.2011_-_fotbal/" role="button">Okrsek ve fotbale 14.5.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/21.5.2011_-_okrsek/" role="button">Okrsková soutěž 21.5.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.6.2011_-_smazeni_vajeciny/" role="button">Smažení vaječiny 4.6.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/11.6.2011_-_skoleni_na_tekouci_vode/" role="button">Školení na tekoucí vodě 11.6.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.6.2011_-_soutez_doubrava/" role="button">Soutěž - Doubrava 18.6.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/20.6.2011_soutez_radvanice/" role="button">Soutěž - Radvanice 20.6.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.6.2011_-_ukazka%2C_detsky_den_Slavoj/" role="button">Ukázka - Dětský den TJ Slavoj 26.6.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.7.2011_-_Priprava_souteze_slavnosti/" role="button">Slavnosti + Hranice mistra Jana Huse 5.7.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/16.7.2011_-_Mezinarodni_soutez_v_Kryzowicich/" role="button">Mezinárodní soutěž v Kryzowicích 16.7.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Soutěž - Petřvald</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2011_-_soutez_doubrava/" role="button">Soutěž - Doubrava</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2011_-_soutez_Orlova_poruba/" role="button">Soutěž - Orlová Poruba</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/13.9.2011_-_Krajske_kolo_-_soutez/" role="button">Krajské kolo - mládeže 13.9.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/10.9.2011_-_Soutez_-_Kopytov/" role="button">Soutěž - Kopytov 10.9.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/8.10.2011_-_memoril_M.Kosnovskeho_-_ve_stolnim_tenise/" role="button">Memoriál Milana Kosňovského ve stolním tenise 8.10.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/5.11.2011_-_Soutez_orlova_Poruba_-_NDT/" role="button">Soutěž - Orlová Poruba NDT 5.11.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/3.12.2011_-_Mikulas_Deti/" role="button">Mikuláš pro děti 3.12.2011</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/4.12.2011_-_Mikulasska/" role="button">Mikulášská 4.12.2011</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('10')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2010</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="10">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/19.2.2010_-_uklid_snehu_rampouchy%2C_opraveni_majaku%2C_foceni_aut/" role="button">Úklid sněhu + úklid 19.2.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/26.3.2010_soutez_Josefovska/" role="button">Josefovská soutěž 26.3.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.4.2010_-_Brigada_--_garaze/" role="button">Brigáda + nástřik Tatry 25.4.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="" role="button">Námětové cvičení 3.5.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/15.5.2010_-_brigada_--_vajecina/" role="button">Smažení vaječiny 15.5.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2010_kveten_povodne_1.cast_fotek/" role="button">Povodně 2010 část 1.</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2010_kveten_povodne_2.cast_fotek/" role="button">Povodně 2010 část 2.</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2010_kveten_povodne_3.cast_fotek/" role="button">Povodně 2010 část 3.</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/6.7.2010_soutez_Paleni_mistra_Jana_Husa/" role="button">Slavnosti 6.7.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/18.9.2010_-_zachrana_osob_na_tonouci_vode/" role="button">Záchrana osob na stojaté vodě 18.9.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/25.9.2010_mezinarodni_soutez/" role="button">Mezinárodní soutěž - Doubrava 25.9.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/24.10.2010_-_brigada%2C_mensi_pohosteni/" role="button">Brigáda - zazimování hasičárny 24.10.2010</a></div>
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/2.12.2010_-_Mikulasska/" role="button">Mikulášská 2.12.2010</a></div>
        </ul>
    </div>
    <div class="dropdown row w-100 mb-2">
        <button onclick="myFunction('09')" class="btn btn-primary btn-lg btn-block w-100" type="button"  data-toggle="dropdown">2009</button>
        <ul class="dropdown-menu1 bg-secondary" role="menu" aria-labelledby="menu2" id="09">
            <div class="row"><a class="btn btn-secondary" href="https://zuzumalicka.rajce.idnes.cz/23.5.2009_vyjezd_-_Vetrna_smrst/" role="button">Jednotka - větrná smršť 23.5.2009</a></div>
        </ul>
    </div>
</div>

<?php
require("footer.phtml");
?>