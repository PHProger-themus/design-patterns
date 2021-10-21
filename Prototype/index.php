<?php

require_once(dirname(__DIR__) . "/autoload.php");

$registry = new \classes\Registry();

// Adding some collections
try {

    $registry->addItem('tasks', "\\classes\\Collection", [
        'first' => "Feed a cat",
        'second' => "Clean up my room",
        'third' => "Buy products"
    ]);
    $registry->addItem('computer-components', "\\classes\\Collection", [
        'Processor' => "INTEL Core i3 10100F",
        'Video Card' => "PALIT NVIDIA GeForce RTX 3070TI",
        'Motherboard' => "MSI B460M-A PRO",
        'RAM' => "CRUCIAL CT8G4DFRA266 DDR4",
        'Hard Disk Drive' => "WD Caviar Blue WD10EZEX",
        'Power Supply Unit' => "Aerocool VX PLUS 500W",
        'Fans' => "AEROCOOL Motion 8 Plus",
        'Cooler' => "DeepCool GAMMAXX 400 BLUE BASIC",
    ]);

    // They were cloned
    echo $registry->getItem('tasks')->getByIndex('second');
    echo "<br />";
    echo "Count of components: " . $registry->getItem('computer-components')->count();

} catch (Exception $e) {
    die($e->getMessage());
}