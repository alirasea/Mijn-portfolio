<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">  
    <title>login</title>
</head>
<body>
    <div class="container">
        <H2>Login</H2>
        <img src="../img/login.jpg" alt="">
<form  method="POST" action="#">
    <div class="form-input">
        <input type="text" name="username" placeholder="Enter Your User Name"/>
</div>

    <div class="form-input">
        <input type="password" name="password" placeholder="Enter Your Password"/>
</div>

        <input type="submit" name="submit" value="LOGIN" class="login"/>

</form>
    </div>
</body>
</html>

<?php
include ("conection.php");
if(isset($_POST["submit"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo "<p class ='field'>All field is required</p>";
    }
    else{
        $query = "SELECT * FROM loginform WHERE username = :Username AND password = :Password";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
            'Username' => $_POST["username"],
            'Password' => $_POST["password"]
            )
        );
        $count = $statement ->rowCount();
        if ($count > 0) {
            $_SESSTION ["Username"] = $_POST ["username"];
            $_SESSTION ["Password"] = $_POST ["password"];

            header( "location: admin.php");
        }
        else {
            $message = "<lable class ='error'> Username or Password is wrong";
            echo $message;
        }
    }
}
?>

