 
 <?php
 echo '<h1>' . " Q group 1" . '</h1>';
?>
 <?php 
 echo '<h3>'." Q1". '</h3>';
 echo '<h3>' . " a. " . strtoupper("hello world") . '</h3>';
echo '<h3>'. " b. " . strtolower("Hello World") .'</h3>';
echo '<h3>'." c. " . ucfirst("hello world").'</h3>';
echo '<h3>'." c. " . ucwords("hello world").'</h3>';
echo '<h3>'." .................................". '</h3>';
 ?>
 <?php
 echo '<h3>'." Q2 ".'</h3>';
 $numdate="3081998";
 $year=substr($numdate,3,4);
 $month= substr($numdate,2,1);
 $day=substr($numdate,0,2);
 $date=$day .' '. $month.' '. $year;
 echo "Date:".$date;
 echo '<h3>'." .................................". '</h3>';
 ?>

<?php
 echo '<h3>'." Q3 ".'</h3>';
$str="My name is fajer";
$text="fajer";
if(strpos($str,$text)!==false){
    echo "$text exists in the string.";
}
else {
    echo "The text does not exist in the string.";}
    echo '<h3>'." .................................". '</h3>';
?>

<?php
 echo '<h3>'." Q4 ".'</h3>';
$url="https://www.youtube.com/watch?v=KKPA9KBA-mQ";
$path=parse_url($url,PHP_URL_PATH);
$film_name=basename($path);
echo "film name : " .$film_name;
    echo '<h3>'." .................................". '</h3>';
?>

<?php
 echo '<h3>'." Q5".'</h3>';
$email='Fajer@gmail.com';
$username=strstr($email,'@',true);
echo $username;
 echo '<h3>'." .................................". '</h3>';
 ?>
 
 <?php
  echo '<h3>'." Q6".'</h3>';
$string="hello fajer";
$last=substr($string,-3);
echo "last three charactars:".$last;
  echo '<h3>'." .................................". '</h3>';
  ?>

<?php
  echo '<h3>'." Q7".'</h3>';
$string="fajer@#$123456781011abbadi";
$shuffled_string=str_shuffle($string);
$random_pass=substr($shuffled_string,0,8);
echo "Random Password: " . $random_pass;
 echo '<h3>'." .................................". '</h3>';
  ?>

<?php
  echo '<h3>'." Q8".'</h3>';
$original_sent="Hello World";
$new_word="Fajer";
$words=explode(' ',$original_sent);
$words[0]=$new_word;
$new_sent = implode(' ',$words);
echo  $new_sent;
 echo '<h3>'." .................................". '</h3>';
  ?>

<?php
echo '<h3>' . " Q9 " . '</h3>';

$str1 = 'Fajer';
$str2 = 'Fajir';
$length = min(strlen($str1), strlen($str2)); 

for ($i = 0; $i < $length; $i++) {
    if ($str1[$i] !== $str2[$i]) {
        echo "The first different character is found at position $i: '$str1[$i]' vs '$str2[$i]'";
        break;
    }
}
if ($i === $length && strlen($str1) !== strlen($str2)) {
    echo "The strings differ in length after position $length.";
}

echo '<h3>' . " ................................." . '</h3>';
?>

<!-- بدنا نحط سترينغ جوا ارري ونعرض باستخدام الفار -->
  
<?php
echo '<h3>' . " Q10 " . '</h3>';
$string="hi, my name is fajer";
$array=str_split($string);
echo '<h4>'."array with var_dump()".'</h4>';
echo '<pre>';var_dump($array);
echo'</pre>';

echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q11 " . '</h3>';

$ch = 'a'; 
$next_ch = ++$ch;

if (strlen($next_ch) > 1) {
    $next_ch = $next_ch[0];
}

echo " $next_ch";
 
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q12 " . '</h3>';

$originalString = "good morning ";
$stringToInsert = "All ";
$position = 13;

$newString = substr_replace($originalString, $stringToInsert, $position, 0);

