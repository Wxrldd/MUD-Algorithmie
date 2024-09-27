<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Character\MainCharacter;

require_once __DIR__ . '/vendor/autoload.php'; // modified

$staurie = new Staurie(name: 'Luky Luke');

$staurie->register([Console::class, PrettyPrinter::class, Menu::class, Inventory::class]);

$container = $staurie->getContainer();

$character = $container->registerComponent(MainCharacter::class);

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text' => 'Welcome to this awesome test adventure',
    'labels' => [
        'new_game' => 'Enter the world',
        'quit' => 'Exit game',
        'view' => 'Map'
    ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory' => __DIR__ . '/src/Map',
    'namespace' => 'Game\Console\Map'
]);

// Démarrage du jeu
$staurie->run();
