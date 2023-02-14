<?php
require("./nav.phtml");
require("./db_connect.php");

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

$clenove = zobrazCleny($db);
$MH = zobrazMH($db);
?>

<style>
    tr .clen {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<div class="container mb-5 mt-2">
    <div class="d-flex justify-content-center">
        <table class="text-center">
            <div>
                <thead>
                    <tr>
                        <th>Jméno</th>
                        <th>Nejvyšší Vyznamenání</th>
                        <th>Medaile/Stužka</th>
                    </tr>
                </thead>
            </div>
            <tbody>
                <?php  foreach ($clenove as $clen) { ?>
                    <tr>
                        <td class="col clen"><?= $clen["jmeno"] ?></td>
                        <td class="col clen"><?= $clen["vyznamenani"] ?></td>  
                        <td class="col clen"><?= $clen["stuzka"] ?></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </div>
    </table>
</div>
<div class=" text-center container mt-5">
    <h2>Mladí hasiči</h2>
</div>
<div class="container mb-5">
    <div class="d-flex justify-content-center">
        <table class="text-center">
            <tbody>
                <?php  foreach ($MH as $mladyHasic) { ?>
                    <tr>
                        <td class="col"><?= $mladyHasic["jmeno"] ?></td>
                        <td class="col"><?= $mladyHasic["vyznamenani"] ?></td>  
                        <td class="col"><?= $mladyHasic["stuzka"] ?></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require("footer.phtml");
?>