<?php

$aDefault = [
    ["John Doe", "johndoe@example.com", "New York", "ABC Company", "1234567891"],
    ["Andrés González", "andres@example.com", "London", "XYZ Company", "9876543212"]
];

echo '$aData[] = [];<br><br>';

for ($i = 0; $i <= count($aDefault) - 1; $i++){
    echo '$aData[] = ['.($i+1).', "' . $aDefault[$i][0] .'", "'.$aDefault[$i][1].'", "'.$aDefault[$i][2].'", "'.$aDefault[$i][3].'", "'.$aDefault[$i][4].'"];<br>';
}

for ($i = count($aDefault) + 1; $i <= 30000; $i++) {
    $name = ucfirst(strtolower(generateRandomString(generateRandomNumber(1) + 1)));
    $lastName = ucfirst(strtolower(generateRandomString(generateRandomNumber(1) + 1)));
    $email = strtolower($name) . "@example.com";
    $city = ucfirst(strtolower(generateRandomString(generateRandomNumber(1) + 1)));
    $company = ucfirst(strtolower(generateRandomString(generateRandomNumber(1) + 1)));
    $phone = generateRandomNumber(10);

    echo '$aData[] = ['.$i.', "'.$name . ' ' . $lastName .'", "'.$email.'", "'.$city.'", "'.$company.'", "'.$phone.'"];<br>';
}

function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $max)];
    }

    return $randomString;
}

function generateRandomNumber($length) {
    $numbers = '0123456789';
    $randomNumber = '';
    $max = strlen($numbers) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomNumber .= $numbers[rand(0, $max)];
    }

    return $randomNumber;
}