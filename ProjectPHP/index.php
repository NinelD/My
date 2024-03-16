<?php

//Тема3. Переменные в PHP
//ЗАДАНИЕ:
//1. самостоятельно создать минимум 3 "персонажа" по примеру в видео (мама\папа\брат\муж\собака и тд)

//$name = 'Ninel';
//$age = 23;
//$height = 179.5;
//$likeFood = 'Sushi';
//$name2 = 'Diana';
//$age2 = 26;
//$height2 = 175.5;
//$isFriendNinel2 = true;
//$likeFood2 = 'chocolate';
//$name3 = 'Valentina';
//$age3 = 60;
//$height3 = 176.8;
//$isFriendNinel3 = false;
//$likeFood3 = 'potato';
//$name4 = 'Dima';
//$age4 = 34;
//$height4 = 185.5;
//$isFriendNinel4 = false;
//$likeFood4 = 'pizza';

//echo $name;
//echo $age;
//echo $height;
//echo $likeFood . "\n";
//echo $name2;
//echo $age2;
//echo $height2;
//echo $isFriendNinel2;
//echo $likeFood2  . "\n";
//echo $name3;
//echo $age3;
//echo $height3;
//echo $isFriendNinel3;
//echo $likeFood3  . "\n";
//echo $name4;
//echo $age4;
//echo $height4;
//echo $isFriendNinel4;
//echo$likeFood4;

//Тема 4. Массивы//
//ЗАДАНИЕ:
//1. создать новые 3-4 массива с вашими персонажами

//$person1 = [
//    'name'=>'Ninel',
//    'age' => 23,
//    'height' => 179.5,
//    'likeFood'=>'Sushi'];
//
//$person2 = [
//    'name' => 'Diana',
//    'age' => 26,
//    'height' => 175.5,
//    'isFriendNinel' => true,
//    'likeFood'=> 'chocolate'
//];
//
//$person3 = [
//    'name'=> 'Valentina',
//    'age' => 60,
//    'height' => 176.8,
//    'isFriendNinel' => false,
//    'likeFood' => 'potato'
//];
//
//$person4 = [
//    'name' => 'Dima',
//    'age' => 34,
//    'height' => 185.5,
//    'isFriendNinel' => false,
//    'likeFood' => 'pizza'
//];

//print_r($person1);
//print_r($person2);
//print_r($person3);
//print_r($person4);

// тема 5. Цикличный оператор//

//foreach ($person1 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person2 as $key => $item2) {
//    echo $key . ': ';
//    echo $item2 . "\n";
//}
//foreach ($person3 as $key => $item3) {
//    echo $key . ': ';
//    echo $item3 . "\n";
//}
//foreach ($person4 as $key => $item4) {
//    echo $key . ': ';
//    echo $item4 . "\n";
//}

// тема6. Многомерные массивы//
//ЗАДАНИЕ:
// 1. создать массив из минимум 5 персонажей
// 2. вывести их любимое животное\имена

//$persons = [
//    ['name' => 'Dima',
//        'age' => 34,
//        'pet' => 'cat',
//        'namePet' => 'Lui'
//    ],
//    ['name' => 'Vika',
//        'age' => 20,
//        'pet' => 'dog',
//        'namePet' => 'Bobo'
//    ],
//    ['name' => 'Liza',
//        'age' => 28,
//        'pet' => 'parrot',
//        'namePet' => 'Gosha'
//    ],
//    ['name' => 'Misha',
//        'age' => 30,
//        'pet' => 'mouse',
//        'namePet' => 'Pupi'
//    ],
//    ['name' => 'Roma',
//        'age' => 41,
//        'pet' => 'rat',
//        'namePet' => 'Fedya'
//    ]
//    ];

//    foreach ($persons as $item) {
//        print_r($item);
//        print_r($item ['pet'] . ' ' . $item ['namePet'] . "\n");
//    }

