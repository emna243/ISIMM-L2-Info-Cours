<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo 'Avec print_r() :<br>';
print_r($arr);

echo '<br><br>Avec for :<br>';
$taille = count($arr);
for ($i = 0; $i < $taille; $i++) {
    echo "arr[$i] = " . $arr[$i] . "<br>";
}

echo '<br><br>Avec foreach :<br>';
foreach ($arr as $k => $v) {
    echo "$k => $v<br>";
}
?>
