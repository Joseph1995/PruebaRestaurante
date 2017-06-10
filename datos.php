<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FusWok</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">

  </head>
  <body>

    <!-- Menu de Navegación -->
    <nav class="navbar navbar-toggleable-md navbar navbar-inverse bg-inverse  sticky-top ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand hidden-lg-up" href="#"><span class="texto1">FusWok</span></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.html">Menú</a>
            </li>

          </ul>

          <a class="navbar-brand hidden-md-down" href="#"><span class="texto1">FusWok</span></a>

         <ul class="navbar-nav ml-auto">
            <form class="form-inline">
            <button class="btn btn-success" type="button">
              <a class="nav-link" href="contacto.html"><i class="fa fa-crosshairs" aria-hidden="true" style="margin-right: 0.5em;"></i>  Ubicación</a></button>

              </button>
             </form>
          </ul>
        </div>
    </nav>

<!--carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="media/1.jpg" alt="First slide">
      <div class="carousel-caption ">
       <h3>Sandwich de Atún</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quibusdam recusandae alias optio, distinctio quo laboriosam repellat esse, suscipit consequuntur, quisquam dolore odio vitae explicabo. Cumque tenetur excepturi fuga est.</p>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="media/2.jpg"  alt="Second slide">
      <div class="carousel-caption ">
       <h3>Rollos de Cerdo</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quibusdam recusandae alias optio, distinctio quo laboriosam repellat esse, suscipit consequuntur, quisquam dolore odio vitae explicabo. Cumque tenetur excepturi fuga est.</p>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="media/3.jpg" alt="Third slide">
      <div class="carousel-caption ">
       <h3>Sandwich Vegetariano</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quibusdam recusandae alias optio, distinctio quo laboriosam repellat esse, suscipit consequuntur, quisquam dolore odio vitae explicabo. Cumque tenetur excepturi fuga est.</p>
     </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>
<section class="container mt-5 pt-5">
<p class="text-center"><span class="promociones">Tú pedido</span></p>
</section>


<?php

echo   "
<div class='container'>
      <div class='card w-100'>
          <div class='card-block'>
            <h3 class='card-title'>". $_GET['Nombre'] . "</h3>
      <div class='d-flex justify-content-between align-items-center'>
            <p class='card-text'> Precio: ".   $_GET['Precio'] . "</p>
            <button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal'>
              <i class='fa fa-check' aria-hidden='true'></i> Confirmar
            </button>

            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Tus datos</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                      <form action=''>
                        <div class='form-group'>
                            <label for='Nombre'>Nombre: </label>
                            <input type='text' class='form-control' placeholder='Escribe tu nombre aquí'>
                        </div>
                        <div class='form-group'>
                            <label for='Nombre'>Dirección: </label>
                            <input type='Email' class='form-control' placeholder='Escribe tu dirección aquí' >
                        </div>
                        <div class='form-group'>
                            <label for='Nombre'>Email: </label>
                            <input type='Email' class='form-control' placeholder='Escribe tu email aquí'>
                        </div>
                        <div class='form-group'>
                            <label for='Nombre'>Telefono: </label>
                            <input type='Email' class='form-control' placeholder='Escribe tu telefono aquí' >
                        </div>
                        <div class='form-group'>
                            <label for='Nombre'>Metodo de Pago: </label>
                            <select class='custom-select'>
                                    <option selected>Efectivo</option>
                                    <option value='1'>Internet</option>
                                    <option value='2'>Datáfono</option>
                                  </select>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancelar</button>
                          <button type='button' class='btn btn-success'>Pedir</button>
                        </div>

                      </form>
                    </div>

                  </div>

                </div>
              </div>
            </div>

      </div>
          </div>
        </div>
</div>        ;  ";

?>

    <!--footer-->

    <footer class="myFooter mt-5 ">

           <div class="container ">
                <h2 class="logo">  <a class="navbar-brand" href="#"><span class="texto1">FusWok</span></a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>


    </footer>




        <!-- Plugins JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>





      </body>
    </html>
