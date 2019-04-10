<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro To PHP</title>
</head>

<body>

    <h1>Cade's Second PHP page</h1>

    <?php
$txt = "Hello world!";
$name = "Cade";
$x = 5;
$y = 10.25;
?>

    <?php
echo "Hello World! My name is Cade Duncan <br>";
?>

    <?php
    
  // This is a single-line comment

  # This is also a single-line comment

  /*
  This is a multiple-lines comment block
  that spans over multiple
  lines
  */

  // You can also use comments to leave out parts of a code line
  $x = 5 /* + 15 */ + 5;
  echo $x;
?>

    <?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

    <?php
$color = "red";
echo "My car is " . $color . "<br>";
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";
?>

    <?php
$CART = "CART Web App";
echo "I love $CART!";
?>

    <?php
echo "<br> $txt My name is $name! ";
?>

    <?php
    $h1 = "<h1>Header Level 1</h1>";
    $h2 = "<h2>Header Level 2</h2>";
    $h3 = "<h3>Header Level 3</h3>";
    $li = "<li>";
    $p = "<p>";
    $pend = "</p>";
    $li = "<li>";
    $liend = "</li>";
    $lorem = "Lorem ipsum dolor sit amet,";
    echo 
        $h1 .

$p . '<strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.' . $pend

. $h2 .

'<ol>'
  . $li . $lorem . " consectetuer adipiscing elit." . $liend .
  $li . "Aliquam tincidunt mauris eu risus." . $liend .
'</ol>' .

'<blockquote>' . $p . $lorem . " consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est." . $pend . '</blockquote>'

.$h3.

'<ul>'
  . $li . $lorem . " consectetuer adipiscing elit." . $liend .
  $li . "Aliquam tincidunt mauris eu risus." . $liend .
'</ul>' .

'<pre><code>
#header h1 a {
  display: block;
  width: 300px;
  height: 80px;
}
</code></pre>';
    ?>

</body>
</html>
