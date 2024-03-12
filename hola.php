<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Hola Mundo</title>
    <style>
        .titulo {
            text-align: center;
            margin-top: 50px;
            font-size: 2em;
            font-family: 'Courier New', Courier, monospace;
            font-weight: lighter;
        }

        .titulo > b {
            color: blue;
            font-weight: bolder !important;
        }

        img {
            border-radius: 10px;
        }

        img:hover {
            box-shadow: 0 0 10px 5px #000;
            scale: 1.05;
            transition: all 0.5s ease-in-out;
        }

        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <p class="titulo">
        <?php
            echo "Hola mundo, soy <b>Manuel José Santos Méndez</b>"
        ?>
    </p>
    <?php
        echo "<img src='pancho.jpg' alt='Pancho el Gato Programador' width='600' height='450'>"
    ?>
</body>

</html>