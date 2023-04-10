<?php
if (isset($_POST['email']))
{
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
   $Email1=$_POST['email'];
   echo $sql="SELECT * FROM info WHERE Email='$Email1'"; 
   $query=mysqli_query($connect,$sql);
   if($query)
   {
    echo "Hi";
    $row=mysqli_fetch_array($query);
    echo "<br>";
    if($row>0)
    {
        echo "Here is your Data";
    }
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>";
    echo "Mail ID";
    echo "</th>";
    echo "<th>";
    echo "Password";
    echo "</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo $row['Email'];
    echo "</td>";
    echo "<td>";
    echo $row['Password'];
    echo "</td>";
    echo "</tr>";
    while($row=mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>";
    echo $row['Email'];
    echo "</td>";
    echo "<td>";
    echo $row['Password'];
    echo "</td>";
    echo "</tr>";
    }

   }

?>