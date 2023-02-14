<?php
require("db_connect.php");
require("nav.phtml");

function zobrazPrevenci($db) {
    $dotazPrevence = "
        select *
        from prevence
        order by datum desc
    ";

    $vysledekPrevence = mysqli_query($db, $dotazPrevence);
    $prevence = mysqli_fetch_all($vysledekPrevence, MYSQLI_ASSOC); 
    return $prevence;
}
$prevence = zobrazPrevenci($db);
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
    <?php foreach($prevence as $prev) { ?>
        <div class="row mb-2">
            <button onclick="myFunction('<?=$prev['nazev']?>')" class="btn btn-lg btn-block btn-primary" data-toggle="dropdown"><?=$prev['nazev']?></button>
            <ul class="dropdown-menu1" id="<?=$prev['nazev']?>">
                <p class="mt-2"><?=$prev['datum']?></p>
                <p class="text-justify"><?=$prev['obsah']?></p>
            </ul>
        </div>
    <?php } ?>
</div>