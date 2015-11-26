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
                    <a class="navbar-brand active button hvr-float-shadow" href="<?php echo URL ?>index.php/home/index">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL ?>index.php/home/categorias" class="button hvr-float-shadow">Categorías<span class="sr-only"></span></a></li>
                        <li><a href="<?php echo URL ?>index.php/home/eventos" class="button hvr-float-shadow">Eventos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#myModal" class="button hvr-pulse">Registrarse</a></li>

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
            <div class="col-xs-12 col-md-7 ">
                <div class="">
                    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo URL ?>image/1.jpg" alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/2.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/3.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/4.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container col-xs-12 col-md-5">
                <div class="formulario">
                    <h1 class="glyphicon glyphicon-user"> <span class="ingresar">Ingresa</span></h1>
                    <form class="form-horizontal formulario1" action="<?php echo URL ?>index.php/home/indexRegistrado">
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu Nombre">
                        </div>
                        <div class="form-group">
                            <label for="pass"></label>
                            <input type="password" class="form-control" id="pass" placeholder="Escribe tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-info button hvr-bubble-right">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid categorias">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria img-responsive" src="<?php echo URL ?>image/a1.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Ecoturísmo</h3>
                        <p>Se hallará los sitios, las agencias y los hoteles de turismo ecológico.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a2.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Religioso</h3>
                        <p>Encontrará iglesias, parroquias y eventos relacionados.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a3.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Historíco</h3>
                        <p>Se visualizará sitios que tienen que ver con la historia de la ciudad.</p>
                    </div>
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