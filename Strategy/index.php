<?php

require_once(dirname(__DIR__) . "/autoload.php");

$discriminant = new \strategy\classes\Discriminant();
$viet = new \strategy\classes\Viet();

$equation_solver = new \strategy\classes\EquationContext($discriminant);

echo "Solving with discriminant: <br />";
$equation_solver->execute(1, -3, 2);

echo "Solving with Viet theorem: <br />";
$equation_solver->setStrategy($viet);
$equation_solver->execute(1, -3, 2);
