<?php

namespace App;

abstract class Developer
{
    public string $name;
    public int $age;
    public string $position;

    abstract function getEvaluateTask();
}
