<?php
//
//Тема12 . Классы
//ЗАДАНИЕ:
//1. перечислить любимые 4 - 5 хобби(создать классы)
//2. создать объекты классов
//3. вывести результаты выполнения созданных методов
//
//class Dance
//{
//    public $hobby = 'Танцы';
//    public $experience = 1;
//    public $isCouch = true;
//
//    public function sayHello()
//    {
//        echo 'Всем привет' . PHP_EOL;
//    }
//}
//
//$hobbyResult = new Dance ();
//echo $hobbyResult->hobby;
//
//class Sport
//{
//    public $hobby = 'Бег';
//    public $experience = 8;
//    public $isCouch = false;
//
//    public function sayAboutExperience()
//    {
//        if ($this->experience <= 1) {
//            echo ' Начинающий уровень ';
//        }
//
//        if ($this->experience > 1 && $this->experience <= 5) {
//            echo ' Средний уровень';
//        }
//
//        if ($this->experience > 5) {
//            echo ' Продвинутый уровень';
//        }
//    }
//}
//$hobbyResult = new Sport ();
//    echo $hobbyResult->hobby;
//    $hobbyResult->sayAboutExperience();
//
//class Sport2
//{
//    public $hobby = 'Волейбол';
//    public $experience = 5;
//    public $isCouch = true;
//
//    public function sayAboutExperience()
//    {
//        if ($this->experience <= 1) {
//            echo ' Начинающий уровень ';
//        }
//
//        if ($this->experience > 1 && $this->experience <= 5) {
//            echo ' Средний уровень';
//        }
//
//        if ($this->experience > 5) {
//            echo ' Продвинутый уровень';
//        }
//    }
//}
//$hobbyResult = new Sport2 ();
//echo $hobbyResult->hobby;
//$hobbyResult->sayAboutExperience();
//
//class Reading
//{
//    public $hobby = 'Чтение';
//    public $experience = 2;
//    public $isCouch = false;
//
//    public function sayAboutExperience()
//    {
//        if ($this->experience <= 1) {
//            echo ' Начинающий уровень ';
//        }
//
//        if ($this->experience > 1 && $this->experience <= 5) {
//            echo ' Средний уровень';
//        }
//
//        if ($this->experience > 5) {
//            echo ' Продвинутый уровень';
//        }
//    }
//}
//$hobbyResult = new Reading ();
//echo $hobbyResult->hobby;
//$hobbyResult->sayAboutExperience();
//
//class Photo
//{
//    public $hobby = 'Фотографирование';
//    public $experience = 0;
//    public $isCouch = false;
//
//    public function sayAboutExperience()
//    {
//        if ($this->experience <= 1) {
//            echo ' Начинающий уровень ';
//        }
//
//        if ($this->experience > 1 && $this->experience <= 5) {
//            echo ' Средний уровень';
//        }
//
//        if ($this->experience > 5) {
//            echo ' Продвинутый уровень';
//        }
//    }
//}
//$hobbyResult = new Photo ();
//echo $hobbyResult->hobby;
//$hobbyResult->sayAboutExperience();
//
// Тема13 . Геттеры и сеттеры
//ЗАДАНИЕ:
//1. Описать 4 - 5 животных(создать классы)
//2. Придумать Имя и "засетить" его
//3. Вывести на экран
//
//class Animals
//{
//    public $type;
//    public $name;
//    public $age;
//
//    public function setName($names)
//    {
//        $this->name = $names;
//    }
//}
//$animalName = new Animals();
//$animalName->setName('Барсик');
//echo $animalName->name;
//
//class Animals2
//{
//    public $type = 'Коза';
//    public $name;
//    public $age;
//
//    public function setName($names)
//    {
//        $this->name = $names;
//    }
//}
//$animalName = new Animals2 ();
//$animalName->setName('Зося');
//echo $animalName->name;
//
//class Animals3
//{
//    public $type = 'Корова';
//    public $name = 'Буренка';
//    public $age = 5;
//
//    public function setNameAge($nameX, $ageY)
//    {
//        $this->name = $nameX;
//        $this->age = $ageY;
//    }
//}
//$animalName = new Animals3 ();
//$animalName->setNameAge('Зося ', 6);
//echo $animalName->name;
//echo $animalName->age;
//
//class Animals4
//{
//    public $type = 'Собака';
//    public $name = 'Муха';
//    public $age = 3;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//}
//$animalName = new Animals4 ();
//echo $animalName->getName();
//
// Тема14 . Конструктор в классах
//ЗАДАНИЕ:
//1. создать 5 точек ресторанов быстрого питания
//2. каждому ресторану описать 5 видов блюд для меню
//
//class Cafe
//{
//    public $drink;
//    public $salad;
//    public $soup;
//    public $garnish;
//    public $dessert;
//
//    public function __construct($drink, $salad, $soup, $garnish, $dessert)
//    {
//        $this->drink = $drink;
//        $this->salad = $salad;
//        $this->soup = $soup;
//        $this->garnish = $garnish;
//        $this->dessert = $dessert;
//    }
//}
//$cafeRose = new Cafe('Кофе', 'Цезарь', 'Борщ', 'Булгур', 'Чизкейк');
//$cafeFabric = new Cafe('Чай', 'Греческий', 'Бульон', 'Киноа', 'Фалафель');
//$cafeShishka = new Cafe('Коктель', 'Мимоза', 'Щи', 'Драники', 'Пироженное');
//$cafeAmor = new Cafe('Вино', 'Оливье', 'Харчо', 'Картофель', 'Медовик');
//$cafeLeone = new Cafe('Медовуха', 'Купеческий', 'Крем-суп', 'Овощи', 'Трюффель');
//
//foreach ($cafeRose as $key => $dishes) {
//    echo $key . ' ';
//    echo $dishes . PHP_EOL;
//}
//
//foreach ($cafeFabric as $key => $dishes) {
//    echo $key . ' ';
//    echo $dishes . PHP_EOL;
//}
//
//foreach ($cafeShishka as $key => $dishes) {
//    echo $key . ' ';
//    echo $dishes . PHP_EOL;
//}
//
//foreach ($cafeAmor as $key => $dishes) {
//    echo $key . ' ';
//    echo $dishes . PHP_EOL;
//}
//
//foreach ($cafeLeone as $key => $dishes) {
//    echo $key . ' ';
//    echo $dishes . PHP_EOL;
//}
//
// Тема15 . Наследование
//ЗАДАНИЕ:
//1. создать Человека(класс)
//2. придумать 10 разновидностей профессий и "отнаследоваться" от Человека
//
//class Person
//{
//    public $name = 'Alex';
//    public $age = 30;
//    public $experience;
//}
//
//class Copywriter extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю Копирайтером';
//    }
//}
//
//class BackendDeveloper extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю Бэкенд разработчиком';
//    }
//}
//
//class DataAnalyst extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю аналитиком';
//    }
//}
//
//class Marketer extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю маркетологом';
//    }
//}
//
//class ProjectManager extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю проджек менеджером';
//    }
//}
//
//class TeamLead extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю Тим-лидом';
//    }
//}
//
//class Lawyer extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю юристом';
//    }
//}
//
//class Accountant extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю бухгалтером';
//    }
//}
//
//class Financier extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю финансистом';
//    }
//}
//
//class Manager extends Person
//{
//    public function work()
//    {
//        echo 'Я работаю менеджером';
//    }
//}
//
//$result = new Copywriter();
//echo $result->name . ' ';
//$result->work();
//
//$result = new BackendDeveloper();
//$result->work();
//
// тема 16. Наследование с конструктором
//ЗАДАНИЕ:
//1. создать классы 6 - 8 растений
//2. придумать "старший\общий класс", туда записать все общие свойства
//3. создать объекты растений и вывести свойства
//
//class Flowers
//{
//    public $type;
//    public $color;
//    public $price;
//
//    public function __construct($type, $color, $price)
//    {
//        $this->type = $type;
//        $this->color = $color;
//        $this->price = $price;
//    }
//}
//
//class Rose extends Flowers
//{
//    public function about()
//    {
//        echo 'Роза красная' . ' ' . $this->price;
//    }
//}
//$maxPrice = new Rose('Роза', 'красная', 8.56);
//$maxPrice->about();
//
//class Peony extends Flowers
//{
//    public function aboutPeony()
//    {
//        echo 'Пионы' . ' ' . $this->price;
//    }
//}
//$maxPricePeony = new Peony('Пионы', 'white', 7.45);
//$maxPricePeony->aboutPeony();
//
//class Tulip extends Flowers
//{
//    public function aboutTulip()
//    {
//        echo 'Тюльпаны' . ' ' . $this->price;
//    }
//}
//$maxPriceTulip = new Tulip('Тюльпаны', 'white', 5.45);
//$maxPriceTulip->aboutTulip();
//echo $maxPricePeony->color;
//echo $maxPricePeony->type;
//
//class Orchid extends Flowers
//{
//    public $typeOrchid;
//
//    public function aboutOrchid($typeOrchid)
//    {
//        $this->typeOrchid = $typeOrchid;
//        echo 'Орхидеи' . ' ' . $this->price . $typeOrchid;
//    }
//}
//$maxPriceOrchid = new Orchid('Орхидеи', 'white', 8.45);
//$maxPriceOrchid->aboutOrchid('Фаленопсис');
//echo $maxPriceOrchid->typeOrchid = 'Фаленопсис';
//
////выше написала два варианта выведения свойства, как правильно?
//
//echo $maxPriceOrchid->color;
//echo $maxPriceOrchid->type;
//
//class Violet extends Flowers
//{
//    public function getAboutViolet($a, $b)
//    {
//        $newPrice = $a + $b;
//        return $this->price + $newPrice;
//    }
//}
//$maxPriceViolet = new Violet('Фиалки', 'white', 5.45);
//echo $maxPriceViolet->getAboutViolet(4.10, 5.15);
////echo $maxPriceViolet->color;
////echo $maxPriceViolet->type;
//
//class Iris extends Flowers
//{
//    public function aboutIris()
//    {
//        echo 'Ирисы' . $this->price;
//    }
//}
//$maxPriceIris = new Iris('Фиалки', 'white', 10);
//$maxPriceIris->aboutIris();
//echo $maxPriceIris->color;
//echo $maxPriceIris->type;
//
// тема 17. Конструктор в классах наследниках
//ЗАДАНИЕ:
//1. создать еще одну должность
//2. добавить свойство "зарплата"
//3. "определить его в конструкторе"
//
//class Person
//{
//    public $name = 'Alex';
//    public $age = 30;
//    public $experience;
//
//    public function __construct($name, $age, $experience)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->experience = $experience;
//    }
//}
//
//class Copywriter extends Person
//{
//    public $wages;
//
//    public function __construct($name, $age, $experience, $wages)
//    {
//        parent::__construct($name, $age, $experience);
//        $this->wages = $wages;
//    }
//}
//
//$result = new Copywriter('Victor', 27, 2.5, 3000);
//echo $result->wages;
//
//18. Абстрактные классы
//
//ЗАДАНИЕ:
//1. создать абстрактный класс "Здание" со свойствами: кол - во этажей, жилое здание или нет, улица, на которой находится(можно придумать + свои свойства)
//2. создать от абстрактного класса классы - наследники(5 - 6 классов)
//3. вывести свойства объектов
//
//abstract class Building
//{
//    public $floors;
//    public $isResidential;
//    public $street;
//    public $material;
//}
//class House1 extends Building
//{
//
//    public function __construct($floors, $isResidential, $street, $material)
//    {
//        $this->floors = $floors;
//        $this->isResidential = $isResidential;
//        $this->street = $street;
//        $this->material = $material;
//    }
//}
//$house1 = new House1(5, true, 'Мира 17', 'кирпич');
//echo $house1->floors;
//echo $house1->isResidential;
//echo $house1->street;
//echo $house1->material;
//
//class House2 extends Building
//{
//
//    public function __construct($floors, $isResidential, $street, $material)
//    {
//        $this->floors = $floors;
//        $this->isResidential = $isResidential;
//        $this->street = $street;
//        $this->material = $material;
//    }
//
//    public function about()
//    {
//        echo 'Адрес: ' . $this->street;
//    }
//}
//$house1 = new House2(9, true, 'Уманская 136', 'блоки');
//echo $house1->floors;
//echo $house1->isResidential;
//echo $house1->material;
//$house1->about();
//
//class House3 extends Building
//{
//
//    public function about($street)
//    {
//        $this->street = $street;
//        echo 'Адрес: ' . $street;
//    }
//}
//$house1 = new House3();
//echo $house1->floors = 7;
//echo $house1->isResidential = true;
//echo $house1->material = 'кирпич';
//$house1->about('Сухая 2');
//
//class House4 extends Building
//{
//
//    public function about($street, $floors, $isResidential, $material)
//    {
//        $this->street = $street;
//        $this->floors = $floors;
//        $this->isResidential = $isResidential;
//        $this->material = $material;
//        echo 'Адрес: ' . $street;
//    }
//}
//
//$house1 = new House4();
//$house1->about('Сухая 2 ', 6, false, 'панели');
//echo $house1->material;
//
//class House5 extends Building
//{
//
//    public function about($street, $floors, $isResidential, $material)
//    {
//        $this->street = $street;
//        $this->floors = $floors;
//        $this->isResidential = $isResidential;
//        $this->material = $material;
//        echo 'Помещение находится по адресу' . $street;
//    }
//}
//
//$house1 = new House5();
//$house1->about('Дзержинского 136 ', 6, false, 'панели');
//echo $house1->material;
//echo $house1->floors;
//echo $house1->isResidential;
//
//19. Статические методы и свойства в классах
//
//ЗАДАНИЕ:
//1. создать класс "Калькулятор"
//2. создать 10 статиических методов вычесления
//3. вызвать статические методы
//
//class Calculator
//{
//
//    public static function sum($a, $b)
//    {
//        echo $a + $b . PHP_EOL;
//    }
//
//    public static function equation1($a, $b)
//    {
//        $equation1 = 2 * $a + $b ** 2 - 8;
//        echo 'Результат решения = ' . $equation1 . "\n";
//    }
//
//    public static function equation2($a, $b, $c)
//    {
//        $equation2 = sqrt($a) + pow($b, 2) / $c;
//        echo 'Результат решения = ' . $equation2 . "\n";
//    }
//
//    public static function ageGroup($director, $accountant, $PM)
//    {
//        $ageGroup = ($director + $accountant + $PM) / 3;
//        echo $ageGroup . PHP_EOL;
//    }
//
//    public static function equation3($a, $b, $c)
//    {
//        $equation3 = sqrt($a) + $b / $c;
//        echo 'Результат решения = ' . ceil($equation3) . "\n";
//    }
//
//    public static function equation4($a, $b)
//    {
//        $equation4 = $a - $b * $a;
//        echo 'Результат решения = ' . ceil($equation4) . "\n";
//
//    }
//
//    public static function equation5($a, $b, $c)
//    {
//        $equation5 = $a - $b - $c;
//        echo 'Результат решения = ' . ceil($equation5) . "\n";
//
//    }
//
//    public static function equation6($a, $b, $c)
//    {
//        $equation6 = $a / $b - $c;
//        echo 'Результат решения = ' . ceil($equation6) . "\n";
//
//    }
//
//    public static function equation7($a, $b, $c)
//    {
//        $equation7 = $a - $b * $c;
//        echo 'Результат решения = ' . ceil($equation7) . "\n";
//
//    }
//
//    public static function equation8($a, $b, $c)
//    {
//        $equation8 = $a - $b / $c;
//        echo 'Результат решения = ' . ceil($equation8) . "\n";
//
//    }
//
//    public static function equation9($a, $b, $c)
//    {
//        $equation9 = $a / $b * $c;
//        echo 'Результат решения = ' . ceil($equation9) . "\n";
//
//    }
//}
//Calculator::sum(245.54, 321, 41);
//Calculator::equation1(10, 541);
//Calculator::equation2(23, 45, 4);
//Calculator::ageGroup(42, 35, 31);
//Calculator::equation3(23, 54, 78);
//Calculator::equation4(2, 5,);
//Calculator::equation5(542, 55.23, 42.77);
//Calculator::equation6(45, 89, 42);
//Calculator::equation7(55, 5, 6);
//Calculator::equation8(102, 23, 6);
//Calculator::equation9(102, 54, 2);
//
//20. PHP . Интерфейсы
//
//ЗАДАНИЕ:
//1. создать интерфейс для самолетов со списком методов
//2. создать классы - самолеты, реализующие интерфейс
//3. вывести на экран, что делает каждый самолет
//
//interface Airplane
//{
//    public function visualInspection();
//
//    public function hydraulicControl();
//
//    public function speed();
//
//    public function capacity();
//}
//
//class A27 implements Airplane
//{
////    public $characteristics = ['brake', 'tires', 'fuel'];
//
//    public function visualInspection()
//    {
//        $characteristics = [
//            'brake' => '250',
//            'tires' => true,
//            'fuel' => 100];
//
//        foreach ($characteristics as $key => $characteristicReal) {
//            echo $key . ' ' . $characteristicReal . PHP_EOL;
//        }
//
//    }
//
//    public function hydraulicControl()
//    {
//        echo 'Гидравлический контроль пройден' . PHP_EOL;
//    }
//
//    public function speed()
//    {
//        $speed = 250;
//        echo 'Скорость равна ' . $speed . ' км/ч' . PHP_EOL;
//    }
//
//    public function capacity()
//    {
//        $capacity = 10300;
//        echo $capacity;
//    }
//}
//$a27 = new A27();
//$a27->visualInspection();
//$a27->hydraulicControl();
//$a27->speed();
//$a27->capacity();
//
//class Condor implements Airplane
//{
////    public $characteristics = ['brake', 'tires', 'fuel'];
//
//    public function visualInspection()
//    {
//        $characteristics = [
//            'brake' => '320',
//            'tires' => true,
//            'fuel' => 150];
//
//        foreach ($characteristics as $key => $characteristicReal) {
//            echo $key . ' ' . $characteristicReal . PHP_EOL;
//        }
//
//    }
//
//    public function hydraulicControl()
//    {
//        echo 'Гидравлический контроль пройден' . PHP_EOL;
//    }
//
//    public function speed()
//    {
//        $speed = 270;
//        echo 'Скорость равна ' . $speed . ' км/ч' . PHP_EOL;
//    }
//
//    public function capacity()
//    {
//        $capacity = 12300;
//        echo $capacity;
//    }
//}
//$a27 = new Condor();
//$a27->visualInspection();
//$a27->hydraulicControl();
//$a27->speed();
//$a27->capacity();
//
//21. PHP . Уровни(модификаторы) доступа: private, protected, public
//
//ЗАДАНИЕ:
//1. своими словами привести примеры, когда нам следует использовать private, protected, public
//private -следует использовать, если мы хотим сделать какое - то свойство или метод недоступным из вне .
//Например, если в методе был какое - то расчет, который нужен для расчета другого метода, но в дальнейшем он нам больше не нужен,
//то этот метод можно сделать приватным .
//
//protected -Методы и свойства, которые не могут быть доступны из объекта, реализующего класс, но вполне может быть использовано
// в дочерних классах .
//Например, если в дочерний класс нужно перенести какую - то информацию, без создания объекта, тогда можно применить этот моификатор .
//
//public -методы и свойства доступны из любой части программы .
//Например, этот метод очень нужен в интервейсах, чтобы методы были доступны .