//Тема 7. Условный оператор в PHP
//ЗАДАНИЕ:
//1. вывести имена женатых людей
//P.S. вывести имена людей являющимися друзьями Нинель
//$personsFriend = [
//    [
//    'name'=>'Ninel',
//    'age' => 23,
//    'height' => 179.5,
//        'isFriendNinel' => true,
//    'likeFood'=>'Sushi'],
//    [
//    'name' => 'Diana',
//    'age' => 26,
//    'height' => 175.5,
//    'isFriendNinel' => true,
//    'likeFood'=> 'chocolate'],
//    [
//    'name'=> 'Valentina',
//    'age' => 60,
//    'height' => 176.8,
//    'isFriendNinel' => false,
//    'likeFood' => 'potato'],
//    [
//    'name' => 'Dima',
//    'age' => 34,
//    'height' => 185.5,
//    'isFriendNinel' => false,
//    'likeFood' => 'pizza']
//];
//    foreach ($personsFriend  as $personsReallyFriend) {
//            if ($personsReallyFriend ['isFriendNinel']) {
//                print_r ($personsReallyFriend ['name'] .' '.'является другом Нинель' . "\n");}
//            else {
//                print_r ($personsReallyFriend ['name'] . ' ' .'Не является другом Нинель' . "\n");}
//    }

    // тема 8. Операторы сравнения
// Задание. Придумать 20 случаев сравнения

