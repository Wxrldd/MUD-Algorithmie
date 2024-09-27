<?php
namespace Game\Console\Npcs;

use Jugid\Staurie\Game\Npc;

class Lsauveur extends Npc {
public function name() : string {
  return 'Membre';
 }
public function description() : string {
  return "Un survivant membre du sanctuaire";
 }
public function speak() : string|array {
  return "Je suis Negan";
 }

}