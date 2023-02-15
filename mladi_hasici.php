<?php
require("db_connect.php");
function vedouci($db) {
    $dotazVedouci = "
    select *
    from clenove
    where vedouci=1
    ";

    $vysledekVedouci = mysqli_query($db, $dotazVedouci);
    $Vedouci = mysqli_fetch_all($vysledekVedouci, MYSQLI_ASSOC); 
    return $Vedouci;
}
$vedouci = vedouci($db);
require("nav.phtml");
require("footer.phtml");
?>

<div class="container mt-2 mb-5">
    <div class="row text-center mt-5">
        <h2>Mladí hasiči</h2>
    </div>
    <div class="row text-center">
        <p>Mladší žáci a přípravka se scházejí každou středu v HZ Rychvald od 15:30 - 18:00.</p>
    </div>
    <div class="row text-center">
        <p>Starší žáci a dorost se scházejí každý pátek v HZ Rychvald od 15:30 - 18:00.</p>
    </div>
    <div class="row text-center">
        <p>přes zimu každý pátek od 17:00 - 19:00 v tělocvičně.</p>
    </div>
    <div class="row text-center mt-5">
        <table>
            <thead>
                <tr>
                    <td><b>Vedoucí:</b></td>
                </tr>
            </thead>
            <tbody>
<?php  foreach ($vedouci as $trener) { ?>
                <tr class="row">
                    <td class="col"><?= $trener["jmeno"] ?></td>
                </tr>
<?php  } ?>
            </tbody>
        </table>
    </div>
</div>