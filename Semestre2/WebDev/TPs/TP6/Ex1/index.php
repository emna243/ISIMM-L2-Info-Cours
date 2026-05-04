<?php
$x = 10;
$y = 2;

if ($y != 0) {
    echo "$x / $y = " . ($x / $y);
} else {
    echo "$x / $y = error: division by 0";
}
echo '<br>';

$y = 0;

if ($y != 0) {
    echo "$x / $y = " . ($x / $y);
} else {
    echo "$x / $y = error: division by 0";
}
echo '<br>';
