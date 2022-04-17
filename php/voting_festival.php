<?php
    //Connect to database;
    $con = mysqli_connect("localhost", "root", "", "folketsbajer_database");
    //Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
    else {
        echo '<p>Connection to MySQL database successfully established.</p>';
    }
    // Get POST records from HTML form
    //$voteID = $_POST['votingModalFestival']; //<-- indsæt i stedet for '0' i $sql
    $voteValue = $_POST['voteFestival'];
    //Insert data into database with sql code:
    $sql = "INSERT INTO voting_festival (id, votevalue)
    VALUES('0', '$voteValue');";
    //Run it back
    $rs = mysqli_query($con, $sql)
?>


<html lang="en">
    <head>
        <meta http-equiv="refresh" content="1; URL=../html/kategori_a.html" />
    </head>
</html>