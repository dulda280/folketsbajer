
<?php
    session_start();

    if (isset($_REQUEST['variable'])){
        $variable = $_REQUEST['variable'];
        $_SESSION['temp'] = $variable;
    }

?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/kategori_style.css">
        

        <title>Folketsbajer: Bedste Pilsner</title>
    </head>
    <body>

        <?php include_once("../page-predefines/navbar.php");?>

        <div class="mainHeader">
            <br>
            <h1>
                ØL TIL ALLE LEJLIGHEDER
            </h1>

            <div class="subHeader">
                <h2>
                Hvad skal dig og din øl opleve?
                </h2>
            </div>
            <br>
        </div>


        <div class="bodyDiv">

            <div class="subsubHeader">
                <h3>
                Tid til festival? Her er de øl der smager bedst efter flere timer i solen
                </h3>
            </div>
            <hr>
            <div class="bajerCategoryDiv" id="festival">

                <br>
                <div class="bajerBoxDiv" id="bbox1Kat1" name="ceresTopFestival" value="CeresTop">
                    <div class="bajerBoxImgDiv text-center">
                        <img src="../pics/ceresTop.jpeg" class="imgBajerBox" alt="ceresTop">
                    </div>
                    <div class="card-body">
                        <div class="cardHeaderDiv">
                            <h5 class="card-title">Ceres Top</h5>
                        </div>
                        <div class="cardTextDiv">
                            <p class="card-text">Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder... men kan den bundes ved stuetemperatur? Stem nu!</p>
                            <div class="votingdiv">
                                <form method="post">
                                <!-- Button trigger modal -->
                                    <button onclick="setValue('Ceres Top')" type="button" class="btn btn-primary hvr-outline-out" data-bs-toggle="modal" data-bs-target="#votingModalFestival" name="CTOPfestival" id="CTOPID" value="Ceres Top" >
                                    Stem her!
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bajerBoxDiv" id="bbox2Kat1" name="tbpilsnerFestival" value="tbPilsner">
                    <div class="bajerBoxImgDiv text-center">
                        <img src="../pics/tbpil.jpg" class="imgBajerBox" alt="ceresTop">
                    </div>
                    <div class="card-body">
                        <div class="cardHeaderDiv">
                            <h5 class="card-title">Tuborg Pilsner</h5>
                        </div>
                        <div class="cardTextDiv">
                            <p class="card-text">Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder... men kan den bundes ved stuetemperatur? Stem nu!</p>
                            <div class="votingdiv">
                                <!-- Button trigger modal -->
                                    <button onclick="setValue('Tuborg Pilsner')" type="button" class="btn btn-primary hvr-outline-out" data-bs-toggle="modal" data-bs-target="#votingModalFestival">
                                    Stem her!
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bajerBoxDiv" id="bbox3Kat1" name="tbClassicFestival" value="tbClassic">
                    <div class="bajerBoxImgDiv text-center">
                        <img src="../pics/tbclas.jpg" class="imgBajerBox" alt="ceresTop">
                    </div>
                    <div class="card-body">
                        <div class="cardHeaderDiv">
                            <h5 class="card-title">Tuborg Classic</h5>
                        </div>
                        <div class="cardTextDiv">
                            <p class="card-text">Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder... men kan den bundes ved stuetemperatur? Stem nu!</p>
                            <div class="votingdiv">
                                <!-- Button trigger modal -->
                                    <button onclick="setValue('Tuborg Classic')" type="button" class="btn btn-primary hvr-outline-out" data-bs-toggle="modal" data-bs-target="#votingModalFestival">
                                    Stem her!
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="votingModalFestival" name="votingModalFestival" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stem på en bajer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="votingForm" method="post" action="../php/voting_festival.php">
                                    <input type="radio" id="1star" name="voteFestival" value="1">
                                    <label for="1star">1 stjerne</label>
                                    <input type="radio" id="2star" name="voteFestival" value="2">
                                    <label for="2star">2 stjerner</label>
                                    <input type="radio" id="3star" name="voteFestival" value="3">
                                    <label for="3star">3 stjerner</label>
                                    <input type="radio" id="4star" name="voteFestival" value="4">
                                    <label for="4star">4 stjerner</label>
                                    <input type="radio" id="5star" name="voteFestival" value="5">
                                    <label for="5star">5 stjerner</label>
                                    
                                    <div class="submitVote" style="text-align: center; padding-top: 2em;">
                                        <input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-primary" style="align-items: center;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="subsubHeader">
                <h3>
                    Fredag aften inden byen? Her er de bedste bajere til forfesten inden du skal ud og smadre floor
                </h3>
            </div>
            <hr>
            <div class="bajerCategoryDiv" id="forfest">
                <br>
                <div class="bajerBoxDiv" id="bbox1Kat2" name="ceresTopForfest" value="CeresTop">
                    <div class="bajerBoxImgDiv text-center">
                        <img src="../pics/ceresTOP.jpeg" class="imgBajerBox" alt="ceresTop">
                    </div>
                    <div class="card-body">
                        <div class="cardHeaderDiv">
                            <h5 class="card-title">Ceres Top</h5>
                        </div>
                        <div class="cardTextDiv">
                            <p class="card-text">Den lokale klassiker fra Aarhus er en favorit blandt mange Øst-Jyder... men kan den bundes ved stuetemperatur? Stem nu!</p>
                            <div class="votingdiv">
                            <!-- Button trigger modal -->
                                <button onclick="setValue('Ceres Top')" type="button" class="btn btn-primary hvr-outline-out" data-bs-toggle="modal" data-bs-target="#votingModalForfest">
                                Stem her!
                                </button>
                            </div>
                            
                    
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="votingModalForfest" name="votingModalForfest" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stem på en bajer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="votingForm" method="post" action="../php/voting_forfest.php">
                                    <input type="radio" id="1star" name="voteForfest" value="1">
                                    <label for="1star">1 stjerne</label>
                                    <input type="radio" id="2star" name="voteForfest" value="2">
                                    <label for="2star">2 stjerner</label>
                                    <input type="radio" id="3star" name="voteForfest" value="3">
                                    <label for="3star">3 stjerner</label>
                                    <input type="radio" id="4star" name="voteForfest" value="4">
                                    <label for="4star">4 stjerner</label>
                                    <input type="radio" id="5star" name="voteForfest" value="5">
                                    <label for="5star">5 stjerner</label>
                                    
                                    <div class="submitVote" style="text-align: center; padding-top: 2em;">
                                        <input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-primary" style="align-items: center;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            function setValue(variable){
                xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","kategori_a.php?variable="+variable, true);
                xmlhttp.send();
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    </body>
</html>