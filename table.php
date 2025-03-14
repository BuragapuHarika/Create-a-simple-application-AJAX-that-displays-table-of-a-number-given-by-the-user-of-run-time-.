<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$num × $i</td><td>" . ($num * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>
