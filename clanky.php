<?php
require("db_connect.php");
require("nav.phtml");
function zobrazClanky($db) {
    $dotazClanky = "
    select *
    from clanky
    order by datum desc
    ";

    $vysledekClanky = mysqli_query($db, $dotazClanky);
    $clanky = mysqli_fetch_all($vysledekClanky, MYSQLI_ASSOC); 
    return $clanky;
}
$clanky=zobrazClanky($db);
require("footer.phtml");
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
</script>
<div class="container mb-5 mt-2">
    <?php foreach($clanky as $clanek) { ?>
        <div class="row mb-2">
            <button onclick="myFunction('<?=$clanek['nazev']?>')" class="btn btn-lg btn-block btn-primary" data-toggle="dropdown"><?=$clanek['nazev']?></button>
            <ul class="dropdown-menu1" id="<?=$clanek['nazev']?>">
                <p class="mt-2"><?=$clanek['datum']?></p>
                <p class="text-center"><?=$clanek['obsah']?></p>
            </ul>
        </div>
    <?php } ?>
</div>