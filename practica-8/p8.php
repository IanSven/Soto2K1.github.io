<html lang="es-MX">

    <head>
        <meta name="author" content="Ian Svén">
        <meta name="description" content="Práctica 8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="extra/.png">
        <link rel="stylesheet" type="text/css" href="extra/style-p8.css">
        <link rel="stylesheet" type="text/css" href="extra/layout.css">
        <link rel="stylesheet" type="text/css" href="extra/w3.css">

        <title> Práctica No. 8 </title>

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
                    <li> <a href="p8.html" class=w3-button> Práctica 8 </a> </li>
                </ul>
            </nav>

            <header> <h1 style="color:#FFFFFF;text-shadow:none;"> <b> Práctica 8 </b> </h1> </header>

            <article class="article">
            <center>
            <h1> <b> Cálculo del área de un rectángulo </b> </h1>
            <?php
                $base=$_GET{'base'};
                $altura=$_GET{'altura'};
                $formattedBase=number_format($base, 2);
                $formattedAltura=number_format($altura, 2);
                $area=$formattedBase*$formattedAltura;
                $formattedArea=number_format($area, 2);
                $formattedArea=$formattedBase*$formattedAltura;
            ?> 
            <p style="font-size:24px;"><?php echo "<b>Altura (h):</b> $formattedBase u."; ?> </p>
            <p style="font-size:24px;"><?php echo "<b>Base (B):</b> $formattedAltura u."; ?> </p>
            <p style="font-size:24px;"><?php echo "<b>Área (A):</b> $formattedArea u<sup>2</sup>."; ?> </p>
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