//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] <= 30) {
//        echo ($personsLesson8 ['name'] .' '.'до 30 лет' . "\n");}
//  }
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] >= 30) {
//        echo($personsLesson8 ['name'] . ' ' . 'больше 30 лет' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] >= 30 && $personsLesson8 ['height'] >= 180) {
//        echo($personsLesson8 ['name'] . ' ' . 'Правда' . "\n");}
//    else {
//        echo($personsLesson8 ['name'] . ' ' . 'Ложь' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] == 23 && $personsLesson8 ['height'] >= 179) {
//        echo($personsLesson8 ['name'] . ' ' . 'Правда' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['name'] == 'Diana' || $personsLesson8 ['likeFood'] == 'pizza') {
//        echo($personsLesson8 ['name'] . ' ' . 'Правда' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['name'] == 'Diana' && $personsLesson8 ['isFriendNinel'] ) {
//        echo($personsLesson8 ['name'] . ' ' . 'Хороший человек' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'Редиска' . "\n");
//    }
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['height'] >= 180  ) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");
//      }
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['height'] >= 180 && $personsLesson8 ['age'] <60 && $personsLesson8 ['likeFood'] == 'pizza') {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['height'] <= 180 && $personsLesson8 ['age'] <60) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['height'] !== 185.5 && $personsLesson8 ['age'] <60) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['likeFood'] === 'Sushi' && $personsLesson8 ['age'] <60) {
//        echo($personsLesson8 ['name'] . ' ' . 'Любит суши' . "\n");}
//   }
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['likeFood'] === 'Sushi' || $personsLesson8 ['age'] <60) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['likeFood'] !== 'Sushi' || $personsLesson8 ['age'] >= 60) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['likeFood'] === 'Salat' || $personsLesson8 ['likeFood'] === 'potato') {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] == '26' || $personsLesson8 ['likeFood'] == 'chocolate') {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] >= 26) {
//        echo($personsLesson8 ['name'] . ' ' . 'Старичок' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'Не старичок' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] >= 26 && $personsLesson8 ['height'] > 180) {
//        echo($personsLesson8 ['name'] . ' ' . 'Высокий старичок' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'Не старичок' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] >= 26 && $personsLesson8 ['height'] <= 180 || $personsLesson8 ['isFriendNinel']) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['age'] <> 60 && $personsLesson8 ['age'] != 23) {
//        echo($personsLesson8 ['name'] . ' '. 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}
//
//foreach ($personsFriend  as $personsLesson8) {
//    if ($personsLesson8 ['name'] === 'Dima' || $personsLesson8 ['height'] >=185.5 ) {
//        echo($personsLesson8 ['name'] . ' ' . 'Yes' . "\n");}
//    else {
//        echo ($personsLesson8 ['name'] . ' ' . 'No' . "\n");}
//}

// тема 9. Функции PHP
//ЗАДАНИЕ:
//создать 3 функции: вычитание, умножение, деление

//function subtractionT9 () {
//    $x = 2451;
//    $y = 274;
//    $subtraction = $x - $y;
//    echo $subtraction;
//}
//subtractionT9();

//function multiplyT9 () {
//    $x = 80;
//    $y = 3.2311;
//    $multiply = $x * $y;
//    echo $multiply;
//}
//multiplyT9();

//function divisionT9 () {
//    $x = 1800;
//    $y = 215;
//    $division = $x/$y;
//    echo $division;
//}
//divisionT9();

// тема 10. Аргументы функции в PHP
//ЗАДАНИЕ:
//1. придумать 8 математических функций с аргументами
//2. вызвать эти функции с аргументами и получить результат

//function solveEquation1($a,$b) {
//    $equation1 = 2*$a + $b**2 - 8;
//    echo 'Результат решения = ' . $equation1 . "\n";
//}
//solveEquation1(8,12);
//
//function solveEquation2($a,$b,$c) {
//    $equation2 = sqrt($a)+pow($b,2) / $c;
//    echo 'Результат решения = ' . $equation2 . "\n";
//}
//solveEquation2(144,12,2);
//
//function solveEquation3($a,$b,$c) {
//    $equation3 = sqrt($a)+ $b/ $c;
//    echo 'Результат решения = ' . ceil ($equation3) . "\n";
//}
//solveEquation3 (144,25.83,2);
//
//function solveEquation4($a,$b,$c) {
//    $equation4 = sqrt($a)+ $b/ $c;
//    echo 'Результат решения = ' . floor ($equation4) . "\n";
//}
//solveEquation4 (144,25.83,1.2345);
//
//function solveEquation5($a,$b,$c) {
//    $equation5 = sqrt($a)+ $b/ $c;
//    echo 'Результат решения = ' . round($equation5,4) . "\n";
//}
//solveEquation5 (144,25.83,1.2345);
//
//function solveEquation6($a,$b) {
//    $equation6 = $a - $b*$a;
//    echo 'Результат решения = ' . round($equation6,4) . "\n";
//}
//solveEquation6 (3.2105,25.83);
//
//function solveEquation7($a,$b) {
//    $equation7 = $a/$b/$a;
//    echo 'Результат решения = ' . round($equation7,4) . "\n";
//}
//solveEquation7 (3.21,25.83);
//
//function getSumOfCos ($x, $y) {
//    $cosX = cos($x);
//    $sinY = sin($y);
//    $getSumOfCos = $cosX + $sinY;
//    echo 'Результат решения = ' . round($getSumOfCos,4);
//}
//getSumOfCos(60, 90);

// тема 11. Возвращаемые функции в PHP
//ЗАДАНИЕ:
//1. все ранее созданные математические функции сделать возвращаемыми
//2. с помощью echo вывести все результаты выполнения этих функций
//
//function solveEquation1($a,$b) {
//    $equation1 = 2*$a + $b**2 - 8;
//    return 'Результат решения = ' . $equation1 . "\n";
//}
//echo solveEquation1(8,12);
//
//function solveEquation2($a,$b,$c) {
//    $equation2 = sqrt($a)+pow($b,2) / $c;
//    return 'Результат решения = ' . $equation2 . "\n";
//}
//echo solveEquation2(144,12,2);
//
//function solveEquation3($a,$b,$c) {
//    $equation3 = sqrt($a)+ $b/ $c;
//    return 'Результат решения = ' . ceil ($equation3) . "\n";
//}
//echo solveEquation3 (144,25.83,2);
//
//function solveEquation4($a,$b,$c) {
//    $equation4 = sqrt($a)+ $b/ $c;
//    return 'Результат решения = ' . floor ($equation4) . "\n";
//}
//echo solveEquation4 (144,25.83,1.2345);
//
//function solveEquation5($a,$b,$c) {
//    $equation5 = sqrt($a)+ $b/ $c;
//    return 'Результат решения = ' . round($equation5,4) . "\n";
//}
//echo solveEquation5 (144,25.83,1.2345);
//
//function solveEquation6($a,$b) {
//    $equation6 = $a - $b*$a;
//    return 'Результат решения = ' . round($equation6,4) . "\n";
//}
//echo solveEquation6 (3.2105,25.83);
//
//function solveEquation7($a,$b) {
//    $equation7 = $a/$b/$a;
//    return 'Результат решения = ' . round($equation7,4) . "\n";
//}
//echo solveEquation7 (3.21,25.83);
//
//function getSumOfCos ($x, $y) {
//    $cosX = cos($x);
//    $sinY = sin($y);
//    $getSumOfCos = $cosX + $sinY;
//    return 'Результат решения = ' . round($getSumOfCos,4);
//}
//echo getSumOfCos(60, 90);