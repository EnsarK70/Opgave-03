<?php

//Deel-1
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// a) Waarde toevoegen zonder de oorspronkelijke regel aan te passen
$myArray[] = 'boot';

// b) Alle waarden van het array afdrukken

foreach ($myArray as $value) {
    echo $value . "<br>";
}

//Deel-2
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// Het aantal elementen bepalen 
$aantalElementen = count($myArray);

// Afdrukken van het aantal elementen
echo "Het array heeft " . $aantalElementen . " elementen.";

// Een element toevoegen aan het array
$myArray[] = 'boot';

// Het aantal elementen opnieuw bepalen
$aantalElementen = count($myArray);

// Nieuwe uitkomst van het aantal elementen
echo "<br>Het array heeft " . $aantalElementen . " elementen.";

//Deel-3
// antwoorden zijn 
// regel 2 antwoord = Bar
// regel 5 antwoord = 4
// regel 8 antwoord = Toyota
// regel 9 antwoord = 3
// regel 12 antwoord = 5  
// regel 19 antwoord = Five

//Deel4-A
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7,2];

// bereken gemiddelde door alle cijfers op te tellen en te delen door het aantal
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);

echo "Gemiddelde is: ".$gemiddelde;

//Deel4-B
/* Ik denk dat het beter is om de regels samen te voegen, omdat je meer overzicht hebt dan want als je 2 zinnentjes code onder elkaar hebt kan je de fout in gaan dus dat vind ik bij mezelf.  */
?>