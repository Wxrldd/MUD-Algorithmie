<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Alpha extends Monster {

  private $life = 5;
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
  return $this->life;
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

 
 public function getAttack(): int
 {
  return rand(10, 17);
 }
 public function getDefense(): int
 {
     return 2;
 }
 public function getLife($damage): int
 {   
     $this->life -= $damage;
     return $this->life;
 }

 public function fight() : array {
     return [];
 }
}