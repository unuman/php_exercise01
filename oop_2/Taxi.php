<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;

    public function __construct($name, $number, $color, $passenger)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = $passenger;
    }

    public function pickUp($in)
    {
        $this->passenger += $in;
        return strval($in) . "人乗車しました" . PHP_EOL;
    }

    public function lower($out)
    {
        if ($this->passenger - $out >= 0) {
            $this->passenger -= $out;
            return strval($out) . "人降車しました" . PHP_EOL;
        } else {
            return strval($out) . "人は降車できません" . PHP_EOL;
        }
    }

    public function information()
    {
        // 修正前
        // parent::information();
        // return "乗車人数:" . strval($this->passenger) . "人" . PHP_EOL;
        $parentInfo = parent::information();
        return $parentInfo . "乗車人数:" . strval($this->passenger) . "人" . PHP_EOL;
    }
}
