<html lang="es-MX">

    <head>
        <meta name="author" content="Ian Svén">
        <meta name="description" content="Práctica 7">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="extra/.png">
        <link rel="stylesheet" type="text/css" href="extra/style-p7.css">
        <link rel="stylesheet" type="text/css" href="extra/layout.css">
        <link rel="stylesheet" type="text/css" href="extra/w3.css">

        <title> Práctica No. 7 </title>

    </head>

    <body background = "extra/mainbg.png">

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
                    <li> <a href="p7.html" class=w3-button> Práctica 7 </a> </li>
                    <li> <a href="../practica-8/p8.html" class=w3-button> Práctica 8 </a> </li>
                </ul>
            </nav>

            <header> <h1 style="color:#FFFFFF;text-shadow:none;"> <b> Práctica 7 </b> </h1> </header>

                <article class="article">
                
                <h1> <b> Casa de cambio </b> </h1>
                <center> <h2> <b> Cambio de pesos a dólares </b> </h2> 
                <?php
                    $peso=$_GET{'peso'};
                    $tasa=$_GET{'tasa'};
                    $formattedPeso=number_format($peso, 2);
                    $formattedTasa=number_format($tasa, 2);
                    $dolar=$formattedPeso/$formattedTasa;
                    $formattedDollar=number_format($dolar, 2);
                ?>
                <p style="font-size:24px;"><?php echo "<b>Cantidad en pesos mexicanos a convertir:</b> $$formattedPeso MXN.<br>";?> </p>
                <p style="font-size:24px;"><?php echo "<b>Tasa de cambio actual:</b> $1 USD = $$formattedTasa MXN.<br>";?> </p>
                <p style="font-size:24px;"><?php echo "<b>Cantidad en dólares:</b> $$formattedDollar USD.";?> </p>
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