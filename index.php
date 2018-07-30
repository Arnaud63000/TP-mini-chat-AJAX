<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP Mini-Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <div class="formulaire">
        <form action="config/store.php" method="post">
            <label>Votre pseudo</label>
            <input type="text" name="pseudo" placeholder="Votre pseudo" required value="<?php echo $_COOKIE['pseudo']; ?>">
            <br>
            <label>Votre message</label>
            <input type="text" name="message" placeholder="Votre message" required>
            <br>
            <button type="submit" class="btn btn-primary">Envoyez</button>
        </form> 
        

    </div>
    <div class="cadre">
        <div class="jumbotron">
            <p class="lead">Historique des messages:</p>
            <hr class="my-4">
            <p>
  <?php

include 'includes/post.php';

?></p>
        </div>
   
 
    </div>
    <script	  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
              
    <script src="js/messages.js"></script>
</body>

</html>