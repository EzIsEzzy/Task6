<?php

include "Validation.php";

$email = "esmail@gmail.com";
$password = "12345A#5";
$url = "https://w3school.com";
$phone = "778515331";
$date = "2024-08-30";

echo Validation::validateEmail($email) ? "Valid Email<br>" : "Invalid Email<br>";
echo Validation::validatePassword($password) ? "Valid Password<br>" : "Invalid Password, Try to have it contain: 8 characters, at least one letter, one number and one special character <br>";
echo Validation::validateURL($url) ? "Valid URL<br>" : "Invalid URL<br>";
echo Validation::validatePhoneNumber($phone) ? "Valid Phone Number<br>" : "Invalid Phone Number<br>";
echo Validation::validateDate($date) ? "Valid Date<br>" : "Invalid Date<br>";
