<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Negan extends Monster {
  
  private $life = 50;
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
  return $this->life;
 }
public function defense(): int {
  return 15;
 }
public function experience(): int {
  return 17;
 }
public function skills(): array {
  return [
    'Vitesse' => 15,
    'Force' => 20,
    'Attack' => 20
  ];
 }


 public function getAttack(): int
 {
  return rand(10, 20);
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