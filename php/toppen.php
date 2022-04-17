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
    <link rel="stylesheet" href="../css/toppen_style.css">

    <title>Folkets Bajer: Toppen</title>
</head>
<body>

<?php include_once("../page-predefines/navbar.php");?>

<!-- Top Beer Container -->
<div class="top-beer-container">
    <div class="div-generator">
        <div class="beer-card-index">
            <div class="card text-center">
                <div class="beer-card-title">
                    <h2>BEER TITLE</h2>
                </div>
                <div class="image-div text-center">
                    <img class="card-img-top" src="../pics/ceresTOP.jpeg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tuborg Classic</h5>
                    <p class="card-text">Kort introduktion.</p>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front hvr-shutter-in-vertical">
                                <h1 id="sum-number-index">3.8<img src="../pics/star-filled.png" style="width: 15%;height: 15%;margin-bottom: .3em;margin-left: .2em" class="rating-star" alt=""></h1>
                            </div>
                            <div class="flip-card-back">
                                <div class="rating-container">
                                    <div class="rating-score">
                                        <h5 class="rating-title" id="rating-title-x">Smag</h5>
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                    </div>
                                    <div class="rating-score">
                                        <h5 class="rating-title" id="rating-title-y">Chuckability</h5>
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                    </div>
                                    <div class="rating-score">
                                        <h5 class="rating-title" id="rating-title-z">Design</h5>
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/flip-card-onclick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

