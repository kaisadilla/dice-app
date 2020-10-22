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
    <h1>¿Par o impar?</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="radio" name="val" value="even" required> <label for="even">Par</label> <br />
        <input type="radio" name="val" value="odd"> <label for="even">Impar</label> <br />
        <input type="submit" name="submit" value="Lanzar dados">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $dice3 = rand(1, 6);
            $sum = $dice1 + $dice2 + $dice3;
            $result_is_odd = $sum & 1;
            $answer_is_odd = $_POST["val"] === "odd";
            if ($result_is_odd == $answer_is_odd) {
                echo "<p>¡La opción elegida es correcta! La suma es: $sum</p>";
            }
            else {
                echo "<p>La opción elegida no es correcta :(. Elegiste ",$answer_is_odd ? "impar" : "par"," pero la suma es: $sum (",$result_is_odd ? "impar" : "par",")</p>";
            }
            echo "<p><img src='../img/dice-{$dice1}.png' class='small'/>";
            echo "<img src='../img/dice-{$dice2}.png' class='small'/>";
            echo "<img src='../img/dice-{$dice3}.png' class='small'/></p>";
        }
    ?>
</body>
</html>