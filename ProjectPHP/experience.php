<?php
class Sport {
    public $hobby = 'Бег';
    public $experience = 8;

    public $isCouch = false;

// Этим методом присваиваиваются параметры для свойств

//    public function __construct($hobby = 'Бег', $experience = 0, $isCouch = true)
//    {
//        $this->hobby = $hobby;
//        $this->experience = $experience;
//        $this->isCouch = $isCouch;
//    }

    public function sayAboutExperience ()
    {
// Можем сделать объекты и им присвоить параметры.  У нас 2 переменные с объектами в одном происаны параметры, а вдругом нет.
// Если пареметров нет, программа возьмет их из function __construct.
//
//        $AboutExperience = new Sport('Прыжки', 0, true);
//        $AboutExperience1 = new Sport();
//
// В массив можем поместить объекты и тогда цикл будет рабоать с объектами
//
//        $array = [$AboutExperience, $AboutExperience1];
//        foreach ($array as $sayAboutExperience) {
//
//
// Этим методом можем задать условия параметрам внутри класса.
        if ($this->experience <= 1) {
            echo ' Начинающий уровень ';
        }
//
        if ($this->experience > 1 && $this->experience <= 5) {
            echo ' Средний уровень';
        }

        if ($this->experience > 5) {
            echo ' Продвинутый уровень';
        }
    }
}
$hobbyResult = new Sport ();
echo $hobbyResult->hobby;
$hobbyResult->sayAboutExperience();
