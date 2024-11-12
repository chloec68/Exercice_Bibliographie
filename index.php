<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$sKing=new Auteur("Stephen","KING");
$ca=new Livre("Ca","1138","1986","20",$sKing);
$simetierre=new Livre ("Simetierre","374","1983","15",$sKing);
$leFleau=new Livre ("Le Fléau","823","1978","14",$sKing);
$shining=new Livre ("Shining","447","1977","16",$sKing);

echo $sKing->afficherBibliographie();