echo $newString;

echo '<h3>' . " ................................." . '</h3>';
?>


<?php
echo '<h3>' . " Q13" . '</h3>';
$number = 105040700;
$numWoutZeroes = str_replace('0', '', $number);
echo "$numWoutZeroes";
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q14" . '</h3>';
$originalString = "Hello,good morning";
$start = 5; 
$length = 8; 
$newString = substr_replace($originalString, '', $start, $length);

echo " $originalString<br>";
echo "String after removal: $newString";

echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q15" . '</h3>';
$string = "Hello World----";
$removeString = rtrim($string, '-');
echo "Original string: $string<br>";
echo " $removeString";
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q16" . '</h3>';
$string = "Hello!#%&.";
$removeString = preg_replace('/[^\p{L}\p{N}\s]/u', '', $string);
echo "Original string: $string<br>";
echo " $removeString";
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q17" . '</h3>';
$string = "good morning teacher ,how are you";
$words = explode(' ', $string); 
$first_five_words = implode(' ', array_slice($words, 0, 4));
echo $first_five_words;
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q18" . '</h3>';
$numericString = "8,768,943.35";
$cleanedString = str_replace(',', '', $numericString);
echo "Original string: $numericString<br>";
echo " $cleanedString";
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q19" . '</h3>';
$letters = range('a', 'z'); 
echo implode(' ', $letters); 

echo '<h3>' . " ........................................................................." . '</h3>';
?>

<?php
 echo '<h1>' . " Q group 2" . '</h1>';
?>


<?php
echo '<h3>' . " Q1" . '</h3>';
$year = 2024;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q2" . '</h3>';
$temperature = 18;
if ($temperature < 20) {
    echo "we are in winter";
} else {
    echo "the season is summer";}

echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q3" . '</h3>';
$num1 = 3;
$num2 = 3; 

$sum = $num1 + $num2; 
if ($num1 == $num2) {
    $sum *= 3;
}

echo " $sum"; 
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q4" . '</h3>';
function checkSumEquals30($num1, $num2) {
    $sum = $num1 + $num2;
    if ($sum == 30) {
        return $sum;
    } else {
        return false;
    }
}
$result1 = checkSumEquals30(10, 20);
echo "result: " . ($result1 !== false ? $result1 : 'false') . "<br>";

echo '<h3>' . " ................................." . '</h3>';
?>

<!-- التحقق من الرقم اذا كان من مضاعفات ال3 -->
<?php
echo '<h3>' . " Q5" . '</h3>';
function isMultipleOf3($number) {
    if ($number > 0 && $number % 3 == 0);
}
$number = 9; 
if (isMultipleOf3($number)) {
    echo "$number is a multiple of 3.<br>";
} else {
    echo "$number is not a multiple of 3.<br>";
}
echo '<h3>' . " ................................." . '</h3>';
?>
   
 
<?php
echo '<h3>' . " Q6" . '</h3>';

function isInRange($number) {
    return ($number >= 20 && $number <= 50);
}
$number = 49; 

if (isInRange($number)) {
    echo "$number is in the range of 20 to 50.<br>";
} else {
    echo "$number is not in the range of 20 to 50.<br>";
}
echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo '<h3>' . " Q7" . '</h3>';
$num1 = 8;
$num2 = 40;
$num3 = 20;

$largest = max($num1, $num2, $num3);

echo " $largest<br>";

echo '<h3>' . " ................................." . '</h3>';
?>


<?php
echo '<h3>' . " Q8" . '</h3>';

function calculat($units) {
    $rate1 = 2.50;
    $rate2 = 5.00;
    $rate3 = 6.20;
    $rate4 = 7.50;
    
    if ($units <= 50) {
        return $units * $rate1;
    } 
    
    if ($units <= 150) {
        return (50 * $rate1) + (($units - 50) * $rate2);
    } 
    
    if ($units <= 250) {
        return (50 * $rate1) + (100 * $rate2) + (($units - 150) * $rate3);
    } 
    
    return (50 * $rate1) + (100 * $rate2) + (100 * $rate3) + (($units - 250) * $rate4);
}

