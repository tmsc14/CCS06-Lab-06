<?php
$year = $argv[2];
$name = $argv[1];
function agecount($computing){
$yeartoday = date("Y");
$crntage = $yeartoday - $computing;
$message = " and your age is $crntage years old";
$message1 = "";
$message2 = "";


if ($crntage >=60)
{
$message2 = "\nYou are a Senior.";
$message1 = "\nYou are a Voter.";
}


elseif ($crntage >= 18)
{
$message2 = "\nYou are a Adult.";
$message1 = "\nYou are a Voter";
}


else
{
$message2 = "\nYou are a Kid.";
$message1 = "\nYou are not a Voter.";


}


echo $message;
echo $message1;
echo $message2;
}


echo "Your name is $name,";
agecount($year);
?>