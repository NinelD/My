<?php

namespace App;

class PM implements ManagerInterface
{
    const TIME_COSTS = 100;
    public function getEvaluateTaskPM (int $workHouse): int
    {
        return $workHouse * self::TIME_COSTS;
    }

}