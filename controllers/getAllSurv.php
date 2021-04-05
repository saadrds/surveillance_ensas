<?php
    require_once("../models/connection.php");
    $con = new ConnectionClass();
    $tab = $con->SelectLikeProfFromTable('prof',$_POST['surv']);
    ?>
    <table>
    <?php
    foreach ($tab as $line) {
        
       echo "<tr> <td class='td'> {$line['nom']} {$line['prenom']}</td></tr>";
    }

    
?>
</table>