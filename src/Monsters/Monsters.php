<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Monsters extends Monster {
public function name() : string { 
  return "Zombie";
}
public function description(): string { 
  return "Des morts vivants qui se nourrissent des vivants";
}
public function level() : int { 
  return 1;
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
