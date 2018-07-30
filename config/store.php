
<?php
    session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', '');
}
catch (PDOException $e) {
        die('Error' . $e->getMessage());
}
$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);


$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date) VALUES (?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));


setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
header("location: ../index.php");

?>
