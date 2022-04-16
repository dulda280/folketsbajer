<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2D348A">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white" href="#">Folkets Bajer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" style="color: white" href="../html/index.html">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white" href="../html/toppen.html">Toppen</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Øl Kategorier
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../html/kategori_a.html">Bedste Pilsner</a></li>
                        <li><a class="dropdown-item" href="#">Bedste Festivalsbajer</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../html/om_os.html">Om Os</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link white-color btn btn-outline-primary " href="../php/register.php">Sign Up</a>
                <a class="nav-link white-color btn btn-outline-primary" href="../php/login.php">Login</a>
            </form>
        </div>
    </div>
</nav>

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
                                        <div class="rating-title"><h5 id="rating-title-x">Smag</h5></div>
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-filled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                    </div>
                                    <div class="rating-score">
                                        <h5 id="rating-title-y">Chuckability</h5>
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                    </div>
                                    <div class="rating-score">
                                        <h5 id="rating-title-z">Design</h5>
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
                                        <img src="../pics/star-unfilled.png" class="rating-star" alt="">
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
