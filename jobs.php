<?php 

session_start();

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'hireMe';   

$my_sqli = new mysqli($host, $username, $password, $dbname);


$fname_error = $lname_error = $password_error = $password1_error = $email_error = $tel_error  = "";

if ($_SERVER["REQUEST_METHOD"] == POST){
    if(empty($_POST["firstname"])){
       $fname_error = "First Name is Required"; 
    }
    else{
         $f_name_error = test_input($_POST["name"]); 
          if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
              $fname_error = "Only Letters and white spaces allowed"; 
          }else{
               $firstname = $mysqli->real_escape_string($_POST['firstname']);
          }
    }
    
    if(empty($_POST["lastname"])){
       $lname_error = "Last Name is Required"; 
    }
    else{
         $lname_error = test_input($_POST["name"]); 
          if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
              $lname_error = "Only Letters and white spaces allowed"; 
          }else{
               $lastnmae = $mysqli->real_escape_string($_POST['lastname']);
          }
    }
    
    if(empty($_POST["password"] and $_POST["password1"])){
        $password_error = "Password is Required"; 
        $password1_error = "Password is Required";
    }
    else if ($_POST["password"] == $_POST["password1"]){
        // $password = md5($_POST['password']);
        $password = password_hash($password,PASSWORD_BCRYPT);
          
    }else if ($_POST["password"] != $_POST["password1"]){
         $password_error = "Passwords must match!"; 
        $password1_error = "Password must match!";
        
    }
    
    if(empty($_POST["email"])){
       $email_error = "Email is Required"; 
    }else {
         $email = test_input($_POST["email"]);  
         //check if email address is well-formatted
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             $email_error = "Email is Required eg. example@gmail.com"; 
         }else{
              $email = $mysqli->real_escape_string($_POST['email']);
         }
    }
        
        
    
    if(empty($_POST["telephone"])){
       $tele_error = "Telephone Number is Required"; 
    }
    else{
         $telephone = test_input($_POST["telephone"]);  
         //check if email address is well-formatted
         if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$telephone)){
             $tele_error = "Invalid Phone Number"; 
         }else{
              $telephone = $mysqli->real_escape_string($_POST['telephonel']);
         }
    }
    
    $sql = "INSERT INTO hireMe($firstname,$lastnmae,$password,$telephone, $email)" ."VALUES ('$firstname','$lastnmae','$password','$telephone','$email')";
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}
 


?>