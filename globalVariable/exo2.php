<?php session_start(); ?>

<a href="index.php">home</a>
 <h2> EXO 2 : <?php echo $_SESSION['nom'] . $_SESSION['prenom'] ." " . $_SESSION['age'] ;  ?></h2>