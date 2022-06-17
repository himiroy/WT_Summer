<?php
if(isset($_POST["Submit"])){


if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<5))
{
    echo "please enter valid first name";

}
else
{
    echo "your first name is ".$firstname;
}
echo "‹br>";

if(empty($_REQUEST["Lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    echo "please enter valid last name";

}
else
{
    echo " your last name is : ".$lastname;
}
echo "‹br>";

$age=$_REQUEST["age"]:
if($age == "")
{
      echo "please enter age";
}
else{
      echo "age is:".$age;
}
echo "‹br>";

if(empty($email))
{
    echo"enter your email";
}
else{
    echo "your email is".$email;
}
echo "‹br>";

$pass=$_REQUEST["pass"]:

if(strlen ($pass) <6)
{
      echo "please enter a valid password";
}
else{
      echo "you have valid password";
}
echo "‹br>";

if(isset($_POST["Designation1"]) || isset($_POST["Designation2"]) || isset($_POST["Designation3"]))
{
      echo "you have selected";

if(isset($_POST["Designation1"]) )
 {
     echo $_POST["Designation1"];
 }
if (isset($_POST[" Designation2" ]) )
 {
     echo $_POST["Designation2"];
 }
 if (isset($_POST["Designation3" ]) )
 {
    echo $_POST["Designation3"];
 }
else{
      echo "you have not selected anything";
 } 
}
echo "<br>";
if(isset($_POST["PreLang1"]) || isset ($_POST["PreLang2"])|| isset ($_POST["PreLang3"]) )
{
     echo "you have selected";
if(isset($_POST["PreLang1"]) )
 {
     echo $_POST["PreLang1"];
 }
if (isset($_POST[" PreLang2" ]) )
 {
     echo $_POST["PreLang2"];
 }
 if (isset($_POST[" PreLang3" ]) )
 {
    echo $_POST["PreLang3"];
 }
else{
    echo"you have not selected box";
    }
}
?>