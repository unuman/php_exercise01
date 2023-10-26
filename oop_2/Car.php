<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function information()
    {
        return "車の車種:" . $this->name . PHP_EOL .
            "車体番号:" . $this->number . PHP_EOL .
            "カラー:" . $this->color . PHP_EOL;
    }
}
