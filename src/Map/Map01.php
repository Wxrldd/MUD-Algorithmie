<?php

namespace Game\Console\Map;

use Game\Console\Monsters\Monsters;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Gun;
use Game\Console\Character\Cain;

class Map01 extends Blueprint {
    public function npcs(): array {
        return [ new Cain()];
    }

    public function items(): array {
        return [ new Gun() ];
    }

    public function monsters(): array {
        return [ new Monsters()];
    }
    public function name(): string {
        return "The Walking Dead";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return new Position(0,y: 0);
    }
}
