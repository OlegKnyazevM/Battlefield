<?php
include 'BattleUnitInterface.php';

class Tank implements BattleUnitInterface
{

    private $attack;
    private $HP;

    public function getAttack()
    {
        return $this->attack;
    }

    public function getHealth()
    {
        return $this->HP;
    }

    public function setHealth(int $HP)
    {
        $this->HP = $HP;
    }

    public function setAttack(int $damage)
    {
        $this->attack = $damage;
        echo "ebat ";
    }

}