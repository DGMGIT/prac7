<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
<a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> prac07 by Daniel Mackenzie</h1></a>
</header>
