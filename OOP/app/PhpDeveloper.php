<?php

namespace App;

class PhpDeveloper extends Developer
{
    public function __construct(string $name, int $age, string $position)
    {
        $this->name=$name;
        $this->age=$age;
        $this->position=$position;
    }

    function getEvaluateTask(): int
    {
        $min = 1;
        $max = 10;
        return rand($min,$max);
    }
}
