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
    $Father_Name=$_POST['Father_name'];
    $Surname=$_POST['Surname'];
    $Email_id=$_POST['Email_id'];
    $Address=$_POST['Address'];
    $Mob=$_POST['Mobile_no'];
    $DOB=$_POST['Date'];
    $Gender=$_POST['Gender'];
    $Caste=$_POST['Caste'];
    $Section=$_POST['Section'];
    $Result=$_POST['Result'];
    $Passing_year=$_POST['Passing_Year'];
    $Income=$_POST['Income'];
    

        echo "<br>";
    echo $sql="INSERT INTO `registration`(`Name`, `Father_name`, `Surname`, `Email_id`, `Address`, `Mobile_no`, `Date`, `Gender`, `Caste`, `Section`, `Result`, `Passing_Year`, `Income`) 
    VALUES ('$Name','$Father_Name','$Surname','$Email_id','$Address','$Mob','$DOB','$Gender','$Caste','$Section','$Result','$Passing_year','$Income')";
    
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
        $sql= $connection->error_log("Error occured");
    }
}

?>