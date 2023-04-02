// 1. Создайте переменную $string и присвойте ей значение "Привет, мир!".

$string = 'Hello, world';
echo ($string);


// 2. Создайте переменные $str1 и $str2 и склейте их вместе с помощью оператора ".".

$str1 = 'Hot';
$str2 = 'dog';
echo $str1 . $str2;


// 3. Извлеките символы "w" и "o" из строки "Hello World!".

$str = 'Hello World';
$letterW = 'w';
$letterO = 'o';
$str = str_replace([$letterW, $letterO], '', $str);
echo $str;


// 4. Проверьте, содержит ли строка "Hello World!" подстроку "World".

function find($str, $subStr) {
    $searchCycle = strpos($str, $subStr);
    if ($searchCycle === false) {
        return 'substring {$subStr} not found';
    } else {
        return 'true';
    }
}
$str = 'Hello World';
$subStr = 'World';
echo find($str, $subStr);


// 5. Замените все вхождения подстроки "world" на "everyone" в строке "Hello world!".

$str = 'Hello world!';
$str = str_replace('world', 'everyone', $str);
echo $str;


// 6. Удалите все HTML-теги из строки "<p>Hello, <b>world</b>!</p>".

$str = '<p>Hello, <b>world</b>!</p>';
$str = strip_tags($str);
echo $str;


// 7. Преобразуйте строку "HeLLo, WorLd!" к нижнему регистру.

$str = 'HeLLo, WorLd!';
echo strtolower ($str);


// 8. Разбейте строку "apple,orange,banana" на массив из трех элементов.

$str = 'apple,orange,banana';
$arr = explode (',', $str);
print_r ($arr);




// 1. Создайте массив из 5 элементов и выведите на экран второй элемент.

$arr = array(1 => 'tea', 2 => 'coffee', 3 => 'juice', 4 => 'milk', 5 => 'lemonade');
echo $arr[1];


// 2. Создайте массив чисел от 1 до 10, найдите сумму элементов массива и выведите на экран используя функцию array_sum;

$arr = [1,2, 3, 4, 5, 6, 7, 8, 9, 10];
$summary = array_sum($arr);
echo $summary;


// 3. Задача: Создайте массив строк, отсортируйте его в алфавитном порядке и выведите на экран.

$arr = ['orange', 'apple', 'peach', 'milk', 'banana', 'coffe'];
sort($arr);
print_r($arr);


// 4. Создайте двумерный массив и выведите на экран элемент, расположенный во втором ряду и третьем столбце.

// 5. Создайте ассоциативный массив, где ключами будут названия фруктов, а значениями - их цена в рублях за килограмм. Выведите на экран цену апельсинов.

$fruits = array("orange" => 50, "banana" => 60, "apple" => 70);
echo 'Orange price: ' . $fruits["orange"];


// 6. Напишите функцию, которая принимает ассоциативный массив и ключ, и возвращает значение, связанное с этим ключом, если ключ существует, и null в противном случае.

function keyVerification($arr, $key) {
    if (array_key_exists($key, $arr)) {
        return $arr[$key];
    } else {
        return null;
    }
}

$arr = array(1 => 'tea', 2 => 'coffee', 3 => 'juice', 4 => 'milk', 5 => 'lemonade');
$check = keyVerification($arr, 3);
echo $check;
