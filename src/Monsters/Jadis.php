<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Jadis extends Monster {
public function name() : string { 
  return "Jadis";
}
public function description(): string { 
  return "Jadis n’est pas le personnage le plus menaçant de l’extérieur. Cependant, le simple fait qu’elle ait pu faire du mal à Rick nous a tous tenus en haleine.";
}
public function level() : int { 
  return 5;
}
public function health_points(): int {
  return 5;
 }
public function defense(): int {
  return 2;
 }
public function experience(): int {
  return 3;
 }
public function skills(): array {
  return [
    'Vitesse' => 5,
    'Force' => 2,
    'Attack' => 2
  ];
 }
}
