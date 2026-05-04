<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Gestion Etudiant</title></head>
<body>

<h2>Formulaire de Gestion d'un étudiant</h2>
<form method="post">
    <table border="1" cellpadding="6">
        <tr><td>Matricule</td><td><input type="text" name="matricule"></td></tr>
        <tr><td>Nom</td><td><input type="text" name="nom"></td></tr>
        <tr><td>Prenom</td><td><input type="text" name="prenom"></td></tr>
        <tr><td>Adresse</td><td><input type="text" name="adresse"></td></tr>
        <tr>
            <td>Filiere</td>
            <td>
                <select name="filiere">
<?php
$res = $con->query("SELECT NomF FROM Filiere");
while ($row = $res->fetch_assoc()) {
    echo "<option>{$row['NomF']}</option>";
}
?>
                </select>
            </td>
        </tr>
        <tr><td>Date de Naissance</td><td><input type="date" name="date_naissance"></td></tr>
        <tr><td>Email</td><td><input type="text" name="email"></td></tr>
    </table>
    <br>
    <input type="submit" name="action" value="Add">
    <input type="submit" name="action" value="Update">
    <input type="submit" name="action" value="Delete">
    <input type="submit" name="action" value="Select">
</form>

<?php
if (isset($_POST['action'])) {
    match($_POST['action']) {
        'Add'    => include 'Add.php',
        'Update' => include 'Update.php',
        'Delete' => include 'Delete.php',
        'Select' => include 'Select.php',
    };
}
?>

</body>
</html>
