<?php
require_once("../models/dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM prof WHERE NOM like '".$_POST["keyword"]."%' ORDER BY NOM LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $respo) {
?>
<li onClick="selectCountry('<?php echo $respo["NOM"]." ".$respo["PRENOM"]; ?>');"><?php echo $respo["PRENOM"]." ".$respo["NOM"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>