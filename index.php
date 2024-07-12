<?php

    // Introduction

    /*
    echo "Hello PHP I Guess! <br>" , "Yay <br>" , "Nay";
    // This is a comment
    */

    // Variables

    /*
    $name = "Labib Tahmid";
    $age = 21;
    $gpa = 3.4;
    
    echo $name;
    echo "<br> Hello {$name} <br>";
    echo "You are {$age} years old <br>";
    echo "Your gpa is {$gpa} <br>";
    */

    // Arithmetic

    /*
    $x = 10 ; $y = 2 ; $z = null;

    $z = $x ** $y; //power
    echo $z;
    */

    // $_GET & $_POST

    /*
    // echo "{$_GET["username"]} <br>"; 
    // echo "{$_GET["password"]} <br>";

    // echo "{$_POST["username"]} <br>"; // post for security
    // echo "{$_POST["password"]} <br>";

    $food = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "You ordered {$quantity}x {$food} <br>";
    echo "Your total is \${$total} <br>";
    */

    // Math Function

    /*
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x , $y);
    // $total = sqrt($x);
    // $total = sqrt($x);
    // $total = max($x , $y);
    // $total = min($x , $y);
    // $total = pi();
    // $total = rand( 1 , 100); // (min , max)

    // echo $total;

    $radius = $_POST["radius"];

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference , 2);

    $area =  pi() * pow($radius , 2);
    $area = round($area , 2);

    $volume = (4/3) * pi() * pow($radius , 3);
    $volume = round($volume , 2);

    echo "{$circumference} , {$area} , {$volume}";
    */

    // Array 

    /*
    $fruits = array("Apple" , "Banana" , "Coconut" , "Orange");
    echo $fruits[2] . "<br> <br>";

    $fruits[2] = "Kiwi";

    array_push($fruits , "Coconut" , "Pineapple");
    // array_pop($fruits);
    // array_shift($fruits); //remove first element
    // $fruits = array_reverse($fruits); //reverse array and assign it

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    echo count($fruits);
    */

    // Associative Array

    /*
    $capitals = array("USA" => "Washington D.C." , 
                     "Japan" => "Tokyo" ,
                     "South Korea" => "Seoul",
                     "India" => "New Delhi");

    echo $capitals["India"] . "<br>";

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";

    // array_pop($capitals);
    // array_shift($capitals);
    // $capitals = array_flip($capitals); //to flip key and value
    $capitals = array_reverse($capitals);

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    $keys = array_keys($capitals);

    foreach($keys as $key) {
        echo "{$key} <br>";
    }

    $values = array_values($capitals);

    foreach($values as $value) {
        echo "{$value} <br>";
    }
    */

    // isset() & empty()

    /*
    // $username = null;

    // if (isset($username)) {
    //     echo "The variable is set";
    // } else {
    //     echo "The variable is NOT set";
    // }

    // if (empty($username)) {
    //     echo "<br> The variable is empty";
    // } else {
    //     echo "<br> The variable is NOT empty";
    // }

    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if (isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username cannot be empty";
        }else if (empty($password)) {
            echo "Password cannot be empty";
        } else {
            echo "Welcome {$username}";
        }
    }
    */

    // Radio Buttons

    /*
    if (isset($_POST["confirm"])) {

        // if (isset($_POST["creditcard"])) {
        //     $creditcard = $_POST["creditcard"];
        //     echo $creditcard;
        // } else {
        //     echo "Select A Credit Card!";
        // }

        $creditcard = null;
        
        if (isset($_POST["creditcard"])) {
            $creditcard = $_POST["creditcard"];
        }

        if ($creditcard == "visa") {
            echo "You Selected Visa!";
        } else if ($creditcard == "mastercard") {
            echo "You Selected Master Card!";
        } else if ($creditcard == "americanexpress") {
            echo "You Selected American Express!";
        } else {
            echo "Select A Card!";
        }
    }
    */

    // CheckBox

    /*
    if (isset($_POST["confirm"])) {

        if (isset($_POST["pizza"])) {
            echo "You Like Pizza! <br>";
        }
        if (isset($_POST["hamburger"])) {
            echo "You Like Hamburger! <br>";
        }
        if (isset($_POST["hotdog"])) {
            echo "You Like Hotdog! <br>";
        }
        if (isset($_POST["taco"])) {
            echo "You Like Taco! <br>";
        }
        if (empty($_POST["pizza"])) {
            echo "You Don't Like Pizza! <br>";
        }
        if (empty($_POST["hamburger"])) {
            echo "You Don't Like Hamburger! <br>";
        }
        if (empty($_POST["hotdog"])) {
            echo "You Don't Like Hotdog! <br>";
        }
        if (empty($_POST["taco"])) {
            echo "You Don't Like Taco! <br>";
        }
    }
    */

    // String function

    /*
    $username = "Labib The Great Tahmid";
    $phone = "123-456-789";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username , 40 , '0');
    // $phone = str_replace("-" , "?" , $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username , "Labib Tahmid");
    // $count = strlen($username);
    // $position = strpos($username , " ");
    $firstname = substr($username , 0 , strpos($username , " "));
    $lastname = substr($username , strpos($username , " ") , strlen($username));

    echo $username;
    // echo "<br>" . $phone;
    // echo "<br>" . $equals;
    // echo "<br>" . $count;
    // echo "<br>" . $position;
    // echo "<br>" . $firstname;
    // echo "<br>" . $lastname;

    $fullname = explode(" " , $username); // divide and add to array

    foreach($fullname as $name) {
        echo "<br>" . $name;
    }

    $username2 = array("Alexender" , "The" , "Great");
    $attach = implode("-" , $username2); // make array a string

    echo "<br>" . $attach;
    */

    // Sanitize/Validate Input 

    /*
    if(isset($_POST["login"])) {

        $username = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST , "age" , FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL); // sanitize will clean the data
        
        $age = filter_input(INPUT_POST , "age" , FILTER_VALIDATE_INT); // validate will check the data and if false return empty string
        $email = filter_input(INPUT_POST , "email" , FILTER_VALIDATE_EMAIL);

        if(empty($age)) {
            echo "<br>" ."That was not a Valid Age!";
        } else {
            echo "<br>" . "You are {$age} years old";
        }

        if(empty($email)) {
            echo "<br>" ."That was not a Valid Email!";
        } else {
            echo "<br>" . "Your email is {$email}";
        }
        echo "Hello {$username}";
    }
    */

    // include()

    /*
    include ("header.html");
    */

    // _COOKIE

    /*
    setcookie("fav_food" , "pizza" , time() + (86400 * 2) , "/"); //86400 sec as one day
    setcookie("fav_drink" , "coffee" , time() + (86400 * 3) , "/");
    setcookie("fav_dessert" , "cake" , time() + (86400 * 4) , "/");

    // to remove cookie make time() - 0;

    // foreach($_COOKIE as $key => $value) {
    //     echo "$key = $value <br>";
    // }

    if (isset($_COOKIE["fav_food"])) {
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    } else {
        echo "Do not know your favourite food!"; // if cookie is not set
    }
    */

    // _SESSION

    /*
    session_start();
    */

    // _SERVER

    /*
    foreach($_SERVER as $key => $value) {
        echo "$key = $value <br>";
    }
    */

    /* PHP_SELF to auto update action in form, in case of file name change
        if index.php changes name, action wont change automatically
        use action="<?php $_SERVER["PHP_SELF]" ?> and surround it with htmlspecialchars() */

    /* Another one is checking if a form is submitted, we used isset() before.
        It can be done with $_SERVER["REQUEST_METHOD"] == POST also */


    // Password Hashing

    /*
    $password = "pizza123";

    $hash = password_hash($password , PASSWORD_DEFAULT);

    echo $hash;

    if(password_verify("pizza123" , $hash)) {
        echo "<br>" . "Welcome!";
    } else {
        echo "<br>" . "Nice Try!";
    }
    */

    // Database Connect

    /*
    include("database.php");
    */

    // PHP insert into MySQL

    /*
    include ("database.php");

    $username = "Joker";
    $password = "HAHAHA";
    $hash = password_hash($password , PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user , password) 
            VALUES ('$username' , '$hash')"; // need '$variable'

    try {
        mysqli_query($conn , $sql);
        echo "Registered Successfully";
    } catch (mysqli_sql_exception) {
        echo "Could not Registered";
    }

    mysqli_close($conn); // not an error, just added from another file
    */

    // PHP Query MySQL

    /*
    include("database.php");

    // $sql = "SELECT * FROM users WHERE user = 'Patrick'";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn , $sql); // returns a object

    // if(mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_assoc($result); // returns next available row
    //     echo $row["id"];
    // } else {
    //     echo "No User Found!";
    // }

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    } else {
        echo "No User Found!";
    }

    mysqli_close($conn);
    */
