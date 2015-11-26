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
                    <a class="navbar-brand active button hvr-float-shadow" href="<?php echo URL ?>index.php/home/indexRegistrado">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL ?>index.php/home/categoriasRegistrado" class="button hvr-float-shadow">Categorías<span class="sr-only"></span></a></li>
                        <li><a href="<?php echo URL ?>index.php/home/eventosRegistrado" class="button hvr-float-shadow">Eventos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button hvr-wobble-top glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <img src="<?php echo URL ?>image/perfil.jpg" class="perfil"/>
                                <li><a href="#" class="button hvr-shutter-out-horizontal" data-toggle="modal" data-target="#myModalModificar">Modificar Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" class="button hvr-shutter-out-horizontal" data-toggle="modal" data-target="#myModalItinerario">Ver mi Itinerario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo URL ?>index.php/home/index" class="button hvr-shutter-out-horizontal">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?php echo URL ?>index.php/home/busquedaRegistrado">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Realiza tu busqueda">
                        </div>
                        <button type="submit" class="btn btn-danger glyphicon glyphicon-search button hvr-pop"></button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header>
    <!-- Modal -->
    <div class="modal fade" id="myModalItinerario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mi Itinerario</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-condensed transparent">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sitio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Basílica</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"> Ver sitio</i></a> 
                                    <select class="btn btn-info btn-sm">
                                        <option>Asistió?</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select> 
                                    <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"> Eliminar</i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Parque Cabal</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"> Ver sitio</i></a> 
                                    <select class="btn btn-info btn-sm">
                                        <option>Asistió?</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select> 
                                    <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"> Eliminar</i></a></td> 
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger button hvr-bubble-left" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modificar Mis Datos</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal registro">
                        <div>
                            <label for="exampleInputName2">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputName2" value="Pepito">
                        </div>
                        <div>
                            <label for="exampleInputEmail2">Apellidos</label>
                            <input type="text" class="form-control" id="exampleInputEmail2" value="Perez">
                        </div><br>
                        <div>
                            <label for="exampleInputName2">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputName2" value="pepito@gmail.com">
                        </div>
                        <br>
                        <div>
                            <label for="exampleInputName2">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputName2" placeholder="Escribe una contraseña">
                        </div>
                        <div>
                            <label for="exampleInputEmail2"></label>
                            <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Confirma la contraseña">
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

    <div class="container-fluid fondo1">
        <div class="row">
            <div class="col-xs-12 col-md-12 ">
                <div class="carrusel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo URL ?>image/b1.jpg" alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/b2.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/b3.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo URL ?>image/b4.jpg" alt="...">
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

        </div>
    </div>
    <div class="container-fluid fondo1">
        <div class="row main">
            <div class="posts col-xs-12 col-md-9">
                <div class="miga-de-pan">
                    <ol class="breadcrumb">
                        <li><a href="#">Sitios</a></li>
                        <li><a href="#">Eventos</a></li>
                    </ol>
                </div> 
                <div class="post clearfix">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/d1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Sitio 1</h3>
                                    <p>Pequeña descripción del sitio 1</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver sitio</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/d3.jpg" alt="...">
                                <div class="caption">
                                    <h3>Sitio 2</h3>
                                    <p>Pequeña descripción del sitio 2</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver sitio</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/d5.jpg" alt="...">
                                <div class="caption">
                                    <h3>Sitio 3</h3>
                                    <p>Pequeña descripción del sitio 3</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver sitio</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Evento 1</h3>
                                    <p>Pequeña descripción del evento 1</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver evento</a></p>
                                </div>
                            </div>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/3.jpg" alt="...">
                                <div class="caption">
                                    <h3>Evento 2</h3>
                                    <p>Pequeña descripción del evento 2</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver evento</a></p>
                                </div>
                            </div>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo URL ?>image/5.jpg" alt="...">
                                <div class="caption">
                                    <h3>Evento 3</h3>
                                    <p>Pequeña descripción del evento 3</p>
                                    <p><a href="#" class="btn btn-warning" role="button">Ver evento</a></p>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="center-block">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>  
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;<span class="sr-only">Anterior</span></a></li>  

                        </ul>  
                    </div>
                </nav>
            </div>
            <aside class="col-md-3 hidden-xs hidden-sm">
                <h4>Eventos Destacados</h4>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>
                <br>
                <h4>Sitios Destacados</h4>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Basílica</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Basílica</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Basílica</h4>
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </a>

            </aside>
        </div>
    </div>

    <div class="container-fluid categorias">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a1.jpg" alt=""></a>
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
    <div class="container comentarios">
        <h1 class="text-comment">Escribe un Comentario</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <form class="form-horizontal">
                    <div class="form-group has-success ">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group has-success ">
                        <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label for="inputPassword3" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" type="password" id="inputPassword3" placeholder="Escribe aquí tu comentario..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default button hvr-radial-out">Enviar</button>
                        </div>
                    </div>
                </form>
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
                    <h4>Cuenta</h4>
                    <ul>
                        <li><a href="#">Modificar perfil</a></li>
                        <li><a href="#">Ver mi itinerario</a></li>
                        <li><a href="#">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
</div>


<?php include DIR . 'view/partial/foot.php' ?>