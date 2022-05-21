<nav>
    <ul>
        <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span
                        class="glyphicon glyphicon-home"></span> Home</a></li>
        <li <?php if ($name == "signup") echo 'class="current"'; ?>><a href="signup.php"><span
                        class="glyphicon glyphicon-signup"></span> Signup</a></li>
        <li <?php if ($name == "repetition") echo 'class="current"'; ?>><a href="repetition.php"><span
                        class="glyphicon glyphicon-array-loops"></span> Repetition</a></li>
        <li <?php if ($name == "functions") echo 'class="current"'; ?>><a href="functions.php"><span
                        class="glyphicon glyphicon-functions-Decisions"></span> Functions</a></li>


    </ul>
</nav>
