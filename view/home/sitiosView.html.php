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
        <div class="row main">
            <div class="posts col-xs-12 col-md-9">
                <div class="miga-de-pan">
                    <ol class="breadcrumb">
                        <li><a href="#">Parques</a></li>
                        <li><a href="#">Lugares</a></li>
                    </ol>
                </div> 
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/d1.jpg" />
                    </a>
                    <h2 class="post-title">
                        Parque José María Cabal
                    </h2>
                    <p class="post-contenido text-justify">
                        La Plaza o Parque principal de la ciudad de Guadalajara 
                        de Buga, se encuentra localizada entre la Calle 6a. 
                        (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                        Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                        de la Iglesia Mayor)
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate" data-toggle="modal" data-target="#parqueCabal">Ver sitio</a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="parqueCabal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Parque Cabal</h4>
                            </div>
                            <div class="modal-body">
                                <p class="post-contenido text-justify sitio-text1">
                                    La Plaza o Parque principal de la ciudad de Guadalajara 
                                    de Buga, se encuentra localizada entre la Calle 6a. 
                                    (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                                    Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                                    de la Iglesia Mayor).
                                </p>
                                <p class="post-contenido text-justify sitio-text2">La Plaza Cabal se inaguró oficialmente el 6 de agosto de 
                                    1924. Esta antigua Plaza Mayor, fue diseñada y construida 
                                    por Don Enrique Figueroa Fernández, a partir de la cual se 
                                    desarrolló la ciudad de Guadalajara de Buga desde su 
                                    traslado a este sitio en 1576; su diseño estilo Parque 
                                    Europeo le da vida a su edificación, en ella se encuentra 
                                    la estatua en bronce del prócer bugueño General José María 
                                    Cabal Barona, uno de los mártires de la Independencia y
                                    miembro de la Expedición Botánica, obra que realizó el 
                                    Escultor Fernando Rubinni.</p>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <img src="<?php echo URL ?>image/d1.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <img src="<?php echo URL ?>image/e1.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                        <img src="<?php echo URL ?>image/e2.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/d2.jpg" />
                    </a>
                    <h2 class="post-title">
                        Parque Santa Bárbara
                    </h2>
                    <p class="post-contenido text-justify">
                        La Plaza o Parque principal de la ciudad de Guadalajara 
                        de Buga, se encuentra localizada entre la Calle 6a. 
                        (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                        Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                        de la Iglesia Mayor)
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver sitio</a>
                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/d3.jpg" />
                    </a>
                    <h2 class="post-title">
                        Parque Fuen Mayor
                    </h2>
                    <p class="post-contenido text-justify">
                        La Plaza o Parque principal de la ciudad de Guadalajara 
                        de Buga, se encuentra localizada entre la Calle 6a. 
                        (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                        Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                        de la Iglesia Mayor)
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver sitio</a>
                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/d4.jpg" />
                    </a>
                    <h2 class="post-title">
                        Catedral de San Pedro
                    </h2>
                    <p class="post-contenido text-justify">
                        La Plaza o Parque principal de la ciudad de Guadalajara 
                        de Buga, se encuentra localizada entre la Calle 6a. 
                        (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                        Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                        de la Iglesia Mayor)
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver sitio</a>
                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/d5.jpg" />
                    </a>
                    <h2 class="post-title">
                        Estación del Ferrocarril
                    </h2>
                    <p class="post-contenido text-justify">
                        La Plaza o Parque principal de la ciudad de Guadalajara 
                        de Buga, se encuentra localizada entre la Calle 6a. 
                        (Calle de Bolívar) y 7a. (Calle de Santander) y la 
                        Carrera 14 (Calle 20 de Julio o Calle del 7 de Agosto o 
                        de la Iglesia Mayor)
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver sitio</a>
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
                <h4>Categorías</h4>
                <div class="list-group ">
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Cultura y Tradición</a>
                    <a href="<?php echo URL ?>index.php/home/sitios"class="list-group-item active hvr-bounce-to-bottom lista-categorias">Histórico</a>
                    <a href="#"class="list-group-item  hvr-bounce-to-bottom lista-categorias">Ecoturístico</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Religioso</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Entretenimiento</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Deporte</a>
                </div>
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