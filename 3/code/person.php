<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}

if (false === isset($_POST['first_name'], $_POST['second_name'], $_POST['age']))
{
    redirectToHome();
}

$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$age = $_POST['age'];

echo "Your name is $first_name $second_name ($age y.o.)";