<?php

namespace Game\Console\Map;

use Game\Console\Monsters\Negan;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Gun;
use Game\Console\Npcs\Chuchoteur;

class Map05 extends Blueprint {

    private Position $position;
    function __construct() {
        $this->position = new Position( 1, 0);
    }
    public function npcs(): array {
        return [ new Chuchoteur()];
    }

    public function items(): array {
        return [ new Gun()];
    }

    public function monsters(): array {
        return [ new Negan()];
    }
    public function name(): string {
        return "Le Sanctuaire";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return $this->position;
    }
}