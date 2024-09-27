<?php
namespace Game\Console\Npcs;

use Jugid\Staurie\Game\Npc;

class Jack extends Npc {
public function name() : string {
  return 'Jack';
 }
public function description() : string {
  return "Une ville abandonée mais peuplée";
 }
public function speak() : string|array {
  return "Fait attention cette ville est dangereuse...";
 }

}