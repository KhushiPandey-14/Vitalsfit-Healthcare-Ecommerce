<?php
require 'config.php';
// if(!empty($_SESSION["id"])){
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
    else{
        echo 
        "<script> alert('Wrong Password');</script>";
    }
}
else{
    echo
    "<script> alert('User Not Registered');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_styles.css">
    <title>Login</title>
</head>
<body>
<div class="form-container">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="usernameemail">Username or Email : </label>
        <input type="text" name="usernameemail" id= "usernameemail" required value=""><br>
        <label for="usernameemail">Password</label>
        <input type="password" name="password" id = "password" required value=""><br>
        <button type="submit" name="submit">Login</button>
    </form>
<br>
<p>Don't have an account?  <a href="registration.php">Register here</a></p>

<div class="logout-link">
    <a href="logout.php">Logout</a>
</div>
</div>

</body>
</html>