<?php

namespace Game\Console\Monsters;

use Jugid\Staurie\Game\Monster;

class Gouverneur extends Monster {

  private $life = 50;

public function name() : string { 
  return "Gouverneur";
}
public function description(): string { 
  return "Le gouverneur, ce type fait bonne figure pour sa communauté, mais derrière des portes closes, il est dérangé.";
}
public function level() : int { 
  return 3;
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
 
 public function getAttack(): int
 {
  return rand(5, 10);
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