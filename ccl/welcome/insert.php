<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>  
input[type=radio] { width:50px; }  
input[type=checkbox]{ width:50px; }  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 500px;  
}
input[type=reset] {  
  border: 3px solid;    
  border-radius: 2px;    
 /* color:;  */  
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=reset]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=reset]:hover {    
  color:  #C8A2C8;    
}    
input {  
    border: 2px solid #000;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lucida Grande';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #000;  
    background: #F98B88;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: purple;  
    text-transform: uppercase;  
}  
    input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  /*color:;   */ 
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color:  #C8A2C8;    
}    
</style>  
</head>  
<body>  
<h1> Student Registration Form </h1>  
<form method="post" action ="process.php">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b> Enter your Name </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" name = "n"  pattern="[a-z A-Z]*" required /> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Email </b> </td>  
    <td> <input type="email" name="e" placeholder= "Enter Email" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Address </b> </td>  
    <td> <textarea name="add">  Enter Address </textarea> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Mobile Number </b> </td>  
    <td> <input type="text"  name="m" maxlength="10" placeholder=" Enter number" > </td>  
  </tr>  
  <tr>  
    <td height="23"> <b> Select your Gender </b> </td>  
    <td>  
    Male <input type="radio" name="g" value="m"/>  
    Female <input type="radio" name="g" value="f"/>  
    </td>  
  </tr>  
  <tr>  
    <td> <b> Choose your Hobbies </b> </td>  
    <td>  
        Cooking <input type="checkbox" value="cooking" name="hobb[]"/>  
        Singing <input type="checkbox" value="singing" name="hobb[]"/>  
        Dancing <input type="checkbox" value="dancing" name="hobb[]"/>  
        Painting <input type="checkbox" value="painting" name="hobb[]"/>
        Cricket <input type="checkbox" value="cricket" name="hobb[]"/>
        Volleyball <input type="checkbox" value="volleyball" name="hobb[]"/>
        Tennis<input type="checkbox" value="tennis" name="hobb[]"/>
        Swimmimg <input type="checkbox" value="swimming" name="hobb[]"/>
    </td>  
  </tr>  
  <tr>  
    <td> <b> Select your Profile Pic </b> </td>  
    <td> <input type="file"  name="pic"/> </td>  
  </tr>  
  <tr>  
    <td> <b> Select your Date of Birth </b> </td>  
    <td>  
        <select name="mm">  
            <option value=""> Month </option>  
            <?php   
            for($i=1;$i<=12;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="dd">  
            <option value=""> Date </option>  
            <?php   
            for($i=1;$i<=31;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="yy">  
            <option value=""> Year </option>  
            <?php   
            for($i=2020;$i<=2025;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
    </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Register"/>  
    <input type="reset" value="Reset"/>  
    </td>  
  </tr>  
</table>  
</form>  
</body>  
</html>  
<?php  
extract($_POST);  
if(isset($save))  
{  
$dob=$yy."-".$mm."--".$dd;  
$h=implode(",",$hobb);  
$img=$_FILES['pic']['name'];  
if($return)  
{  
$msg="<font color='red'>".ucfirst($e)." already exists choose another email </font>";  
}  
else  
{  
$msg= "<font color='blue'> your data saved </font>";  
}  
}  
?>  