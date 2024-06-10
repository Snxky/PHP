<?php

$fichier = 'test.txt';

// read from file

$traiter = fopen($fichier, 'r');

$data = fread($traiter,filesize($fichier));

echo $data;

fclose($traiter);


// write into a file

$traiter = fopen('fichier2.txt', 'w');

$fichier2 = 'fichier2.txt';

$txt = 'Hello from php file';

fwrite($traiter,$txt);


fclose($traiter);



