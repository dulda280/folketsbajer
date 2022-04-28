<?php
require_once "../php/config.php";

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlFestival = "SELECT id, votevalue FROM voting_festival";
$resultFestival = $conn->query($sqlFestival);

$sqlForFest = "SELECT id, votevalue FROM voting_forfest";
$resultForFest = $conn->query($sqlForFest);

$cTopFesti = 0;
$tPilsFesti = 0;
$tClassFesti = 0;

$cTopFor = 0;
$tPilsFor = 0;
$tClassFor = 0;

if ($resultFestival->num_rows > 0){
    
}


?>

<?php

echo "<section class='card-container'>";
if ($resultFestival->num_rows > 0) {
    // output data of each row
    while($row = $resultFestival->fetch_assoc()) {

        echo "<article class='card'>";
            echo "<h3 class='card__title center'>" . $row['id'] . "</h3>";
            echo "<br>";
            echo "<div class='image-container'>";
                echo "<img class='card_thumbnail' src='../pics/tbclas.jpg'>";
            echo "</div>";
            echo "<br>";
            echo "<main class='card__description'>";
                echo "<p class='beer_description center'>Dette er en meget fin tuborg classic i en endnu finere grøn dåse</p>";
            echo "</main>";
            echo "<br>";
            echo "<div class='flip-card'>";
                echo "<div class='flip-card-inner'>";
                    echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                        echo "<h1 id='sum-number-index'>" . $row['votevalue'] .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
                    echo "</div>";
                    echo "<div class='flip-card-back'>";
                        echo "<div class='rating-score'>";
                            echo "<h5 class='rating-title' id='rating-title-x'>Smag</h5>";
                            echo "<img src='../pics/star-filled.png' class='rating-star' alt=''>";
                            echo "<img src='../pics/star-filled.png' class='rating-star' alt=''>";
                            echo "<img src='../pics/star-filled.png' class='rating-star' alt=''>";
                            echo "<img src='../pics/star-filled.png' class='rating-star' alt=''>";
                            echo "<img src='../pics/star-unfilled.png' class='rating-star' alt=''>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</article>";
    }
} else {
    echo "NOT ENOUGH DATA TO SELECT A TOP 3/5";
}
echo "</section>";

?>


