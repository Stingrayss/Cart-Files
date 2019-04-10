<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Intro To PHP</title>
</head>

<body>

    <h1>Cade's Third PHP page</h1>

    <?php
function writeMsg($name) {
    echo "Hello world! My name is $name! <br>";
}
    writeMsg("Cade"); // call the function
    ?>

    <?php
function starWars($relYear, $epNum, $epName) {
    echo "$relYear, Star Wars Episode $epNum: $epName<br>";
}
starWars("1977", "IV", "A New Hope");
starWars("1980", "V", "The Empire Strikes Back");
starWars("1983", "VI", "Return of the Jedi");
starWars("1999", "I", "The Phantom Menace");
starWars("2002", "II", "Attack of the Clones");
starWars("2005", "III", "Revenge of the Sith");
starWars("2015", "VII", "The Force Awakens");
starWars("2017", "VIII", "The last Jedi");
?>

<?php
function setHeight($minheight = '50px', $color = "#808080") {
    echo "<br>The height is: $minheight <div style='height: $minheight; background-color: $color'></div><br>";
}
setHeight('350px', "black");
setHeight(); // will use the default value of 50 and #272727
setHeight('135px', "red");
setHeight('100px', "green");
setHeight('80px', "blue");
?>

<?php
function sum($x, $y) {
    $z = $x - $y;
    echo "The amount of years since the Unix Epoch is: $z"; //or return, echo just allowed me to display the number on the document
}
    sum(2019, 1970)
?>
<br>
<?php
$x = 5; // global scope <--- 

function myTest1() {
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $x</p>";
} 
myTest1();
echo "<p>Variable x outside function is: $x</p>";
?>

<?php
function myTest2() {
	$x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest2();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<?php
$x = 5;
$y = 10;
function myTest3() {
    global $x, $y;
    $y = $x + $y;
}
myTest3();
echo $y; // outputs 15
?>


<?php //Global array
//The previous example can be rewritten as follows:
$x = 5;
$y = 10;
function myTest4() {
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
myTest4();
echo $y; // outputs 15
?>


</body>
</html>
