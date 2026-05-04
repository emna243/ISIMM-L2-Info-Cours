<?php

include 'connect.php';

$stmt = $con->query("SELECT * FROM Etudiant");

echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Filière</th><th>Naissance</th><th>Email</th></tr>";

while ($row = $stmt->fetch_assoc()) {
    echo "<tr>
        <td>{$row['matricule']}</td>
        <td>{$row['nom']}</td>
        <td>{$row['prenom']}</td>
        <td>{$row['adresse']}</td>
        <td>{$row['filiere']}</td>
        <td>{$row['date_naissance']}</td>
        <td>{$row['email']}</td>
    </tr>";
}

echo "</table>";
echo " <a href='FormulaireEtudiant.php'>Retour a la liste</a>";
