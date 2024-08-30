<?php

//Write a class called 'Validation' with static methods to validate email addresses, passwords, and other common input fields.

class Validation
{
    // Method to validate email addresses
    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Method to validate passwords (at least 8 characters, includes letters, numbers, and special characters)
    public static function validatePassword($password)
    {
        // Minimum 8 characters, at least one letter, one number and one special character
        $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
        return preg_match($pattern, $password);
    }

    // Method to validate URLs
    public static function validateURL($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    // Method to validate phone numbers (basic validation: digits only, 7 to 15 characters)
    public static function validatePhoneNumber($phone)
    {
        $pattern = '/^\d{7,15}$/';
        return preg_match($pattern, $phone);
    }

    // Method to validate that input is not empty
    public static function validateNotEmpty($input)
    {
        return !empty(trim($input));
    }

    // Method to validate integer values
    public static function validateInteger($number)
    {
        return filter_var($number, FILTER_VALIDATE_INT) !== false;
    }

    // Method to validate if the input is a valid date
    public static function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}