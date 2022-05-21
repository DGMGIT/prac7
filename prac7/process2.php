<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prac07 - Functions Page</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<div id="content">
    <?php
    $result = $_REQUEST['cats'];
    $showImage = FALSE;

    if ($result == "yes") {
        echo "i didn't know you were a cat person";
        $showImage = "images/cat.jpg";
    }

    else {
        echo "i'm more of a dog guy myself";
        $showImage = "images/dog.jpg";
    }
    show($showImage);

    function show($showImage) {
        if (isset($showImage)) {
            echo "<br><img src=$showImage alt='animel'/>";
        }
    }

    ?>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>