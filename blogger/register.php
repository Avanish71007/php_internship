<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
     include "db.php";
   session_start();

   $sql = "INSERT INTO users (name, email, password, role) VALUES('$name' , '$email' , '$password' , '$role' )";
   $result = mysqli_query($conn, $sql);
    if(!$result){
    echo "Error :{$conn->error}";
     }else{
      echo"The Registration is done Successfully !!"; 
   }

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
  
<form action="register.php" method="POST">

    <label for="name">Name: </label>
<input type="text" name="name" id="name" required > <br />

<label for="email">Email: </label>
<input type="email" name="email" id="email" required> <br />

<label for="pass">Password: </label>
<input type="password" name="password" id="pass" required> <br />

<select name="role" id="role">
    <option value="author">Author</option>
    <option value="subscriber">Subscriber</option>
</select>  <br />
<input type="submit"  name="submit" value="Register">
</form>


</body>
</html>