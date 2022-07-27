<?php
class db{
function opencon(){
$servername="localhost";
$username="root";
$password="";
$dbname="Student_DB";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function insertuser($fname,$lname,$age,$designation,$planguage,$email,$password,$picture,$table,$conn){

$sqlstr="INSERT INTO $table(fname,lname,age,designation,planguage,email,password,picture) VALUES('$fname','$lname',$age,'$designation','$planguage','$email','$password','$picture')";
if($conn->query($sqlstr)){
    echo "Successfull<br>";
}
else{
    echo $conn->error;
}
    }
}
?>   