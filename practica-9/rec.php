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

    <body>

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
            <h2> Área del rectángulo </h2>
            <?php
                $base=$_GET{'base'};
                $altura=$_GET{'altura'};
                echo "Valor de la base = $base metros. <br>";
                echo "Valor de la altura = $altura metros. <br>";
                echo "Formula: A = b(h) <br>";
                $area=($altura*$base);
                echo "Área = ($altura m)($base m) = $area m<sup>2</sup>.";
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