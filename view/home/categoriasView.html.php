<?php include DIR . 'view/partial/head.php' ?>

<div class="container-fluid">
    <header class="container-fluid">
        <div class="jumbotron">
            <div class="container-fluid">

            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container barra">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand button hvr-float-shadow" href="<?php echo URL ?>index.php/home/index">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL ?>index.php/home/categorias" class="button hvr-float-shadow active">Categorías<span class="sr-only"></span></a></li>
                        <li><a href="<?php echo URL ?>index.php/home/eventos" class="button hvr-float-shadow">Eventos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#myModal" class="button hvr-pulse">Registrarse</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button hvr-wobble-top glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Iniciar sesión<span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <div class="formulario-ingreso">
                                    <h1 class="glyphicon glyphicon-user"> <span class="ingresar2">Ingresa</span></h1>
                                    <form class="form-horizontal formulario1" action="<?php echo URL ?>index.php/home/indexRegistrado">
                                        <div class="form-group">
                                            <label for="name"></label>
                                            <input type="text" class="form-control" id="name" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass"></label>
                                            <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-info button hvr-bubble-right">Ingresar</button>
                                    </form>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?php echo URL ?>index.php/home/busqueda">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Realiza tu busqueda">
                        </div>
                        <button type="submit" class="btn btn-danger glyphicon glyphicon-search button hvr-pop"></button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Registro</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal registro">
                            <div>
                                <label for="exampleInputName2">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu nombre">
                            </div>
                            <div>
                                <label for="exampleInputEmail2">Apellidos</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Escribe tus apellidos">
                            </div><br>
                            <div>
                                <label for="exampleInputName2">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputName2" placeholder="Escribe tu correo">
                            </div>
                            <div>
                                <label for="exampleInputEmail2"></label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Confirma tu correo">
                            </div><br>
                            <div>
                                <label for="exampleInputName2">Contraseña</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe una contraseña">
                            </div>
                            <div>
                                <label for="exampleInputEmail2"></label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Confirma la contraseña">
                            </div>
                        </form>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger button hvr-bubble-left" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success button hvr-bubble-right">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="container-fluid fondo1">
        <div class="row">
            <div class="col-xs-12 col-md-4 ">
                <h3 class="textcategoria">Cultura y Tradición</h3>
                <div class="demo-3">
                        <figure>
                            <a href="#"><img src="<?php echo URL ?>image/c1.jpg" class="img-responsive imgcate" /></a>
                            <a href="#"><figcaption>
                                    <h2></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                </figcaption></a>
                        </figure>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <h2 class="textcategoria">Histórico</h2>
                <div class="demo-3">
                        <a href="<?php echo URL ?>index.php/home/sitios"><figure>
                                <img src="<?php echo URL ?>image/c2.jpg" class="img-responsive imgcate" />
                                <figcaption>
                                    <h2></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                </figcaption>
                            </figure></a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <h2 class="textcategoria">Ecoturístico</h2>
                <div class="demo-3">
                        <figure>
                            <img src="<?php echo URL ?>image/c3.jpg" class="img-responsive imgcate"/>
                            <figcaption>
                                <h2></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            </figcaption>
                        </figure>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-md-4 ">
                <h2 class="textcategoria">Religioso</h2>
                <div class="demo-3">
                        <figure>
                            <img src="<?php echo URL ?>image/c4.jpg" class="img-responsive imgcate"/>
                            <figcaption>
                                <h2></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            </figcaption>
                        </figure>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <h2 class="textcategoria">Entretenimiento</h2>
                <div class="demo-3">
                        <figure>
                            <img src="<?php echo URL ?>image/c5.jpg" class="img-responsive imgcate"/>
                            <figcaption>
                                <h2></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            </figcaption>
                        </figure>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 ">
                <h2 class="textcategoria">Deporte</h2>
                <div class="demo-3">
                        <figure>
                            <img src="<?php echo URL ?>image/c6.jpg" class="img-responsive imgcate"/>
                            <figcaption>
                                <h2></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            </figcaption>
                        </figure>
                </div>
            </div>
        </div>
    </div>





    <footer>
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-6 col-xs-6 footer-grid">
                    <h4>Categorías</h4>
                    <ul>
                        <li><a href="#">Cutural</a></li>
                        <li><a href="#">Histórico</a></li>
                        <li><a href="#">Ecoturístico</a></li>
                        <li><a href="#">Religioso</a></li>
                        <li><a href="#">Entretenimiento</a></li>
                        <li><a href="#">Deportes</a></li>

                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 footer-grid foot1">
                    <ul>
                        <li><a href="#">Iniciar sesión</a></li>
                        <li><a href="#">Registrarse</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
</div>


<?php include DIR . 'view/partial/foot.php' ?>