$units = 275;
$bill = calculat($units);
echo " " . number_format($bill, 2) . " JOD<br>";


echo '<h3>' . " ................................." . '</h3>';
?>


<?php
echo '<h3>' . " Q9" . '</h3>';
function calc($num1, $num2, $operation) {
    if ($operation == 'add') {
        return $num1 + $num2;
    } elseif ($operation == 'subtract') {
        return $num1 - $num2;
    } elseif ($operation == 'multiply') {
        return $num1 * $num2;
    } elseif ($operation == 'divide') {
        if ($num2 == 0) {
            return "Error: Division by zero";
        }
        return $num1 / $num2;
    } else {
        return "Error: Invalid operation";
    }
}

$num1 = 10;
$num2 = 5;
$operation = 'add'; 

$result = calc($num1, $num2, $operation);
echo "Result: $result";

echo '<h3>' . " ................................." . '</h3>';
?>
?>
/



<?php
echo '<h3>' . " Q10" . '</h3>';


function eligibility($age) { 
    if ($age < 18) {
        return false; 
    } else { 
        return true; 
    }
}

$age = 20;

if (eligibility($age)) {
    echo "You can "; 
} else { 
    echo "You can"; 
}
echo '<h3>' . " ................................." . '</h3>';

?>





<?php
echo '<h3>' . " Q11" . '</h3>';

function checknum($number){
    if ($number > 0) {
        echo " $number is positive";
    }
    elseif ($number < 0) { 
        echo " $number is negative";
    }
    else { 
        echo "$number is zero.";
    }
}

$number = 10;
checknum($number);

echo '<h3>' . " ................................." . '</h3>';
?>



<?php
echo '<h3>' . " Q12" . '</h3>';

function grade( $average ){ 
    if ($average >= 90) {
        echo 'A';
    } elseif ($average >= 80) {
        echo 'B';
    } elseif ($average >= 70) {
        echo 'C';
    } elseif ($average >= 60) {
        echo 'D';
    } else {
        echo 'F'; 
    }
}
$average=64;
grade( $average );



echo '<h3>' . " ................................." . '</h3>';
?>


<?php
 echo '<h1>' . " Q group 3" . '</h1>';
?>

<?php
echo '<h3>' . " Q1" . '</h3>';
for ($i=1 ; $i<=10 ; $i++){
    if($i<10){
        echo $i ." - " ;
    }
    else{
        echo $i;
    }
    
}
echo '<h3>' . " ................................." . '</h3>';
?>



<?php
echo '<h3>' . " Q2" . '</h3>';
$sum = 0;
for ($i=1 ; $i<=30 ; $i++){
    $sum+=$i;
}
echo $sum;

echo '<h3>' . " ................................." . '</h3>';
?>

<?php
echo "<br>";
echo "<br>";

$n = 5;


for ($i = 0; $i < $n; $i++) {

    for ($j = 0; $j < $n; $j++) {
        if ($j < $n - $i - 1) {
            echo 'A ';
        } else {
            echo chr(65 + $i) . ' ';
        }
    }

    echo "<br>";
}


?>

echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q4" . '</h3>';

$letters = ['1', '2', '3', '4', '5'];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo $letters[$i] . ' ';
    }
    
    
    
    echo '<br>';
}

echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q5" . '</h3>';

$letters = ['0', '1', '2', '3', '4','5'];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo $letters[$i] . ' ';
    }
    
   
    
    echo '<br>';
}

echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q6" . '</h3>';

$number = 8;

$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "  $number is $factorial.";

echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q7" . '</h3>';

$number = 9; 
$a = 0;
$b = 1;

echo $a . ' ';
echo $b . ' ';

for ($i = 2; $i < $number; $i++) {
    $c = $a + $b;
    echo $c . ' ';
    $a = $b;
    $b = $c;
}

