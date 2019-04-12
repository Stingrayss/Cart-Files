<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Intro To PHP</title>
</head>

<body style="overflow-x: hidden;">

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

    <?php
    function img($src, $headername) {
        return "<div style='background-image: url($src); height:500px; background-position: center top; background-attachment: fixed; background-size: cover; display: flex; justify-content: center; align-items: center'><h2 style='color: white; font-size: 3em; text-shadow: 0px 0px 5px black;'>$headername</h2></div>";
    }
    function atag($link, $linkname) {
        return "<a href='$link' style='' target='_blank'>$linkname</a>";
    }
    $par = "<p style='margin: 0 auto; width: 60%; text-align: center; font-size: 1.2em'>";
    $pare = "</p>";
    $br = "<br>";
    $hr = "<hr style='width: 10%'>";
    $li = "<li>";
    $lie = "</li>";
    $ul = "<ul style='margin: 0 auto; width: 10%; font-size: 1.2em;'>";
    $ule = "</ul>";
echo $hr . $br . 
    $br .
    img('images/blossom-tree-sky-nature.jpeg', 'What Spring Break is to Me') . $br .
    $par . "Spring Break is essentially the last amount of time off given by the school. This for me is always just about sleeping and hanging out with friends by playing games. It is a time to goof oof, and enjoy being away from school for a whole week. It is time to spend with family during Easter, and enjoy one another's company. It is a transition from the first half of the second semester to the second half. It is when it becomes crunch time for the students, and they need to: focus on finals, getting their grades as high as possible, and preparing for the last couple tests of the year." . $pare . $br . $hr . $br .
    $par . "Spring Break is when the weather completely transitions from a lingering winter, to a full-on spring-breeze and warm sun-lit days. The plants and the trees come into full bloom, and their life and color is returned. Looking at your surroundings becomes a pleasure again, instead of having many depressing overcast days back-to-back. It becomes viable to go swimming again, go on a picnic, or go on hikes in the mountains. One of my favorite hobbies is hiking in Yosemite with my dad, so this time of year is when the snow begins to melt away completely, and doing so is possible again." . $pare . $br .
    img('images/games.jpeg', "Cade's Spring Break Plans") . $br .
    $ul .
    $li . "Play " . atag('https://play.na.leagueoflegends.com/en_US', 'games') . " with friends" . $lie .
    $li . "Watch " . atag('https://www.crunchyroll.com/', 'anime') . $lie .
    $li . "Sleep a lot" . $lie .
    $li . "Make Memories" . $lie .
    $ule .
    $br . $hr . $br .
    $par . "Cade Duncan" . $pare . $br .
    $par . "AM CART 2019" . $pare . $br
?>

</body>

</html>
