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
        <aside class="col-md-3 panelSitio2">
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
        <div class="col-md-8 crearSitios">
        <form class="form-horizontal form-sitio">
            <div class="form-group col-sm-6">
            <select class="form-control ">
           
  <option>Categoría</option>
</select>
                 </div>
            <div class="form-group col-sm-6">
            <select class="form-control ">
           
  <option>Subcategoría</option>
 
</select>
                 </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
    <div class="col-sm-10">
<textarea class="form-control" rows="5"></textarea>    
    </div>
  </div>
            <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Inicio</label>
    <div class="col-sm-3">
        <input type="date" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
            <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Finalización</label>
    <div class="col-sm-3">
        <input type="date" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
            <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Hora</label>
    <div class="col-sm-2">
        <input type="time" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
            <div class="form-group">
    <label for="exampleInputFile" class="col-sm-2 control-label">Subir Fotos</label>
    <div class="col-sm-5">
    <input type="file" id="exampleInputFile">
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