?>


<!-- Generating HTML in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <!-- Introduction -->

    <!--
    <button>Hello!</button>
    -->

    <!-- GET POST -->

    <!-- 
    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"> <br> <br>
        <label>Password:</label>
        <input type="password" name="password"> <br> <br>
        <input type="submit" value="Log in">
    </form> 
    -->

    <!-- 
    <form action="index.php" method="post">
        <label>Quantity:</label>
        <input type="text" name="quantity"> <br>
        <input type="submit">
    </form> 
    -->

    <!-- Math Function -->

    <!-- 
    <form action="index.php" method="post">
        <label>X:</label>
        <input type="text" name="x"> <br>
        <label>Y:</label>
        <input type="text" name="y"> <br>
        <input type="submit" value="Total">
    </form> 
    -->

    <!-- 
    <form action="index.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius"> <br>
        <input type="submit" value="Calculate"> <br>
    </form>
    -->

    <!-- isset() & empty() -->

    <!--
    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"> <br>
        <label>Password: </label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log In">
    </form>
    -->

    <!-- Radio Buttons -->

    <!-- 
    <form action="index.php" method="post">
        <input type="radio" value="visa" name="creditcard">
        Visa <br>
        <input type="radio" value="mastercard" name="creditcard">
        Master Card <br>
        <input type="radio" value="americanexpress" name="creditcard">
        American Express <br>
        <input type="submit" name="confirm" value="Confirm">
    </form> 
    -->

    <!-- CheckBox -->

    <!--
    <form action="index.php" method="post">
        <input type="checkbox" value="Pizza" name="pizza">
        Pizza <br>
        <input type="checkbox" value="Hamburger" name="hamburger">
        Hamburger <br>
        <input type="checkbox" value="Hotdog" name="hotdog">
        Hotdog <br>
        <input type="checkbox" value="Taco" name="taco">
        Taco <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
    -->

    <!-- Sanitize/Validate Input -->

    <!--
    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"> <br>
        <label>Age:</label>
        <input type="text" name="age"> <br>
        <label>Email:</label>
        <input type="text" name="email"> <br>
        <input type="submit" value="Log In" name="login">
    </form>
    -->

    <!-- include() -->

    <!--
    This is home page <br>
    Stuff about your home page can go here
    -->

    <!-- SESSION -->

    <!-- 
    <h3>This is the login page</h3>
    <a href="home.php">This goes to home page!</a> 
    -->

    <!--
    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"> <br>
        <label>Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log In">
    </form>
    -->

    <!-- Database Connect -->

    <!--
    <h1>Hello!</h1>
    -->

    <!-- PHP insert into MySQL -->


</body>
</html>

<!-- 
    <?php
        include("footer.html");
    ?> 
-->

<!-- 
    <?php
        // $_SESSION["username"] = "Labib";
        // $_SESSION["password"] = "labib123";

        // echo "<br>" . $_SESSION["username"];
        // echo "<br>" . $_SESSION["password"];

        if (isset($_POST["login"])) {

            if(!empty($_POST["username"]) && !empty($_POST["password"])) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];

                header("location: home.php"); // to send user to home page
            } else {
                echo "Enter Your Username And Password!";
            }
        }
    ?>
-->