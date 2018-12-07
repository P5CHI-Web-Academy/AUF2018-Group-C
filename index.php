<?php
$f = "qwerty.json";
$f1 = file_get_contents($f);


//Decodificarea fisierului JSON.
$phpArray=json_decode($f1,true);

echo '<pre>';

//Afisarea datelor din fisierul JSON.
//foreach ($phpArray as $key=>$point){
//   print_r( $point);}

// Scoatem cordonatele fiecarui nod intrun arrey nou.
foreach ($phpArray['points'] as $key=>$point){
    $array[0][$key]=$point[0];
    $array[1][$key]=$point[1];
}

//Scoatem inceputul si sfarsitul fiecarui drum in alt array.
foreach ($phpArray['paths'] as $key=>$path){
    $array[2][$key]=$path['from'];
    $array[3][$key]=$path['to'];

}

//Scoatem inceputul si sfarsitul fiecarui drum in alt array.
foreach ($phpArray['paths'] as $key=>$path){
    $array[4][$key]=$path['auto']['distance'];
    $array[5][$key]=$path['auto']['price'];
    $array[6][$key]=$path['auto']['time'];
    $array[7][$key]=$path['train']['distance'];
    $array[8][$key]=$path['train']['price'];
    $array[9][$key]=$path['train']['time'];
    $array[10][$key]=$path['plane']['distance'];
    $array[11][$key]=$path['plane']['price'];
    $array[12][$key]=$path['plane']['time'];
}



//Arrayul nou format este :
echo 'Arrayul nou format este:';
print_r($array);

$fisier = 'asdfgh.csv';

$fp=fopen('MIMI.csv' , 'w+');

foreach($array as $valori){
    fputcsv($fp,$valori,',', '"');

}

fclose($fp);






echo '</pre>';