<?php

if(isset($_POST['Name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $connection=mysqli_connect($server,$username,$password,"scholarship");
    
    if(!$connection)
    {
        die("connection to the database nahi hua kyu ki".mysqli_connect_error());
    }
    echo "Connected successfully";
    $Name=$_POST['Name'];
    $Father_name=$_POST['Father_name'];

    $sql="SELECT * FROM `registration` WHERE Name='$Name' and Father_name='$Father_name'";
    $query=mysqli_query($connection,$sql);
    
    if($query)
    {
        echo "<br>";
        echo "Here is your data";
        $r=mysqli_fetch_array($query);
        if($r>0)
   {
       echo "<br>";
       echo "<table border=1>";
         echo "<tr>";
         echo "<th>";
         echo "Name";
         echo "</th>";
         echo "<th>";
         echo "Father Name";
         echo "</th>";
         echo "<th>";
         echo "Surname";
         echo "</th>";
         echo "<th>";
         echo "Email id";
         echo "</th>";
         echo "<th>";
         echo "Address";
         echo "</th>";
         echo "<th>";
         echo "Mob.no.";
         echo "</th>";
         echo "<th>";
         echo "D.O.B";
         echo "</th>";
         echo "<th>";
         echo "Gender";
         echo "</th>";
         echo "<th>";
         echo "Caste";
         echo "</th>";
         echo "<th>";
         echo "Section";
         echo "</th>";
         echo "<th>";
         echo "Result";
         echo "</th>";
         echo "<th>";
         echo "PassingYear";
         echo "</th>";
         echo "<th>";
         echo "Income";
         echo "</th>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>";
         echo $r['Name'];
         echo "</td>";
         echo "<td>";
         echo $r['Father_name'];
         echo "</td>";
         echo "<td>";
         echo $r['Surname'];
         echo "</td>";
         echo "<td>";
         echo $r['Email_id'];
         echo "</td>";
         echo "<td>";
         echo $r['Address'];
         echo "</td>";
         echo "<td>";
         echo $r['Mobile_no'];
         echo "</td>";
         echo "<td>";
         echo $r['Date'];
         echo "</td>";
         echo "<td>";
         echo $r['Gender'];
         echo "</td>";
         echo "<td>";
         echo $r['Caste'];
         echo "</td>";
         echo "<td>";
         echo $r['Section'];
         echo "</td>";
         echo "<td>";
         echo $r['Result'];
         echo "</td>";
         echo "<td>";
         echo  $r['Passing_Year'];
         echo "</td>";
         echo "<td>";
         echo $r['Income'];
         echo "</td>";
         echo "</tr>";
         echo "</table>";
   }
}
else 
{
  echo "<br>";
  echo "Error";
  $sql=$connection->error_log("Error Occured");
}
}
?>