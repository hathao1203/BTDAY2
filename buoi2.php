<!-- 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.-->
<?php
$arr = array(4, 2, 8, 6, 3);
sort($arr);
foreach($arr as $value) {
  echo $value . " ";
}
?>

<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function factorial($n)
{
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$number = 5;
$result = factorial($number);
echo "The factorial of $number is: " . $result;
?>

<!-- 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimeNumbers($start, $end)
{
    $primeNumbers = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primeNumbers[] = $i;
        }
    }
    return $primeNumbers;
}
$start2 = 1;
$end2 = 20;
$primes = findPrimeNumbers($start2, $end2);
echo "Prime numbers between $start2 and $end2 are: ";
foreach ($primes as $prime) {
    echo $prime . ", ";
}
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function sum($arr)
{
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}
$numbers = array(1, 3, 5, 7, 9);
$totalSum = sum($numbers);
echo "The sum of numbers in the array is: " . $totalSum;
?>

<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function isFibonacci($n)
{
    $num1 = 0;
    $num2 = 1;
    echo "The Fibonacci numbers from 0 to " . $n . " are: ";
    echo $num1 . " " . $num2 . " ";
    $num3 = $num1 + $num2;
    while ($num3 <= $n) {
        echo $num3 . " ";
        $num1 = $num2;
        $num2 = $num3;
        $num3 = $num1 + $num2;
    }
}
isFibonacci(100);
?>

<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không -->
<?php
function isArmstrong($number) {
    $total = 0;
    $num = $number;
    $n = strlen($number);

    while ($num != 0) {
        $total += pow($num % 10, $n);
        $num = (int)($num / 10);
    }

    if ($total == $number) {
        echo $number . " is a Armstrong number";
    } else {
        echo $number . " is not a Armstrong number";
    }
}
isArmstrong(153); 
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function insertElement($array, $element, $position)
{
    array_splice($array, $position, 0, array($element));
    return $array;
}
$originalArray = array("1", "5", "4", "3");
$newElement = "7";
$insertPosition = 2;
$resultArray = insertElement($originalArray, $newElement, $insertPosition);
echo "New array: ";
foreach ($resultArray as $item) {
    echo $item . ", ";
}
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
$input_array = array("1", "5", "1", "3", "2");
$unique_array = array_unique($input_array);
echo "New array: ";
foreach ($unique_array as $value) {
    echo $value . " ";
}
?> 

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
$array = array("1", "5", "6", "4");
$position = array_search("6", $array);
echo "The position of 6: " . $position;
?>

<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
$string = "Ha Thi Phuong Thao";
$reversed_string = strrev($string);
echo "The reversed string: " . $reversed_string;
?>

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
$array = array(1, 2, 3, 4, 5);
$count = count($array);
echo "The number of elements: " . $count;
?>

<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function isPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string)); 
    $reversed_str = strrev($str); 
    if ($string === $reversed_str) {
        return true;
    } else {
        return false; 
    }
}
if (isPalindrome("radar")) {
    echo "is Palindrome";
} else {
    echo "Not Palindrome";
}
?>

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
$array = array(1, 2, 2, 3, 4, 2, 5, 2);
$search_element = 2;
$count = 0;
foreach ($array as $element) {
    if ($element == $search_element) {
        $count++;
    }
}
echo "The number of occurrences of the element" . $search_element . " is " . $count;
?>

<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
$arr = array(5, 3, 7, 1, 9);
rsort($arr);
foreach($arr as $value) {
    echo $value . " ";
}
?>

<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
$arr = array("a", "b", "c");
$value = "x";
array_unshift($mang, $value);
foreach($arr as $value) {
    echo $value . " ";
}
?>

<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
$arr = array(5, 3, 9, 7, 11, 6);
rsort($arr);
$max2 = $arr[1];
echo "The second largest number is: " . $max2;
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}
$num1 = 12;
$num2 = 30;
echo "The GCD of $num1 and $num2 is: " . findGCD($num1, $num2) . "<br>";
echo "The LCM of $num1 and $num2 is: " . findLCM($num1, $num2);
?>

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function isSHH($number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$so = 28;
if (isSHH($so)) {
    echo "$so is the perfect number";
} else {
    echo "$so is not the perfect number";
}
?>

<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function findLargestOddNumber($arr)
{
    $largest = null;
    foreach ($arr as $number) {
        if ($number % 2 != 0) {
            if ($largest === null || $number > $largest) {
                $largest = $number;
            }
        }
    }
    return $largest;
}
$arr = array(15, 7, 22, 13, 10, 35);
$largestOdd = findLargestOddNumber($arr);
if ($largestOdd !== null) {
    echo "The largest odd number in the array is: " . $largestOdd;
} else {
    echo "There are no odd numbers in the array.";
}
?>

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    return true;
}
$number2 = 17;
if (isPrime($number2)) {
    echo "$number2 is a prime number";
} else {
    echo "$number2 is not a prime number";
}
?>

<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findMaxPositiveNumber($arr)
{
    $max = null;
    foreach ($arr as $number) {
        if ($number > 0) { // Check if the number is positive
            if ($max === null || $number > $max) {
                $max = $number;
            }
        }
    }
    return $max;
}
$arr = array(15, -7, 22, 13, 10, -35);
$maxpos = findMaxPositiveNumber($arr);
if ($maxpos !== null) {
    echo "The max positive number is: " . $maxpos;
} else {
    echo "There are no positive numbers in the array.";
}
?>

<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findMaxNegativeNumber($arr)
{
    $max = null;
    foreach ($arr as $number) {
        if ($number < 0) { // Check if the number is negative
            if ($max === null || $number > $max) {
                $max = $number;
            }
        }
    }
    return $max;
}
$arr = array(15, -7, -22, 13, -10, -35);
$maxne = findMaxNegativeNumber($arr);
if ($maxne !== null) {
    echo "The max negative number is: " . $maxne;
} else {
    echo "There are no negative numbers in the array.";
}
?>

<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function sumOddNumber($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i; 
        }
    }
    return $sum;
}
$n = 10;
$sumodd = sumOddNumber($n);
echo "The sum of odd numbers from 1 to $n is: " . $sumodd;
?>

<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function findSquareNumber($start, $end)
{
    $squareNumber = array();
    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);
        if ($sqrt == (int)$sqrt) {
            $squareNumbers[] = $i;
        }
    }
    return $squareNumbers;
}
$start2 = 1;
$end2 = 20;
$squareNumber2 = findSquareNumber($start2, $end2);
if (count($squareNumber2) > 0) {
    echo "The square numbers in the range from $start2 to $end2 are: ";
    foreach ($squareNumber2 as $number) {
        echo $number . ", ";
    }
} else {
    echo "There are no square numbers in the range from $start2 to $end2.";
}
?>

<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function isSubstring($mainString, $subString)
{
    if (strpos($mainString, $subString) !== false) {
        return true;
    } else {
        return false;
    }
}
$mainString = "This is the main string";
$subString = "main";
if (isSubstring($mainString, $subString)) {
    echo "'$subString' is a substring of '$mainString'";
} else {
    echo "'$subString' is not a substring of '$mainString'";
}
?>