<html lang="es-MX">

    <head>
        <meta name="author" content="Ian Svén">
        <meta name="description" content="Práctica 9">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="extra/.png">
        <link rel="stylesheet" type="text/css" href="extra/style-p9.css">
        <link rel="stylesheet" type="text/css" href="extra/w3.css">
        <link rel="stylesheet" type="text/css" href="extra/layout.css">

        <title> Práctica No. 9 </title>

    </head>

    <body background = "extra/math.png">

        <div class="flex-container">

            <nav class="nav w3-light-gray">
                <ul>
                    <p> <strong> Navegación </strong> </p>
                    <li> <a href="../practica-1/p1.html" class=w3-button> Práctica 1 </a> </li>
                    <li> <a href="../practica-2/p2.html" class=w3-button> Práctica 2 </a> </li>
                    <li> <a href="../practica-3/p3.html" class=w3-button> Práctica 3 </a> </li>
                    <li> <a href="../practica-4/p4.html" class=w3-button> Práctica 4 </a> </li>
                    <li> <a href="../practica-5/p5.html" class=w3-button> Práctica 5 </a> </li>
                    <li> <a href="../practica-6/p6.html" class=w3-button> Práctica 6 </a> </li>
                    <li> <a href="../practica-7/p7.html" class=w3-button> Práctica 7 </a> </li>
                    <li> <a href="../practica-8/p8.html" class=w3-button> Práctica 8 </a> </li>
                    <li> <a href="p9.html" class=w3-button> Práctica 9 </a> </li>
                </ul>
            </nav>

            <header> <h1 style="color:#FFFFFF;text-shadow:none;"> <b> Práctica 9 </b> </h1> </header>

            <article class="article">
            <center>
            <h1> <b> Área geométrica de polígonos </b> </h1>
            <?php
                $figura=$_GET{'fig'};
                if ($figura=="sqr") {
                    echo "Área del cuadrado";
                    echo '<form action="figura.php" method="get">';
                    echo '<input type="number" name="lado" min="0" step="any" required> <p> Valor del lado </p> <br>';
                    echo "<input type='submit' value='Aceptar'> </form>";
                }
                else if ($figura=="tri") {
                    echo "Área del triángulo";
                    echo '<form action="figura.php" method="get">';
                    echo '<input type="number" name="base" min="0" step="any" required> <p> Valor de la base </p> <br>';
                    echo '<input type="number" name="altura" min="0" step="any" required> Valor de la altura <br>';
                    echo "<input type='submit' value='Aceptar'> </form>";
                }
                else if ($figura=="rec") {
                    echo "Área del rectángulo";
                    echo '<form action="figura.php" method="get">';
                    echo '<input type="number" name="base" min="0" step="any" required> Valor de la base <br>';
                    echo '<input type="number" name="altura" min="0" step="any" required> Valor de la altura <br>';
                    echo "<input type='submit' value='Aceptar'> </form>";
                }
                else if ($figura=="cir") {
                    echo "Área del círculo";
                    echo '<form action="figura.php" method="get">';
                    echo '<input type="number" name="radio" min="0" step="any" required> Valor del radio <br>';
                    echo "<input type='submit' value='Aceptar'> </form>";
                }
            ?> 
            </center>
            </article>
        </div>

        <div class="footer">
            <div class="w3-bar w3-bottom w3-light-gray w3-wide w3-padding-8 w3-card-2">
                <a href="../index.html" class="w3-margin-left w3-bar-item w3-button"> <b> Ian Svén </b> </a>
            </div>
        </div>

    </body>

</html>