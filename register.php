<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
    <title>Gojo Anime</title>
</head>
<body>
    <header>
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-gray border rounded-5 shadow-sm" id="pillNav2" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5 active" id="watchlist-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Watchlist</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="about-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="register-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">Register</button>
            </li>
        </ul>
    </header>

    <main>

        <?php

        require("connect.php");

        $name = $username = $email = $phone = $password = $password2 = "";

        $nameErr = $usernameErr = $emailErr = $phoneErr = $passwordErr = $password2Err = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_REQUEST["name"];
        $nameErr = "Please enter a valid username"
        if (empty($name)) {
            echo $nameErr;
        } else {
           echo $name;
        }

        // check if name only contains letters and whitespace

        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo $nameErr = "Only letters and white space allowed";
        }

        $username = $_REQUEST["username"];

        if (empty($username)) {
            echo $usernameErr = "Please enter a valid username";
        } else {
            echo $username;
        }
        // check if username is in database
        
        $username = $_POST["username"];

        $result = $mysqli->query("SELECT * FROM customerinfo WHERE customerusername = '$username'");

            if ($username == $results){
                $usernameErr = "This username has been taken";
            } else {
                $_POST['username'];
            }    
  

        $email = $_REQUEST["email"];

        if (empty($email)) {
            $emailErr = "Please enter a valid email";
        } else {
            echo $email;
        }
        // check if e-mail address is well-formed

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $emailErr = "The email address is incorrect";

        $phone = $_REQUEST["phone"];

        if (empty($phone)) {
            $phoneErr = "Please enter your phone number";
        } else {
            echo $phone;
        }
        // check if phone has 10 digits long

        if (!preg_match('/^[0-9]{10}+$/', $phone)) $phoneErr = "Phone number should be 10 digits long";

        $password = $_REQUEST["password"];

        if (empty($password)) {
            $passwordErr = "Please enter your password";
        } else {
            echo $password;
        }
        // check if password should have at least 1 uppercase letter and 1 lowercase letter

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]){6,}/', $password)) $passwordErr = "Please enter a valid password";

        $password2 = $_POST["password2"];

        // check if both password are same

        if (empty($password2) || $password != $password2) $password2Err = "Both passwords should match";

        }

    ?>

    <h2 class="title">Registration</h2>

    <form action="insert.php"method="post">  

        <label for="name">Full Name:</label> 
        <input type="text" name="name">

        <span class="error"><?php echo $nameErr;?></span>

        <br><br>

        <label for="username">User Name:</label> 
        <input type="text" name="username">

        <span class="error"><?php echo $usernameErr;?></span>

        <br><br>

        <label for="email">Email:</label> 
        <input type="text" name="email">

        <span class="error"><?php echo $emailErr;?></span>

        <br><br>

        <label for="phone">Phone Number:</label>  
        <input type="text" name="phone">

        <span class="error"><?php echo $phoneErr;?></span>

        <br><br>

        <label for="password">Password:</label> 
        <input type="text" name="password">

        <span class="error"><?php echo $passwordErr;?></span>

        <br><br>

        <label for="password2">Confirm Password:</label>
        <input type="text" name="password2">

        <span class="error"><?php echo $password2Err;?></span>

        <br><br>

        Gender:

        <input type="radio" name="gender" value="male">Male

        <input type="radio" name="gender" value="female">Female

        <input type="radio" name="gender" value="other">Prefer not to say

        <br><br>

        <input type="submit" name="submit" value="Submit">  

    </form>

</body>

</html>
