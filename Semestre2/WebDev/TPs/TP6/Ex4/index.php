<table border="1">
    <tr>
<?php
$max = 10;
for ($i = 1; $i < $max; $i++) {
    $result = $i + ($max - $i);
    echo "<td>$i + " . ($max - $i) . " = $max<br></td>";
}
?>
    </tr>
</table>
