<?php
namespace MB;

use MB\Classes\Controller\ActionController;
use MB\Classes\Controller\FridgeController;
use MB\Classes\Domain\Model\Drawer;
use MB\Classes\Domain\Model\Fridge;
use MB\Classes\Domain\Repository\FridgeRepository;

require_once '/vendor/composer/ClassLoader.php';

$loader = new \Composer\Autoload\ClassLoader();
$loader->setUseIncludePath(true);
$loader->register();

FridgeRepository::initDB();

$fringe = new Fridge( array(
	'temperature' => 4,
	'volume'      => 300,
	'energy'      => 1,
	'stateDoor'   => 0,
	'stateLight'  => 0
) );


$fringe->setDrawers( new \SplObjectStorage() );
$fringe->addDrawer( new Drawer( array( 'volume' => 2 ) ) );
$fringe->addDrawer( new Drawer( array( 'volume' => 5 ) ) );
$fringe->addDrawer( new Drawer( array( 'volume' => 10 ) ) );
$fringe->addDrawer( new Drawer( array( 'volume' => 34 ) ) );

( new FridgeController() )->showAction();

if(array_key_exists('fridge', $_REQUEST)){
	(new Fridge())->setVolume($_REQUEST['fridge']);
}
