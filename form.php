<?php
echo "welcome";
echo "<br>";
if (isset($_POST['email']))
{
    echo "hi";
    $server="localhost";
    $username="root";
    $password="";
    $database="table1";
    $connect=mysqli_connect($server,$username,$password,$database);
}
   if(!$connect)
   {
    die(mysqli_connect_error());
   }
   echo "<br>";
   echo "Connected";
   $email=$_POST['email'];
   $pass=$_POST['password1'];
   echo "<br>";
   echo $sql="INSERT INTO `info`(`Email`, `Password`) VALUES ('$email','$pass')";
   $query=mysqli_query($connect,$sql);
   if($query){
    echo "Data inserted successfully";
   }
   else{
    echo "Error";
   }
?>