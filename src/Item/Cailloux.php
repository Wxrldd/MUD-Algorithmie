<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;
class Cailloux extends Item_Equippable {
public function name() : string { 
  return "Cailloux"; 
}
public function description(): string { 
  return "projectile";
}
public function body_part(): string {
  return "hand";
 }
public function statistics(): array {
  return [
    "Damage" => 1,
    "Reach" => 20
  ];
 }
}
