<?php
    require './Personnage.php';

    $perso = new Personnage ("Yonyon", 20, 45, 75, 90, []);

    
  $perso-> setMana(3);
  echo $perso-> addItems("baton");
  echo $perso-> addItems("fléche");
  echo $perso-> addItems("arc");
  $perso-> afficher_stats();  
  
  var_dump($perso);
?>