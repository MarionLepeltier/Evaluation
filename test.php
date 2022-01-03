<?php
    require './Personnage.php';

    $perso = new Personnage ("Yonyon", 20, 45, 75, 90, []);

    
  $perso-> setMana(3);
  $perso-> afficher_stats();  
?>