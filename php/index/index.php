<?php  include("../registro/database.php")     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index/style.css">
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.min.css">
    <title>Llandin | Inicio</title>
</head>
<body>
    <div id="principal">
        <header>
            <nav class="navbar bg-light">
                <div id="container_navbar" class="container-fluid">
                  <a class="navbar-brand">Navbar</a>
                  <a class="navbar-brand">Navbar</a>
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                            <li><a class="dropdown-item" href="#">Hogar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Los mas vendidos</a></li>
                          </ul>
                    </li>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
        </header>





        <section>
            <article>
                <div id="container_tecnologia">
                    <h1 class="py-5 text-center"><i>Tecnologia</i></h1>

                        <p class="fs-5 text-center">
                            En esta seccion se encontraran productos variados de tecnologia. Nuestra tienda cuenta con productos de muy buena calidad y accessible para cualquier usuario.<br>
                            En las imagenes que se encontraran debajo de este mensaje van a estar ubicados los productos que se encuentran en stock, si tiene alguna duda <a>comunicarse</a> inmediatamente.
                        </p>

                            <div id="carrousel_celulares" class="carousel slide text-center d-inline-block" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="../../images/productos/celulares/celu1.png" class="px-5 w-40 m-auto">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="../../images/productos/celulares/celu2.png" class="px-5 w-40 m-auto">
                                  </div>
                                </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carrousel_celulares" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carrousel_celulares" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                            </div>

                            <div id="carrousel_parlantes" class="carousel slide text-center d-inline-block" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="../../images/productos/parlantes/parlante_portatil_1.png" class="px-5 w-20 m-auto">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="../../images/productos/parlantes/parlante_portatil_2.png" class="px-5 w-20 m-auto">
                                  </div>
                                </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carrousel_parlantes" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carrousel_parlantes" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                            </div>
                            
                </div>







                
            <!-- </article><div id="container_hogar">
                    <h1 class="py-5 text-center"><i>Hogar</i></h1>

                    <p class="fs-5 text-center">
                        En esta seccion se encontraran productos variados del hogar. Nuestra tienda cuenta con productos de muy buena calidad y accessible para cualquier usuario.<br>
                        En las imagenes que se encontraran debajo de este mensaje van a estar ubicados los productos que se encuentran en stock, si tiene alguna duda <a>comunicarse</a> inmediatamente.
                    </p>
                </div> -->
        </section>





        <footer>

        </footer>
    </div>

    <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>