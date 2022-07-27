<?php
include("../database/db.php");
if(isset($_REQUEST["Submission"])){
    $nameError="";
    $lnameError="";
    $validateEmail="";
    $validatePass="";
    $validDesignation="";
    $validLanguage="";
    $validPicture="";
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["Email"];
    $pass=$_REQUEST["pass"];
  
    if(empty($fname)){
    $nameError="Enter your First name ?";
    }

        
    
    if(empty($lname)){
        
        $lnameError=" Enter your Last Name ?";
        
        }
    
    
    if(empty($email)){
        $validateEmail="Enter a valid email address";
        echo "Email field is empty<br>";
    }
    else{
        echo "Email field is not empty<br>";
    }
    
    if(strlen($pass)<6){
        $validatePass="Password length must be more than 6 characters.";
        echo "Password must be more than 6 characters<br>";
        
    }
    else{
        echo "Password is valid<br>";
    }
    if(isset($_REQUEST["designation"])){
        $validDesignation=$_REQUEST["designation"];	

    }
    else{  
        echo "Select a Designation<br>";
    }
    if(isset($_FILES["myfile"]["name"])){
        $validPicture=$_FILES["myfile"]["name"];	

    }
    else{  
        echo "Select a picture<br>";
    }

    if(isset($_REQUEST["Language"])){
        $validLanguage=$_REQUEST["Language"];	

    }
    else{  
        echo "Select a Language<br>";
    }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/".$_FILES["myfile"]["name"]))
    {
        echo "File uploaded<br>";

        
    }
    else{
        echo "Error!<br>";
    }
    if(empty($fname)||empty($lname)||empty($age)||empty(isset($_REQUEST["designation"]))||empty($_REQUEST["Language"])||empty($email)||empty($pass)||empty($validPicture)){
        echo "Fill up all the fields";
    }
     else{
        $mydb=new db();
        $myconn=$mydb->opencon();
        $mydb->insertuser($fname,$lname,$age,$validDesignation,$validLanguage,$email,$pass,$validPicture,"employee",$myconn);

     }
    
    


}


?>