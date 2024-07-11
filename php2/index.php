<?php
echo '<h3>' . "Q1" . '</h3>';

$colors = ["red", "green", "white"];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at 
that moment: the {$colors[0]} carpet, the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. 
The new president and his first lady. Richard M. Nixon";

echo $paragraph;

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q2" . '</h3>';
$colors= array ('pink','purple','black');
echo "<ul>";
// بنوخد كل عنصر من ارري الكولرز واخزنه بمتغير الكولور 
foreach ($colors as $color ){
    echo "<li>{$color}</li>";
}
echo "</ul>";
echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q3" . '</h3>';
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
 "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
 "Spain"=>"Madrid" ); 
 asort($cities);
 echo "<ul>";
 foreach ($cities as $country=>$capital){
    echo "<li> the capital of {$country} is {$capital}</li>";
 }
 
 echo "</ul>";
echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q4" . '</h3>';
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);
echo '<h3>' . ".................................." . '</h3>';
?>

<?php
echo '<h3>' . "Q5" . '</h3>';

$array = array(1, 2 , 3 , 4 ,5);
$newItem = '$';
$position = 3;
array_splice($array, $position, 0, $newItem);

echo implode(' ', $array);

echo '<h3>' . ".................................." . '</h3>';
?>

<?php
echo '<h3>' . "Q6" . '</h3>';
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

asort($fruits);

foreach ($fruits as $key => $value) {
    echo "{$key} = {$value}<br>";
}

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q10" . '</h3>';
$temperatures = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);

$average = array_sum($temperatures) / count($temperatures);

$unique_temperatures = array_unique($temperatures);

sort($unique_temperatures);
$lowest_temperatures = array_slice($unique_temperatures, 0, 5);

rsort($unique_temperatures);
$highest_temperatures = array_slice($unique_temperatures, 0, 5);

echo "Average Temperature is: " . number_format($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest_temperatures) . "<br>";

echo '<h3>' . ".................................." . '</h3>';
?>


<?php

echo '<h3>' . "Q8" . '</h3>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$merged_array = array_merge($array1, $array2);
echo '<pre>';
print_r($merged_array);
echo '</pre>';
echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q9" . '</h3>';
$colors = array("red", "blue", "white", "yellow");

$upperColors = array_map('strtoupper', $colors);

foreach ($upperColors as $color) {
    echo "$color <br>"; 
}

echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q10" . '</h3>';
$colors = array("red", "blue", "white", "yellow");

$lowerColors = array_map('strtolower', $colors);

foreach ($lowerColors as $color) {
    echo "$color <br>"; 
}

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q11" . '</h3>';

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo "$i, "; 
    }
}
echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q12" . '</h3>';
 $words = array("abcd","abc","de","hjjj","g","wer");
 $shortestLength = strlen($words[0]);
 $longestLength = strlen($words[0]);
 for ($i = 1; $i < count($words); $i++) {
    $length = strlen($words[$i]); 

    if ($length < $shortestLength) {
        $shortestLength = $length;
    }
    if ($length > $longestLength) {
        $longestLength = $length;
    }
}
echo "The shortest array length is " . $shortestLength . ". ";
echo "The shortest array length is " . $longestLength . ". ";

echo '<h3>' . ".................................." . '</h3>';
?>

<?php
echo '<h3>' . "Q13" . '</h3>';
$min = 11;
$max = 20;
$count = 10;

$numbers = range($min, $max);

shuffle($numbers);

$randomNumbers = array_slice($numbers, 0, $count);

echo implode(' ', $randomNumbers);

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q14" . '</h3>';
$array1 = array(2, 0, 10, 12, 6);

$lowest = PHP_INT_MAX;
foreach ($array1 as $value) {
    if ($value != 0 && $value < $lowest) {
        $lowest = $value;
    }
}
echo "The lowest integer in the array that is not 0 is: " . $lowest;

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q15" . '</h3>';

$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

function bubbleSortDescending(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

bubbleSortDescending($array);
echo "Sorted Array: ";
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q16" . '</h3>';

function customFloor($number, $precision = 0, $separator = '.') {
    $factor = pow(10, $precision);
    $flooredNumber = floor($number * $factor) / $factor;
    return number_format($flooredNumber, $precision, $separator, '');
}

$sampleData = [
    [1.155, 2, "."],
    [100.25781, 4, "."],
    [-2.9636, 3, "."]
];

foreach ($sampleData as $data) {
    echo "Input: {$data[0]}, {$data[1]}, \"{$data[2]}\"<br>";
    echo "Output: " . customFloor($data[0], $data[1], $data[2]) . "<br>";
}

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . " Q17" . '</h3>';

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$array1 = array_map('trim', explode(',', $list1));
$array2 = array_map('trim', explode(',', $list2));

$mergedArray = array_merge($array1, $array2);

$uniqueArray = array_unique($mergedArray);

$result = implode(', ', $uniqueArray);

echo "Merged list with unique values: $result";
echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q18" . '</h3>';

function removeDuplicates($input) {
    $array = array_map('trim', explode(',', $input));
    
    $uniqueArray = array_unique($array);
    
    $result = implode(', ', $uniqueArray);
    
    return $result;
}

$input = "4, 5, 6, 7, 4, 7, 8";

$output = removeDuplicates($input);
echo "Original array: $input<br>";
echo "Array after removing duplicates: $output";
echo '<h3>' . ".................................." . '</h3>';
?>

<?php
echo '<h3>' . "Q19" . '</h3>';

function isSubset($array1, $array2) {
    $diff = array_diff($array2, $array1);
    
    if (empty($diff)) {
        return true;
    } else {
        return false;
    }
}

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

if (isSubset($array1, $array2)) {
    echo "array2 is a subset of array1";
} else {
    echo "array2 is not a subset of array1";
}

echo '<h3>' . ".................................." . '</h3>';
?>
