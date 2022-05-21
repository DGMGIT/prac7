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
    <h2>why not try singing up</h2>
    <form action="process1.php" method="get">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="email">email:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>Gender:<br>
            <label>
                <input type="radio" name="gender" value="male" id="gender_male">
                Male</label>
            <br>
            <label>
                <input type="radio" name="gender" value="female" id="gender_female">
                Female</label>
            <br>
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Subscribe">
        </p>
    </form>
    </div>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>