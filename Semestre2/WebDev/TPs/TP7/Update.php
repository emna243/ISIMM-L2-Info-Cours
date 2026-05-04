<?php

include 'connect.php';

$sql = "UPDATE Etudiant SET 
    nom            = '{$_POST['nom']}',
    prenom         = '{$_POST['prenom']}',
    adresse        = '{$_POST['adresse']}',
    date_naissance = '{$_POST['date_naissance']}',
    email          = '{$_POST['email']}',
    filiere        = '{$_POST['filiere']}'
    WHERE matricule = '{$_POST['matricule']}'";

$con->query($sql);

echo "Bonjour cher etudiant {$_POST['prenom']} {$_POST['nom']}, ayant la matricule {$_POST['matricule']}, tes informations ont ete modifiees.";
echo " <a href='FormulaireEtudiant.php'>Retour à la liste</a>";
