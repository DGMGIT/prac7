<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prac07 - Repetition Page</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<div id="content">
    <h1>array and loops</h1>
    <?php
    $names = array("dan", "danny", "daniel");


    foreach ($names as $name) {
        echo "$name <br>";
    }

    for ($i = 0; $i <= 1; $i++) {
        echo "the ".($i + 1)." name is " . $names[$i] . " <br>";
    }
    $y = 0;
    $wName = "";

    while($wName != "dan"){
        $wName = $names[$y];
        echo "$wName <br>";
        ++$y;
    }
    ?>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>
