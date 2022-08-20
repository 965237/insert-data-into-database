<?php

$db_host="localhost";
$name ="root";
$password="";
$dbname ="test_db";

$conn=mysqli_connect($db_host, $name, $password, $dbname);
if(!$conn){
    die("connection failed"); 
}
echo " connected successfully <BR>";

if(isset($_REQUEST['submit'])){
    echo "submit button is clicked <br>";
   
    $username = $_REQUEST['name'];
    $ROLLNO = $_REQUEST['rollno'];
    $ADDRESS = $_REQUEST['address'];
}

 $sql = "INSERT INTO student (name,rollno,adress) VALUES('$username' ,'$ROLLNO' ,'$ADDRESS' )";
  if(mysqli_query($conn,$sql)){
    echo "new record inserted successfully ";
 }else{
    echo "record  is not saved ";
 } 
?>

<html>
  <body>
    <form action="" method="POST">
    
      Name :<input type="text" name="name"> <BR> <BR>
      Rollno :<input type="text" name="rollno"> <BR> <bR>
      Address :<input type="text" name="address"> <BR> <BR>
      <input type="submit" name="submit">
</form>
</body>
</html>
