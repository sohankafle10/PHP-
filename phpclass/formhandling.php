<?php
//form handling in PHP

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo  "Email: $email <br>";
    echo "Password: $password <br>";

}
?>

<html>
    <head>
        <title>Form Handling in php</title>
    </head>
    <body>
<form action="formhandling.php" method="post">
    Email:  <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>     
    </body>
</html>