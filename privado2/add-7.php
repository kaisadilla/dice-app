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
img.small {
    width: 40px;
}
</style>
<body>
    <h1>Tiradas hasta sumar 7.</h1>
    <?php
        $dice1 = -1;
        $dice2 = -1;
        $sum = -1;
        $tries = 0;
        $other_rolls = [];

        while ($sum != 7) {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $sum = $dice1 + $dice2;
            if ($sum != 7) {
                array_push($other_rolls, array($dice1, $dice2));
            }
            $tries++;
        }
        echo "<img src='../img/dice-{$dice1}.png' />";
        echo "<img src='../img/dice-{$dice2}.png' />";
        echo "<p>El número de tiradas realizadas hasta sumar 7 ha sido: $tries.</p>";
        echo "<button onclick='location.reload()'>Lanzar de nuevo</button>";
        echo "<p>Las tiradas fallidas han sido:</p>";
        foreach ($other_rolls as $val) {
            echo "<p><img src='../img/dice-{$val[0]}.png' class='small'/>";
            echo "<img src='../img/dice-{$val[1]}.png' class='small'/></p>";
        }
    ?>
</body>
</html>