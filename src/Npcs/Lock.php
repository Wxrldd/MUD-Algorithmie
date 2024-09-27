<?php
namespace Game\Console\Npcs;

use Jugid\Staurie\Game\Npc;

class Lock extends Npc {
public function name() : string {
  return 'Lock';
 }
public function description() : string {
  return "Un survivant membre du sanctuaire";
 }
public function speak() : string|array {
  return "Chutt! Fait moins de bruit...";
 }

}