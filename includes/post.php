<div id="refresh">
<?php

    
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', '');

    $req = $bdd->prepare('SELECT pseudo, message, date FROM minichat ORDER BY id DESC LIMIT 0, 10');
    $req->execute(array('pseudo', 'message', 'date'));

    while($donnees = $req->fetch()){

        echo $donnees['date'] . ' : ' . '<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong>' . ':' . htmlspecialchars($donnees['message']) . '<br>' . '<hr>'; 
    }

    $req->closeCursor();



?>
<div>