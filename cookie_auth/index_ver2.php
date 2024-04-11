<!-- index.php -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    $grapeUsername = "grape";
    $grapePassword = "secret1234";

    $baboUsername = "babo";
    $baboPassword = "babo1234";

    if ($enteredUsername == $grapeUsername && $enteredPassword == $grapePassword) {
        setcookie("user", "grape_bs", time() + 3600, "/");
        header("Location: page-grape.php");
        exit();
    } elseif($enteredUsername == $baboUsername && $enteredPassword  == $baboPassword){
        setcookie("user", "babo_dg", time() + 3600, "/");
        header("Location: page-babo.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password";
    }
}
?>
