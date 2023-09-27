<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $characterCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $characterCount - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

$pass = generatePassword(12);
echo "Generated Password: " . $pass;

