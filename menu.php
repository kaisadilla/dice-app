<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<style>
    * {
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .nav {
        overflow: hidden;
        background-color: #FFB00D;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    .nav a {
        float: left;
        display: block;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        font-weight: 600;
        color: #031225;
    }

    .nav a:hover {
        background: #FFCE69;
    }

    .nav a.active {
        background-color: #A16C00;
        color: white;
    }

    iframe {
        width: 98.5%;
        height: 860px;
        border: 12px solid #0C223E;
    }
</style>
<body>
    <div class="nav">
        <a href="javascript:void()" onclick="loadFrame(0)">Tirar dados</a>
        <a href="javascript:void()" onclick="loadFrame(1)">Sumar 7</a>
        <a href="javascript:void()" onclick="loadFrame(2)">¿Par o impar?</a>
    </div>
    <iframe
        id="frame"
        src="privado1/dice-roll.php"
        width=800
        height=600
    ></iframe>
</body>
<script>
    function loadFrame(index) {
        let frame = document.getElementById("frame");
        switch(index) {
            case 0: frame.src = "privado1/dice-roll.php"; break;
            case 1: frame.src = "privado2/add-7.php"; break;
            case 2: frame.src = "privado3/even-odd.php"; break;
        }
    }
</script>
</html>
