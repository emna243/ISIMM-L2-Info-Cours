<?php

include 'connect.php';

$sql = "INSERT INTO Etudiant VALUES ('{$_POST['matricule']}', '{$_POST['nom']}', '{$_POST['prenom']}', '{$_POST['adresse']}', '{$_POST['date_naissance']}', '{$_POST['email']}', '{$_POST['filiere']}')";

$con->query($sql);

echo "Bonjour cher etudiant {$_POST['prenom']} {$_POST['nom']}, ayant la matricule {$_POST['matricule']}, vous êtes inscrit.";
echo " <a href='FormulaireEtudiant.php'>Retour à la liste</a>";
