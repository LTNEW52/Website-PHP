<?php
    include("database.php");
    // foreach($_SERVER as $key => $value) {
    //     echo "$key = $value <br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to FakeBook!</h2>
        <label>Username: </label>
        <input type="text" name="username"> <br><br>
        <label>Password: </label>
        <input type="password" name="password"> <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please Enter A Username";
        } elseif (empty($password)) {
            echo "Please Enter A Password";
        } else {
            $hash = password_hash($password , PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user , password) VALUES ('$username' , '$hash')";
            try{
                mysqli_query($conn , $sql);
                echo "You Are Now Registered";
            } catch(mysqli_sql_exception) {  
                echo "That Username is Taken!";
            }
        }
    }

    mysqli_close($conn);
?>