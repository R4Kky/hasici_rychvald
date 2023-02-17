<?php
require("db_connect.php");
require("nav.phtml");

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
$novinky=zobrazNovinky($db);
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
.show {
  display:block;
}
.text-justify {
  text-align: justify;
}
</style>
<script>
function myFunction(id) {
    document.getElementById(id).classList.toggle("show");
}
</script>
<div class="container mb-5 mt-2">
    <?php foreach($novinky as $novinka) { ?>
        <div class="row mb-2 text-justify">
            <button onclick="myFunction('<?=$novinka['nazev']?>')" class="btn btn-lg btn-block btn-primary" data-toggle="dropdown"><?=$novinka['nazev']?></button>
            <ul class="dropdown-menu1" id="<?=$novinka['nazev']?>">
                <p class="mt-2"><?=$novinka['datum']?></p>
                <p class="text-justify"><?=$novinka['obsah']?></p>
            </ul>
        </div>
    <?php } ?>
</div>

<?php
require("footer.phtml");
?>