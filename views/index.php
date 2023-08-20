<?php
require_once('resources/initiator.php')
?>

<link rel="stylesheet" href="../css/index.css" />
<LINK REL=StyleSheet HREF="../css/slider.css" TYPE="text/css" MEDIA=screen>
<script src="../js/index.js"></script>

<?php
require_once('resources/header-1.php')
?>

<div class="collection">
        <p id="text-colletion1">NEW</p>
        <p id="text-colletion2">COLLECTION</p>
</div>

<div class="category-title">
    <h6>CATEGORIAS</h6>
</div>


<nav class="space-slider">
    <!-- empiza carrucel de imagenes -->

    <div class="slider">
        <div class="slides">
            <!-- botones  radio star -->
            <input type="radio" name="radio-btn" id="radio1" class="bt" />
            <input type="radio" name="radio-btn" id="radio2" class="bt" />
            <input type="radio" name="radio-btn" id="radio3" class="bt" />
            <input type="radio" name="radio-btn" id="radio4" class="bt" />
            <!-- slide imajenes inicio -->
            <div class="slide first">
                <div class="section-slider-cat">
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                </div>
            </div>
            <div class="slide first">
                <div class="section-slider-cat">
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                </div>
            </div>
            <div class="slide first">
                <div class="section-slider-cat">
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                </div>
            </div>
            <div class="slide first">
                <div class="section-slider-cat">
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                    <a class="card-slider-cat" href="#">
                        <img class="img-slider-cat" src="" alt="">
                    </a>
                </div>
            </div>
            <!-- slide imagenes final -->
        </div>
    </div>
    <!-- termina callusel de imagenes -->

    <!-- manual de navegacion nicio -->
    <div class="navegacion-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>

</nav>



<div class="bestSeller">
    <div class="container">
        <div class="row">
            <!-- Lado izquierdo -->
            <div class="col-md-4">
                <img src="../img/50.jpg" alt="Imagen 1" class="img-fluid img-padding ">
            </div>
            <!-- En medio -->
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <p id="bestSellerP1">LO MÁS</p>
                <p id="bestSellerP2">VENDIDO</p>
                <a class="btn btn-primary">VER</a>
            </div>
            <!-- Lado derecho -->
            <div class="col-md-4">
                <img src="../img/50.jpg" alt="Imagen 2" class="img-fluid img-padding">
            </div>
        </div>
    </div>
</div>
<div class="category-title">
    <h6>MARCAS</h6>
</div>
<div class="space-slider">
    <div class="slider">
        <div class="slide first">
            <div class="section-slider-cat">
                <a class="card-slider-cat" href="#">
                    <img class="img-slider-cat" src="" alt="">
                </a>
                <a class="card-slider-cat" href="#">
                    <img class="img-slider-cat" src="" alt="">
                </a>
                <a class="card-slider-cat" href="#">
                    <img class="img-slider-cat" src="" alt="">
                </a>
                <a class="card-slider-cat" href="#">
                    <img class="img-slider-cat" src="" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php
require_once('resources/footer.php')
?>