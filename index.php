<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektai</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <div class="topnav" id="myTopnav">
            <a href="/sp3/index.php">Projektai</a>
            <a href="/sp3/page.php">Darbuotojai</a>
            <div class=crud>
                <h1>CRUD</h1>
            </div>
    </header>

    </div>
    <?php

    use Models\projektas;

    use Models\darbuotojas;

    require_once "bootstrap.php";


    function redirect_to_root()
    {
        header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
    }


    if (isset($_GET['name'])) {
        $product = new Models\Projektas();
        $product->setName($_GET['name']);
        $entityManager->persist($product);
        $entityManager->flush();
        redirect_to_root();
    }


    if (isset($_GET['delete'])) {
        $user = $entityManager->find('Models\projektas', $_GET['delete']);
        $entityManager->remove($user);
        $entityManager->flush();
        redirect_to_root();
    }


    if (isset($_POST['update_name'])) {
        $user = $entityManager->find('Models\projektas', $_POST['update_id']);
        $user->setName($_POST['update_name']);
        $entityManager->flush();
        redirect_to_root();
    }

    // $projektas = $entityManager->find('Models\projektas', 8);
    // if ($projektas) {
    //     print($projektas->getName());
    //     $darbuotojas = $projektas->getDarbuotojas();
    //     if ($darbuotojas) print(" | " . $darbuotojas->getName() . " | ");
    //     print(' <a href="?updatable"><button>UPDATE</button></a>');
    // }
    // print("</pre><hr>");


    $products = $entityManager->getRepository('Models\projektas')->findAll();
    print("<table>");
    foreach ($products as $p)
        print("<tr>"
            . "<td>" . $p->getId()  . "</td>"
            . "<td>" . $p->getName() . "</td>"
            . "<td><a class=button2 href=\"?delete={$p->getId()}\">DELETE</a></td>"
            . "<td><a class=button2 href=\"?updatable={$p->getId()}\">UPDATE</a></td>"
            
            . "</tr>");
    print("</table>");
    print("</pre><hr>");

    if (isset($_GET['updatable'])) {
        $product = $entityManager->find('Models\projektas', $_GET['updatable']);

        print("
        <form action=\"\" method=\"POST\">
            <input type=\"hidden\" name=\"update_id\" value=\"{$product->getId()}\">
            <label  for=\"name\">Įveskite naują pavadinimą: </label><br><br>
            <input class=input type=\"text\" name=\"update_name\" value=\"{$product->getName()}\"><br><br>
            <input class=button type=\"submit\" value=\"Pateikti\">
        </form>
    ");
        print("<hr>");
    }


    ?>
    <form action="" method="GET">
        <label for="name"></label><br>
        <input class=input type="text" name="name" value="" placeholder="Projekto pavadinimas" Required><br>
        <input class=button type="submit" value="Pridėti projektą">
    </form>
    <hr>


    <footer>
        <div id="footer-content">
            <p> NO Copyright 2021 @ Tomas - NO Rights Reserved </p>
        </div>
    </footer>