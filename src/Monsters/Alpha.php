<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Alpha extends Monster {
public function name() : string { 
  return "Alpha";
}
public function description(): string { 
  return "Alpha était la principale leader d’un groupe appelé Les chuchoteurs.";
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
