<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=PT+Sans&family=Yanone+Kaffeesatz:wght@200&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  <h1>Your message has been sent!</h1>
  <h3>Return to <a href="index.html">Index page</a></h3>

</body>
</html>

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$dbconnect=mysqli_connect('localhost', 'root', '', 'submissions');
$sql = mysqli_query($dbconnect, "INSERT into messages(id,name,surname,email,message) values('','$name','$surname','$email', '$message')");
// if($sql){
//   echo "Data inserted successfully";
// } else {
//   echo "Failed to insert data";
// }

?>