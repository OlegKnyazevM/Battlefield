<?php
include 'BattleUnitInterface.php';

class Soldier implements BattleUnitInterface
{
    private $attack;
    private $HP;

    public function getAttack()
    {
        return $this->attack;

    }

    public function getHP()
    {
        return $this->HP;
    }

    public function setAttack(int $damage)
    {
        $this->attack = $damage;
    }

    public function setHealth(int $HP)
    {
        $this->HP = $HP;
    }
}