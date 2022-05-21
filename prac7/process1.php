<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prac07 - Signup Page</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>

<div id="content">
    <?php
    echo "<h2>welcome " . $_REQUEST['name'] . "</h2>";
    echo "<h2>you will receive a confirmation message in your provided email address: " . $_REQUEST['email'] . " </h2>";
    ?>
    <p>thank you for signing up</p>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>
