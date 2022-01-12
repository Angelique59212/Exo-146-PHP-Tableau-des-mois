<?php
$month = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre',
];
echo $month[2];
echo "<br><br>";

echo $month[5];
echo "<br><br>";

echo $month[7] = "août";
echo "<br><br>";

$departments = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-de-Calais",
    "80" => "Somme",
];

echo $departments["59"] . "<br>";
echo "<br><br>";

echo $departments["51"] = "Reims";
echo "<br><br>";

echo "les Valeurs du tableau sont <br>";
foreach ($month as $value) {
   echo $value ."<br>";
}
echo "<br><br>";

echo "les Valeurs du tableau sont <br>";
foreach ($departments as $value) {
    echo $value ."<br>";
}
echo "<br><br>";

foreach ($departments as $key => $value) {
    echo "Le département " . $value . " a le numéro " . $key . "<br>";
}

