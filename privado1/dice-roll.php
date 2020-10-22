<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img {
    width: 120px;
}
</style>
<body>
    <h1>Lanzar 6 dados</h1>
    <?php
        $array = array(
            rand(1, 6), rand(1, 6), rand(1, 6),
            rand(1, 6), rand(1, 6), rand(1, 6)
        );
        echo "<p>";
        for ($i = 0; $i < 5; $i++) {
            echo "<img src='../img/dice-{$array[$i]}.png' />";
        }
        echo "</p>";
    ?>
    <button onclick="location.reload()">Lanzar de nuevo</button>
</body>
</html>