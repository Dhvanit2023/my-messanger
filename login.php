<html>
<body>
 <form method="get">
 enter your username:
 <input type=text name=username>
 <br>
 <br>
enter your login code:
<input type=text name=code>
<br>
<input type=submit name=submit>
<?php
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        if ($code == '3060823034') {
            header("Location: send.html");
            exit();
        } else {
            echo "<p style='color: red;'>Invalid code. Please try again.</p>";
        }
    }
    ?>

</form>
</body>
</html>