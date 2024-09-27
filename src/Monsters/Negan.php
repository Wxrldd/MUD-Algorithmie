<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Negan extends Monster {
public function name() : string { 
  return "Negan";
}
public function description(): string { 
  return "Negan est le méchant le plus redoutable que notre groupe ait jamais affronté. Le chaos c'est lui";
}
public function level() : int { 
  return 20;
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