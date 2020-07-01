<?php
include 'Soldier.php';
include 'Tank.php';

$soldier = new Soldier();
$soldier->setAttack(100);
$soldier->setHealth(100);
echo 'soldier = ' . $soldier->getAttack();

$soldier2 = new Soldier();
$soldier2->setAttack(100);
$soldier2->setHealth(110);
echo '<br>' . 'soldier2 = atc(' . $soldier3->getAttack() . 'HP(' . $soldier2->getHP() . ')';

$soldier3 = new Soldier();
$soldier3->setAttack(100);
$soldier3->setHealth(110);
echo '<br>' . 'soldier3 = atc(' . $soldier3->getAttack() . 'HP(' . $soldier3->getHP() . ')';


$tank = new Tank();
?>
