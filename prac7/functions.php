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
    <h1>Functions and Decisions </h1>
    <form action="process2.php" method="get">
        <p>do you like cats:<br>
            <label>
                <input type="radio" name="cats" value="yes" id="yes">
                yes</label>
            <br>
            <label>
                <input type="radio" name="cats" value="no" id="no">
                no</label>
            <br>
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Subscribe">
        </p>
    </form>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>
