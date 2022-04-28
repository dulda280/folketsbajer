<?php
require_once "../php/config.php";

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//////Festival
$sqlFestival = "SELECT id, votevalue FROM voting_festival";
$resultFestival = $conn->query($sqlFestival);

$cTopFesti = 0;
$cTopFestiCounter = 0;

$tPilsFesti = 0;
$tPilsFestiCounter = 0;

$tClassFesti = 0;
$tClassFestiCounter = 0;



while($row = $resultFestival->fetch_assoc()){
    if($row['id'] === "Ceres Top"){
        $cTopFesti += $row['votevalue'];
        $cTopFestiCounter += 1;

    }
    elseif($row['id'] === "Tuborg Pilsner"){
        $tPilsFesti += $row['votevalue'];
        $tPilsFestiCounter += 1;
    }
    elseif($row['id'] === "Tuborg Classic"){
        $tClassFesti += $row['votevalue'];
        $tClassFestiCounter += 1;
    }
}
if($cTopFesti > 0 && $cTopFestiCounter > 0){
    $cTopFesti = round($cTopFesti/$cTopFestiCounter, 1);
    
}
if($tPilsFesti > 0 && $tPilsFestiCounter > 0){
    $tPilsFesti = round($tPilsFesti/$tPilsFestiCounter, 1);
    
}
if($tClassFesti > 0 && $tClassFestiCounter > 0){
    $tClassFesti = round($tClassFesti/$tClassFestiCounter, 1);
    
}


echo "<section class='card-container'>";
if ($cTopFesti > $tPilsFesti && $cTopFesti > $tClassFesti) {
    // output data of each row
    
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Festivalbajer: <br> Ceres Top" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/ceresTOP.jpeg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $cTopFesti .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
elseif ($tPilsFesti > $cTopFesti && $tPilsFesti > $tClassFesti) {
    // output data of each row
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Festivalbajer: <br> Tuborg Pilsner" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/tbpil.jpg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>En sand dansk klassiker</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $tPilsFesti .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
elseif ($tClassFesti > $cTopFesti && $tClassFesti > $tPilsFesti) {
    // output data of each row
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Festivalbajer: <br> Tuborg Classic" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/tbclas.jpg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>En sand dansk klassiker, men sådan lidt mere classic</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $tClassFesti .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
else {
    echo "NOT ENOUGH DATA TO SELECT A TOP 3/5";
}

//////Forfest 
$sqlForFest = "SELECT id, votevalue FROM voting_forfest";
$resultForFest = $conn->query($sqlForFest);


$cTopFor = 0;
$cTopForCounter = 0;

$tPilsFor = 0;
$tPilsForCounter = 0;

$tClassFor = 0;
$tClassForCounter = 0;

while($row = $resultForFest->fetch_assoc()){
    if($row['id'] === "Ceres Top"){
        $cTopFor += $row['votevalue'];
        $cTopForCounter += 1;

    }
    elseif($row['id'] === "Tuborg Pilsner"){
        $tPilsFor += $row['votevalue'];
        $tPilsForCounter += 1;
    }
    elseif($row['id'] === "Tuborg Classic"){
        $tClassFor += $row['votevalue'];
        $tClassForCounter += 1;
    }
}
if($cTopFor > 0 && $cTopForCounter > 0){
    $cTopFor = round($cTopFor/$cTopForCounter, 1);
    
}
if($tPilsFor > 0 && $tPilsForCounter > 0){
    $tPilsFor = round($tPilsFor/$tPilsForCounter, 1);
    
}
if($tClassFor > 0 && $tClassForCounter > 0){
    $tClassFor = round($tClassFor/$tClassForCounter, 1);
    
}
if ($cTopFor > $tPilsFor && $cTopFor > $tClassFor) {
    // output data of each row
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Forfestbajer: <br> Ceres Top" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/ceresTOP.jpeg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $cTopFor .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
elseif ($tPilsFor > $cTopFor && $tPilsFor > $tClassFor) {
    // output data of each row
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Forfestbajer: <br> Tuborg Pilsner" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/tbpil.jpg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>En sand dansk klassiker</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $tPilsFor .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
elseif ($tClassFor > $cTopFor && $tClassFor > $tPilsFor) {
    // output data of each row
    echo "<article class='card'>";
        echo "<h3 class='card__title center'>" . "Mest Populære Forfestbajer: <br> Tuborg Classic" . "</h3>";
        echo "<br>";
        echo "<div class='image-container'>";
            echo "<img class='card_thumbnail' src='../pics/tbclas.jpg'>";
        echo "</div>";
        echo "<br>";
        echo "<main class='card__description'>";
            echo "<p class='beer_description center'>En sand dansk klassiker, men sådan lidt mere classic</p>";
        echo "</main>";
        echo "<br>";
        echo "<div class='flip-card'>";
            echo "<div class='flip-card-inner'>";
                echo "<div class='flip-card-front hvr-shutter-in-vertical'>";
                    echo "<h1 id='sum-number-index'>" . $tClassFor .  "<img src='../pics/star-filled.png' style='margin-bottom: .3em;margin-left: .2em' class='rating-star' alt=''></h1>";
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
else {
    echo "NOT ENOUGH DATA TO SELECT A TOP 3/5";
}
echo "</section>";

?>


