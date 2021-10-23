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


    $username=$_POST['username'];
    $password=$_POST['password'];
   
    

        echo "<br>";
    echo $sql="INSERT INTO entry (`username`, `password`) VALUES ('$username','$password');";
    
    $query=mysqli_query($connection,$sql);

    if($query)
    {
        echo "<br>";
        echo "Data inserted successfully";
    }

    else
    {
        echo "<br>";
        echo "Error";
        //$sql $connection->error_log("Error occured")
    }

}

?>