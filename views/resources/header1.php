<?php
require_once('initiator.php');
?>
</head>


<body>
    <header class="navbar navbar-expand-lg navbar-dark BgBlack">
        <div class="container-fluid ">
            <a class="navbar-brand containerlogo center" href="editUser.php">
                <img class="logo" src="../img/BD1.png" alt="Logo" />

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarScroll">
                <ul class="navbar-nav mx-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link categoyHeader" href="#">HOMBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link categoyHeader" href="#">MUJER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link categoyHeader" href="#">ZAPATOS</a>
                    </li>
                </ul>
                <form id="search-form" class="d-flex" role="search">
                    <input class="form-control me-1" type="search" placeholder="Buscar" />
                    <a>
                        <img class="searchImg" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1" />
                    </a>
                </form>
                <a href="">
                    <i class="bi bi-person-circle tamano-icono color-icon"></i>
                </a>
                <a href="">
                    <i class="bi bi-cart tamano-icono color-icon"></i>
                </a>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </div>
    </header>