echo '<h3>' . ".................................." . '</h3>';
?>

<?php
echo '<h3>' . "Q8" . '</h3>';

$text = "Orange Coding Academy";
$char = 'c';
$count = 0;
$text = strtolower($text);
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $char ) {
        $count++;
    }
}
echo " $char  appears $count ";
echo '<h3>' . ".................................." . '</h3>';

?>

<?php
echo '<h3>' . "Q9" . '</h3>';

echo '<table cellpadding="3px" cellspacing="0px" border="1">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<h3>' . ".................................." . '</h3>';
?>


<?php
echo '<h3>' . "Q10" . '</h3>';
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . ' ';
    }
}


echo '<h3>' . ".................................." . '</h3>';
?>



<?php
echo '<h3>' . "Q11" . '</h3>';

function generateFloydTriangle($n) {
    $num = 1; 
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . ' ';
            $num++;
        }
        echo '<br>'; 
    }
}
$n = 5;
generateFloydTriangle($n);
echo '<h3>' . ".................................." . '</h3>';

?>


<?php
echo '<h3>' . "Q12" . '</h3>';

echo '<h3>' . ".................................." . '</h3>';

?>

<?php
 echo '<h1>' . " Q group 4" . '</h1>';
 ?>

<?php
 echo '<h3>' . " Q1" . '</h3>';

function checkPrime($I) {
    if ($I <= 1) {
        return "$I is not Prime";
    }
    for ($i = 2; $i <= sqrt($I); $i++) { 
        if ($I % $i == 0) {
            return "$I is not Prime";
        }
    }
    return "$I is Prime";
}

echo checkPrime(2) . "<br>";
echo '<h3>' . ".................................." . '</h3>';

?>

<?php
 echo '<h3>' . " Q2" . '</h3>';
 echo strrev("remove") . "<br>";
 echo '<h3>' . ".................................." . '</h3>';
 ?>


<?php
 echo '<h3>' . " Q3" . '</h3>';
 function checkallStringLower($r){
     if ($r === strtolower($r)) {
         return "Your String Is OK" . "<br>";
     }else{
         
         return "Your String Is Not OK" . "<br>";
     }
 }
 echo checkallStringLower("remove") . "<br>";

 echo '<h3>' . ".................................." . '</h3>';
 ?>   


<?php
 echo '<h3>' . " Q4 & Q5" . '</h3>';

 function swap(&$x,&$y){
	$z = $x;
	$x = $y;
	$y = $z;

	
}

$q = 10 ;
$w = 5 ;

echo "the q = $q , and the w = $w" . "<br>";
swap($q,$w);
echo "the new q = $q , and the new w = $w" . "<br>";
 echo '<h3>' . ".................................." . '</h3>';
 ?>  


<?php
 echo '<h3>' . "Q6" . '</h3>';

 function checkArmestrong($n){
	$sum =0;
	$numst = str_split((string) $n);
	for ($i=0; $i <count($numst) ; $i++) { 
		$sum += (int) $numst[$i]  ** count($numst);
	}
	return $sum;

}

echo checkArmestrong(407);
echo "<br>";
 echo '<h3>' . ".................................." . '</h3>';
 ?>  


<?php
 echo '<h3>' . "Q7" . '</h3>';
 function checkPalindoram($str){
	if($str == strrev($str)){
		echo "it is a Palindoram" . "<br>";
	}else{
		echo "it is NOt Palindoram" . "<br>";

	}
}

checkPalindoram("madam");

 echo '<h3>' . ".................................." . '</h3>';
 ?>  


<?php
 echo '<h3>' . "Q8" . '</h3>';
 echo "<pre>";
 print_r(array(2,4,7,4,8,4));
 echo "</pre>";
 echo "<br>";
 echo "<pre>";
 print_r(array_unique(array(2,4,7,4,8,4)));
 echo "</pre>";

 echo '<h3>' . ".................................." . '</h3>';
 ?> 


<?php
echo '<h1>' . "The End" . '</h1>';
?> 