<?php
    $aliMaas=20000;
    $veliMaas=15000;
    $muratMaas=25000;

    $vergiOrani1=0.27;
    $vergiOrani2=0.36;

    echo $aliMaas*($aliMaas-$vergiOrani1);
    echo "<br>";
    echo $veliMaas*($veliMaas-$vergiOrani1);
    echo "<br>";
    echo $muratMaas*($muratMaas-$vergiOrani2);

?>