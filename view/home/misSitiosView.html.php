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
                                                <li><a href="<?php echo URL ?>index.php/home/misSitios" class="button hvr-float-shadow">Panel</a></li>

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

    <div class="container-fluid fondoPanel">
        <aside class="col-md-3 panelSitio">
                        <table class="table1">
                            <tr>
                                <td class="floatt">
                                    <div class="div0 one ">
                                        <ul class="nav nav-pills nav-stacked ">
                                            <li role="presentation" class="active"><a>Panel Sitios y Eventos</a></li>
                                            <li role="presentation"><a href="<?php echo URL ?>index.php/home/misSitios">Modificar</a></li>
                                            <li role="presentation"><a href="<?php echo URL ?>index.php/home/crearSitios">Crear sitio</a></li>
                                            <li role="presentation"><a href="<?php echo URL ?>index.php/home/crearEventos">Crear eventos</a></li>
                                        </ul>
                                    </div>
                                </td>

                            </tr></table>
                    </aside>
        
        <div class="row">
        <div class="col-md-4 misSitios">
            
         <table class="table1">
             <tr>

                    <td>
                            <h1 class="text-center"><span>Mis Sitios</span></h1>

                            <ul class="list-group ">
                                <li class="list-group-item transparent ">Navidad para todos <span>  
                                        <a href="<?php echo URL ?>index.php/home/modificarSitios" class="btn glyphicon glyphicon-pencil btn-xs"></a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target="#myModalEliminar"></a></span>
                                </li>
                                <li class="list-group-item transparent">Semana Santa <span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"></a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent">Parques Wifi <span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent">Futbol Femenino<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"></a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>

                            </ul>
                    </td>
            <!--        <td class="space2"></td>-->
                </tr></table>   
        </div>
                    <div class="col-md-4 misSitios">

            <table class="table1"><tr>
                    <td>
                            <h1 class="text-center"><span><span>Mis Eventos</span></span></h1>
                            <span><ul class="list-group ">
                                <li class="list-group-item transparent">BugaTatto<span>
                                        <a href="<?php echo URL ?>index.php/home/modificarEventos" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target="#myModalEliminar"> </a></span></li>
                                <li class="list-group-item transparent">Feria de Buga<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent">Buga Digital<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                                                <li class="list-group-item transparent">FestiBuga<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs">  </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                </ul>            </span>
                        </div>
                    </td></tr></table>
            
        </div>
    </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="myModalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
      </div>
      <div class="modal-body">
        ¿Está seguro qué desea eliminar este sitio o evento?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
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