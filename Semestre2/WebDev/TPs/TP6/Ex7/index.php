<?php
$liste = [
    "etudiant1" => ["prenom" => "ahmed",   "ville" => "Tunis",     "age" => 20],
    "etudiant2" => ["prenom" => "mohamed", "ville" => "Sfax",      "age" => 21],
    "etudiant3" => ["prenom" => "omar",    "ville" => "Sousse",    "age" => 22],
];

echo "Affichage avec print_r : <br><pre>";
print_r($liste);
echo "</pre>";

foreach ($liste as $cle => $info) {
    $p = $info['prenom'];
    $v = $info['ville'];
    $a = $info['age'];
    echo "Cle : $cle | Prenom : $p | Ville : $v | Age : $a ans<br>";
}
?>
