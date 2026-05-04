<?php

include 'connect.php';

$con->query("DELETE FROM Etudiant WHERE matricule = '{$_POST['matricule']}'");

echo "L'etudiant {$_POST['prenom']} {$_POST['nom']}, ayant la matricule {$_POST['matricule']}, a ete supprime avec succes.";
echo " <a href='FormulaireEtudiant.php'>Retour a la liste</a>";
