<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is the home page</h3>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>

<?php
    echo "<br>" . $_SESSION["username"];
    echo "<br>" . $_SESSION["password"];

    if(isset($_POST["logout"])) {
        session_destroy(); // destroy session

        header("location: index.php"); // back to login page
    }
?>