<form action=""
 method="post">
    <div>
        <label for="test">Quantité</label>
        <input type="number" id="test" name="quantity">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <button type="submit">Ajouter</button>
</form>
<?php
session_start();

$stock = $_GET['stock'];
$errors = [];

if (empty($stock)) {
    header('locatio: 1-html.php');
}
$_SESSION['stock'] = $stock;

 if (isset($_POST['quantity'])) {
     if ($_POST['quantity'] > $stock) {
         $errors[] = "Il n'y a pas assez de stock pour répondre à votre demande";
     }
 }

if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors [] = 'Veuillez entrer un email valide';
    }
}
 if (isset($_POST['email']) && isset($_POST['quantity']) && empty($errors)) {
     $_SESSION['email'] = $_POST['email'];
     $_SESSION['quantity'] = $_POST['quantity'];
     var_dump($_SESSION);
 }

 foreach ($errors as $error) {
     echo $error. '</br>';
 }
