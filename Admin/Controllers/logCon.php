<?php

session_start();

$emptyMail = " ";
$emptyPass = " ";



if (isset($_POST["submit"]))
{
	if (empty($_POST["email"])) 
	{
        $emptyMail = "*Please enter your Mail";
        
    }
	else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
	{
        $emptyMail  = "*Please enter a valid email address";
        
    }
	if (empty($_POST["password"])) 
	{
        $emptyPass = "*Please enter a password";   
    } 
	
}