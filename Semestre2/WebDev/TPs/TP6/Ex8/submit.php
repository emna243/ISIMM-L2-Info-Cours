<?php
$nom    = $_POST['nom'];
$prenom = $_POST['prenom'];
$addr   = $_POST['adresse'];
$ville  = $_POST['ville'];
$cp     = $_POST['code_postal'];

echo "Donnees recues :<br>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Code Postal</th>
    </tr>
    <tr>
        <td><?= $nom ?></td>
        <td><?= $prenom ?></td>
        <td><?= $addr ?></td>
        <td><?= $ville ?></td>
        <td><?= $cp ?></td>
    </tr>
</table>
