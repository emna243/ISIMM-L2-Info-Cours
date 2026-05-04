<?php
$liste = [
    "etudiant1" => ["ahmed",   "Tunis",     20],
    "etudiant2" => ["mohamed", "Sfax",      21],
    "etudiant3" => ["omar",    "Sousse",    22],
];

echo "print_r() : <br>";
echo "<pre>";
print_r($liste);
echo "</pre>";

foreach ($liste as $cle => $info) {
    echo "Cle : $cle | Prenom : $info[0] | Ville : $info[1] | Age : $info[2] ans<br>";
}
?>
