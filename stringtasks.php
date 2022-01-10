<?php

echo "<h1>Task1</h1>";

$string1="haneen edinat";
 
echo strtoupper($string1);
echo "<br>";

$string2="HANEEN EDINAT";
echo "<br>";
echo strtolower($string2);
echo "<br>";
echo ucfirst($string1);
echo "<br>";

echo ucwords($string1);
echo "<br>";

echo "---------------------------------------------------------------------------------------";

echo "<h1>Task2</h1>";

$input = '085119';
echo $input;
echo "<br>";
$date = strtotime($input);
echo date(' H:i:s', $date);
echo "<br>";


echo "---------------------------------------------------------------------------------------";

echo "<h1>Task3</h1>";


$string="I am a full stack developer at orange coding academy";


if(strpos($string, "orange")){
    echo "Word Found";
}

else {
    echo "Word not Found";
}

echo "<br>";


echo "---------------------------------------------------------------------------------------";


echo "<h1>Task4</h1>";


$string="www.orange.com/index.php";
echo $string;
echo "<br>";
echo  basename($string);

echo "<br>";


echo "---------------------------------------------------------------------------------------";


echo "<h1>Task5</h1>";

$email="haneen.aledinat@gmail.com";
echo $email;
echo "<br>";
echo  strstr($email, '@', true);

echo "<br>";


echo "---------------------------------------------------------------------------------------";


echo "<h1>Task6</h1>";

$email="haneen.aledinat@gmail.com";
echo $email;
echo "<br>";

echo substr($email,-3);

echo "<br>";


echo "---------------------------------------------------------------------------------------";

echo "<h1>Task7</h1>";


$string="1234567890ABCDEFGHIJKLMNOPQRSTUVWYZabcefghijklmnopqrstuvwxyz";

$string2= str_shuffle($string);

echo substr($string2,0,9);
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task8</h1>";

$string="That new trainee is so genius";
echo $string;
echo "<br>";
echo str_replace("That","Our",$string);

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task9</h1>";

$srting1="dragonball";
$srting2="dragonboll";

// echo strcmp($string1,$string2);

echo "<br>";

if (strcmp($string1, $string2) !== 0) {
    echo 'First difference between two strings at position 7: "a" vs "o"';
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task10</h1>";
$string = array("Twinkle", "twinkle", "little star.");
echo var_dump($string);
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task11</h1>";
$string = 'a';
echo ++$string; 

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task12</h1>";
$string1="The brown fox";
$string2 = 'quick ';

echo substr_replace( $string1, $string2, 4, 0 );

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task13</h1>";
$string="0000657022.24";
echo $string;
echo "<br>";
echo trim($string, "0000");
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task14</h1>";
$string="The quick brown fox jumps over the lazy dog";
echo $string;
echo "<br>";
echo str_replace( "fox","",$string);
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task15</h1>";
$string="The quick brown fox jumps over the lazy dog--";
echo $string;
echo "<br>";
echo  trim($string, "--");
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task16</h1>";
$string="\'\'1+2/3*2:2-3/4*3";
echo $string;
echo "<br>";
$result  = preg_replace('/[^a-zA-Z0-9]/s','',$string); 
echo $result;
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task17</h1>";
$string="The quick brown fox jumps over the lazy dog";
echo $string;
echo "<br>";
echo implode(' ', array_slice(explode(' ', $string), 0, 5));
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task18</h1>";
$string="2,543.12";
echo $string;
echo "<br>";
echo str_replace( ",","",$string);
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task19</h1>";

for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x)."\t";

 echo "<br>";
echo "---------------------------------------------------------------------------------------";
?>