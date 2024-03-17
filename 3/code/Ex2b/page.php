<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}

session_start();

if (false === isset($_SESSION["first_name"], $_SESSION["second_name"], $_SESSION["age"]))
{
    redirectToHome();
}

$first_name = $_SESSION["first_name"];
$second_name = $_SESSION["second_name"];
$age = $_SESSION["age"];

echo "You are $first_name $second_name ($age y.o.)";