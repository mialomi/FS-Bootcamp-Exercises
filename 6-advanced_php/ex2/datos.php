<?php
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $email = "";

    $name = $_POST["name"];
    $_SESSION["users"] = $name;
    //echo "You have entered: Username is ". $name;
    //echo "<br>";
    
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            echo $name . " is not a valid username.";}
            else{
                echo "and it's valid.";
                echo "<br>";
            }



    $email = $_POST["email"];
    echo "You have entered: Email is ". $email;
    echo "<br>";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo $email. " is not a valid email";}
    else{
        echo "and it's valid.";
    }
    echo "<br>";

    $age = $_POST["age"];
    echo "You have entered: Age is " . $age;
    echo "<br>";
    if($age <= 0 or $age > 110){
        echo $age . " is not a valid age";}
    else{
        echo "and it's valid.";
    }
    echo "<br>";

    echo "Welcome, ". $_SESSION["users"]. "!";
    }



?>