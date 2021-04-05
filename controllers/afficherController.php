<table class="table table-striped ">
<?php 
include("../models/connection.php");
$conn = new ConnectionClass();
$table = $conn->SelectAllFromTable($_POST['table']);
if($_POST['table'] == "prof"){
    echo"<tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
        </tr>";
    foreach ($table as $prof) {
        echo "<tr>
            <td>{$prof['NOM']}</td>
            <td>{$prof['PRENOM']}</td>
            <td>{$prof['EMAIL']}</td>
            <td>{$prof['TEL']}</td>
        </tr>";
    }
    echo"<a href='ajouterProfController.php'><Button class='btn-style btn text-white m-3'>Ajouter professeur</Button></a>";
}elseif($_POST['table'] == "filiere"){
    echo"<tr>
            <th>Nom de filière</th>
            <th>Chef de filiére</th>
            <th>Niveau</th>
        </tr>";
    foreach ($table as $file) {
        echo "<tr>
                <td>{$file['NOM_FILIERE']}</td>
                <td>{$file['CHEF']}</td>
                <td>{$file['NIVEAU']}</td>
            </tr>";
    }
    echo"<a href='ajouterFiliereController.php' ><Button class='btn-style btn text-white m-3'>Ajouter une filière</Button></a>";   
}elseif($_POST['table'] == "module"){ 
    echo"<tr>
            <th>Nom du modle </th>
            <th>Responsable du module</th>
            <th>Description</th>
            <th>Gestion</th>
        </tr>";
    foreach ($table as $module) {
        echo "<tr>
                <td>{$module['NOM_MODULE']}</td>
                <td>{$module['RESPO_MODULE']}</td>
                <td>{$module['DESCRIPTION']}</td>
                <td><a href='moduleController.php?idModule={$module['ID_MODULE']}'>Accéder</a></td>
            </tr>";
    }
    echo"<a href='ajouterModuleController.php'><Button class='btn-style btn text-white m-3'>Ajouter un module</Button></a>";   
}
    ?>
</table>     