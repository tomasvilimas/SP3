<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php 



use Models\projektas;

require_once "bootstrap.php";

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Add new product
if(isset($_GET['name'])){
    $product = new Models\Projektas();
    $product->setName($_GET['name']);
    $entityManager->persist($product);
    $entityManager->flush();
    redirect_to_root();
}

// Delete product
if(isset($_GET['delete'])){
    $user = $entityManager->find('Models\projektas', $_GET['delete']);
    $entityManager->remove($user);
    $entityManager->flush();
    redirect_to_root();
}

// Update
if(isset($_POST['update_name'])){
    $user = $entityManager->find('Models\projektas', $_POST['update_id']);
    $user->setName($_POST['update_name']);
    $entityManager->flush();
    redirect_to_root();
}

// print("<pre>Find Product by id: " . "<br>");
// // $product = $entityManager->find('Product', 66);
// // ... SELECT + WHERE ID
// $product = $entityManager->find('Models\projektas', 5); // jei naudojame namespaceus
// $product !== NULL ? print $product->getId() . ' ' . $product->getName() : '';
// print("</pre><hr>");

// print("<pre>Find Product(s) by other property (name): " . "<br>");
// // ... SELECT + WHERE Name
// $products = $entityManager->getRepository('Models\projektas')->findBy(array('name' => 'php'));
// $products[0] !== NULL ? print $products[0]->getId() . ' ' . $products[0]->getName() : '';
// print("</pre><hr>");

// print("<pre>Find Product(s) by other property (name): " . "<br>");
// $products = $entityManager->getRepository('projektas')->findBy(array('name' => 'php'));
// print("<table>");
// foreach($projektai as $p)
//     print("<tr>" 
//             . "<td>" . $p->getId()  . "</td>" 
//             . "<td>" . $p->getName() . "</td>" 
//             . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
//             . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a></td>"
//         . "</tr>");
// print("</table>"); 
// print("</pre><hr>");

// print("<pre>Find Product(s) by other property (name) sorted by another property (id): " . "<br>");
// $products = $entityManager->getRepository('Product')->findBy(array('name' => 'php'), array('id' => 'DESC'));
// print("<table>");
// foreach($products as $p)
//     print("<tr>" 
//             . "<td>" . $p->getId()  . "</td>" 
//             . "<td>" . $p->getName() . "</td>" 
//             . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
//             . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a></td>"
//         . "</tr>");
// print("</table>"); 
// print("</pre><hr>");

print("<pre>Find all Products: " . "<br>");
$products = $entityManager->getRepository('Models\projektas')->findAll();
print("<table>");
foreach($products as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            . "<td><a href=\"?delete={$p->getId()}\">DELETE</a>☢️</td>" 
            . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a>♻️</td>"
        . "</tr>");
print("</table>"); 
print("</pre><hr>");
 
if(isset($_GET['updatable'])){
    $product = $entityManager->find('Models\projektas', $_GET['updatable']);
  
    print("
        <form action=\"\" method=\"POST\">
            <input type=\"hidden\" name=\"update_id\" value=\"{$product->getId()}\">
            <label for=\"name\">Product name: </label><br>
            <input type=\"text\" name=\"update_name\" value=\"{$product->getName()}\"><br>
            <input type=\"submit\" value=\"Submit\">
        </form>
    ");
    print("<hr>");
}


?>
<form action="" method="GET">
  <label for="name"></label><br>
  <input class=input type="text" name="name" value=""  placeholder="Projekto pavadinimas" Required><br>
  <input class=button type="submit" value="Pridėti projektą">
</form> 
<hr>


<footer>
        <div id="footer-content">
            <p> NO Copyright 2021 @ Tomas - NO Rights Reserved </p>
        </div>
    </footer>