<?php

namespace Game\Console\Map;

use Game\Console\Monsters\Monsters;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Ax;
use Game\Console\Item\Gun;
use Game\Console\Item\Scythe;
use Game\Console\Character\Negan;

class Map02 extends Blueprint {
    private Position $position;
    function __construct() {
        $this->position = new Position(x: 0,y: 1);
    }
    public function npcs(): array {
        return [ new Negan()];
    }

    public function items(): array {
        return [ new Gun(), new Ax(), new Scythe()];

    }

    public function monsters(): array {
        return [ new Monsters()];
    }
    public function name(): string {
        return "L'attaque des titans";
    }
    public function description(): string {
        return "Une zone plein de titans, des êtres surhumains";
    }
    public function position(): Position { 
        return $this->position;
    }
}
