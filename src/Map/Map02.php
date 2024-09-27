<?php

namespace Game\Console\Map;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Gun;
use Game\Console\Monsters\Gouverneur;
use Game\Console\Npcs\Jack;

class Map02 extends Blueprint {
    private Position $position;
    function __construct() {
        $this->position = new Position(x: 0,y: 1);
    }
    public function npcs(): array {
        return [ new Jack()];
    }

    public function items(): array {
        return [ new Gun()];

    }

    public function monsters(): array {
        return [ new Gouverneur()];
    }
    public function name(): string {
        return "Woodbury";
    }
    public function description(): string {
        return "Une zone plein de titans, des êtres surhumains";
    }
    public function position(): Position { 
        return $this->position;
    }
}