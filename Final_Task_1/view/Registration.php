<?php
include("../Controller/process.php");
?>

<html>

<body>

<form action="" method="POST"  enctype="multipart/form-data">

<table>
            <tr>
            <td>First Name: </td>
            <td><input type= "text" name="fname"></td>
            </tr>

            <tr>
            <td>Last Name: </td>
            <td><input type="text"  name="lname"></td>
            </tr>

        <tr>
            <td>Age: </td>  
            <td><input type="text" name="age"></td>
        </tr>

        <tr>
            <td>Designation:</td>

            <td><input type="radio" name="designation" value="Junior Programmer" >Junior Programmer

            <input type="radio" name="designation" value="Senior Programmer" >Senior Programmer

            <input type="radio" name="designation" value="Project Lead" >Project Lead</td>
        </tr>

        <tr>
            <td>Preferred language</td>

            <td><input type="checkbox" name="Language" value="java">Java

            <input type="checkbox" name="Language" value="php">PHP

            <input type="checkbox" name="Language" value="c++">C++
     
            </td>
        </tr>

        <tr>
            <td>E-mail: </td>
            
            <td><input type="text" name="Email">
        
            </td>
        </tr>

        <tr>
            <td>Password: </td>

            <td><input type="password" name="pass"> 
       
            </td>
        </tr>
       
        

        <tr>
            <td> <input type="file" name="myfile"> </td>
        </tr>
       <tr>
        <td> <input type="submit" name="Submission"value="Submit"> <input type= "reset" name="Res" value = Reset></td>
        </tr>
</table>


</form>


    
</body>
</html>