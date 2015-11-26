


    <?php include DIR . 'view/partial/head.php' ?>
<div class="container-fluid">
    <header class="container-fluid">
        <div class="jumbotron">
            <div class="container-fluid">

            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container barra">
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
                        <li><a href="<?php echo URL ?>index.php/home/missitios" class="button hvr-float-shadow">Backend</a></li>
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

    <div class="header">


    </div>
    <div class="content container">
        <div class="row">
        <div class="aside invisible-xs">
            <div class="inside">
                <!-- -->
                
                <div class="divs">
                    <aside class="inline">
                        <table class="table1">
                            <tr>
                                <td class="floatt">
                                    <div class="div0 one ">
                                        <ul class="nav nav-pills nav-stacked ">
                                            <li role="presentation" class="active"><a href="#">Cuenta</a></li>
                                            <li role="presentation"><a href="#">Perfil</a></li>
                                            <li role="presentation"><a href="#">Mensajes</a></li>
                                            <li role="presentation"><a href="#">Seguridad</a></li>
                                        </ul>
                                    </div>
                                </td>


                            <div class="div0 "></div>

                            </tr></table>
                    </aside>
                </div>
            </div>
                </div>
        </div>
        <div class="main container">

<!--            <p></p>-->
            <table class="table1"><tr>

                    <td>
                        <div class="container div1 two">
                            <h1 class="text-center"><span >Mis Sitios</span></h1>

                            <ul class="list-group ">
                                <li class="list-group-item transparent ">Navidad para todos <span>  
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"></a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"></a></span>
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
                        </div>
                        <div class="inline"></div>
                    </td>
            <!--        <td class="space2"></td>-->
                </tr></table><table class="table1"><tr>
                    <td>
                        <div class="container div1 three">
                            <h1 class="text-center"><span><span>Mis Eventos</span></span></h1>
                            <span><ul class="list-group ">
                                <li class="list-group-item transparent">BugaTatto<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent">Feria de Buga<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent">Buga Digital<span>
                                        <a href="#" class="btn glyphicon glyphicon-pencil btn-xs"> </a>
                                        <a href="#" class="btn glyphicon glyphicon-remove btn-xs"> </a></span></li>
                                <li class="list-group-item transparent line1">Evento Guadalajara<span class="line1">
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
   
        <?php include DIR . 'view/partial/foot.php' ?>
    </div>
         <div class="footer-grids">
                <div class="col-md-6 col-xs-6 footer-grid foot2">
                    <h4 class="text-center">BugaTuristica</h4>
                   
                        
                   
                </div>
            </div>





