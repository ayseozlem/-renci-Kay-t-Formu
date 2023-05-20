<?php
require 'connection.php';
if(!isset($_POST["submit"]))
{
  $full_name = $_POST["full_name"];
  $email = $_POST["email"];
  $erkek = $_POST["erkek"];
  $kadin = $_POST["kadin"];
if($erkek==TRUE)
{
    $gender="erkek";


}
else
{
    $gender="kadin";
}


 $sql= "INSERT INTO ogrenciler(full_name,email,gender) VALUES ('$full_name','$email','$gender')";
 if ($conn ->query($sql) === TRUE)
 {
    echo "<script> alert('Data Inserted Succesfully'); </script>";
 }
 else
 {
    echo "Error:" .$sql . "<br>". $conn -> error;

 }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width,initial-scale=1.0">
    <title>Öğrenci Kayıt Formu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup-form">
        <form action="index.php" method = "POST" >
            <h1>Kayıt Ol</h1>
            <input type="text" placeholder="Ad-Soyad" name="full_name" class="txt">
            <input type="email"placeholder="Email" name="email" class="txt">
            <input type="radio" name="erkek"/> ERKEK
            <input type="radio" name="kadin"/> KADIN
            <input type="submit" value="Gönder">
        </form>
    </div>
</body>
</html>    
