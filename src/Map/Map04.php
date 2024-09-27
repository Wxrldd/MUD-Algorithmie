<?php

namespace Game\Console\Map;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Scythe;
use Game\Console\Npcs\Chuchoteur;
use Game\Console\Monsters\Alpha;


class Map04 extends Blueprint {

    private Position $position;
    function __construct() {
        $this->position = new Position( -1, 0);
    }
    public function npcs(): array {
        return [ new Chuchoteur()];
    }

    public function items(): array {
        return [ new Scythe()];
    }

    public function monsters(): array {
        return [ new Alpha()];
    }
    public function name(): string {
        return "Lockdown";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return $this->position;
    }
}