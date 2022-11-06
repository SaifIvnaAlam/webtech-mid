<?php

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function addToJson($data)
{
    $ExistingData = file_get_contents('../View/Data.json');
    $TempData = json_decode($ExistingData, true);
    $FormData = array(
        'name' =>input($data["name"]),
        'email' =>input($data["email"]),
        'phoneNo'=>input($data["phoneNo"]),
        'password'=>input($data["password"]),
        'gender'=>input($data["gender"]),
        'dateOfBirth'=>input($data["dateOfBirth"])
    );
    $TempData [] = $FormData;
    $JsonData = json_encode($TempData , JSON_PRETTY_PRINT);
    if (file_put_contents('../view/Data.json', $JsonData)) 
	{
        return '<p>Successful</p>';
    } 
	else 
	{
        return '<p>Failed</p>';
    }
}

?>