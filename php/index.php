<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index_style.css">
    <title>Folkets Bajer: Forside</title>
</head>
<body>

<?php include_once("../page-predefines/navbar.php");?>



<div class="mySlideshow">
    <div class="mySlides fade">
        <div class="numbertext">1 / 2</div>
        <img src="../pics/ølass.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 2</div>
        <img src="../pics/strandØL.png" style="width:100%">
        <div class="text"></div>
    </div>


    <span class="prev" onclick="plusSlides(-1)">&#10094;</span>
    <span class="next" onclick="plusSlides(1)">&#10095;</span>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <!---<span class="dot" onclick="currentSlide(3)"></span>--->
</div>

<div class = "fadePic1">
    <img src="../pics/Manman.png" alt="Avatar" class="image" id="ratingPic">
    <div class="overlay" onclick="switchPage()">
        <div class="hovertext">Tryk her for at anmelde din yndlingsøl!</div>
    </div>
</div>

<div class = "fadePic2">
    <img src="../pics/bestbeer.png" alt="Avatar" class="image" id="bestBeerPic">
    <div class="overlay" onclick="switchPage()">
        <div class="hovertext">Tryk her for at browse de bedste brugeranmeldte øl!</div>
    </div>
</div>


<div class = "wrapper">
    <div class = "first">
        <h2 class = "billedTekst1">Har du smagsløgene</h2>
        <h2 class = "billedTekst2">der kan give øl den rating de fortjener?</h2>
    </div>
    <div class = "second">
        <h2 class = "billedTekst3">På udkig efter en ny smagsoplevelse?</h2>
        <h2 class = "billedTekst4">Find ud af hvad andre anbefaler</h2>
    </div>
</div>



<script src="../js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>