<?php
require_once("app\Villager.php");
require_once("app\Witch.php");


echo "\nPerson A : ";
echo "\nAge Of Death : ";
$deathAgeA = fopen ("php://stdin","r");
$deathAgeA = fgets($deathAgeA);
echo "Year Of Death : ";
$deathYearA = fopen ("php://stdin","r");
$deathYearA = fgets($deathYearA);

$villagerA = new Villager($deathAgeA, $deathYearA);
$bornVictimA = $villagerA->getBornYear();
$witchA = new Witch();
$totalVictimYearA = $witchA->kill($bornVictimA);
echo ' --- in year ' . $bornVictimA . ', she kill ' . $totalVictimYearA;

echo "\nPerson B : ";
echo "\nAge Of Death : ";
$deathAgeB = fopen ("php://stdin","r");
$deathAgeB = fgets($deathAgeB);
echo "Year Of Death : ";
$deathYearB = fopen ("php://stdin","r");
$deathYearB = fgets($deathYearB);

$villagerB = new Villager($deathAgeB, $deathYearB);
$bornVictimB = $villagerB->getBornYear();
$witchB = new Witch();
$totalVictimYearB = $witchA->kill($bornVictimB);
echo ' --- in year ' . $bornVictimB . ', she kill ' . $totalVictimYearB;

// average number of people the witch killed on year of birth of those people
$average = ($totalVictimYearA + $totalVictimYearB) / 2;

echo "\n>>> Average = " . $average;