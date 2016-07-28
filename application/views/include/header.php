<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php
        if (isset($this->session->userdata['esta_logeado'])) {
            $nombre = ($this->session->userdata['esta_logeado']['nombre']);
            $apellido = ($this->session->userdata['esta_logeado']['apellido']);
        } else {
            header("location:" . base_url());
        }
        ?>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="SGIAM"/>
        <meta name="author" content="Kevin Atiencia"/>

        <title><?php echo $title; ?></title>
        
        <!-- Java Script -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>modelador/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>modelador/js/JsValidacion.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/treeMenu.js"></script> 
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/jquery.validate.js"></script>
        <!-- Morris Charts JavaScript -->
<!--        <script src="<?php //echo base_url() ?>modelador/js/plugins/morris/raphael.min.js"></script>-->
<!--        <script src="<?php //echo base_url() ?>modelador/js/plugins/morris/morris.min.js"></script>-->
<!--        <script src="<?php //echo base_url() ?>modelador/js/plugins/morris/morris-data.js"></script>-->
        <!-- CSS -->
        <link href="<?php echo base_url() ?>modelador/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>modelador/css/style.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>modelador/css/dashboard.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>modelador/css/menu.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>modelador/css/Tablas.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>modelador/css/iconos/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>modelador/css/jquery-ui.css"/> 
        <link href="<?php echo base_url() ?>modelador/css/sb-admin.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>modelador/css/plugins/morris.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>modelador/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>index.php/login/page_Admin">S I U S</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <form  role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Teclee la Unidad Salud">
                                    </div>
                                        <button type="submit" class="btn btn-default">Buscar</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <?php echo anchor('Login/gestionInf', '<i class="fa fa-fw fa-user"></i> Gestión Información'); ?>
                            </li>
                            <li>
                                <?php echo anchor('Login/googleMaps', '<i class="fa fa-fw fa-user"></i> Google Maps '); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ' '.$nombre; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php echo anchor('usuario/editar', '<i class="fa fa-fw fa-user"></i> Mis Datos'); ?> 
                            </li>
                            <li>
                                <?php echo anchor('usuario/configuracion', '<i class="fa fa-fw fa-gear"></i> Configuracion'); ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?php echo anchor('login/logout', '<i class="fa fa-fw fa-power-off"></i> Salir'); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>index.php/Login/page_Admin"><i class="fa fa-fw fa-home"></i>Inicio</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>index.php/unidadSalud/listaU"><i class="fa fa-fw fa-hospital-o"></i>Unidades De Salud</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Publicas <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <?php
                                if ($lista) {
                                    foreach ($lista as $key => $row) {
                                        $aux[$key] = $row['NOMBRE_COMUN'];
                                    }
                                    array_multisort($aux, SORT_ASC, $lista);
                                    foreach ($lista as $fila) {
                                        if ($fila['LUCRO'] == 'NO DEFINIDO' || $fila['LUCRO'] == 'SIN FINES DE LUCRO') {
                                            echo '<li><span></span><a href="' . base_url() . 'index.php/unidadSalud/infU/' . $fila['IDUNIDADSALUD'] . '">' . $fila['NOMBRE_OFICIAL'] . '</a></li>';
                                        }
                                    }
                                } else {
                                    echo '<li><span></span><a id="cUS"  href="' . base_url() . 'index.php/unidadSalud/index">     Crear Unidad De Salud</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Privadas <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo1" class="collapse">
                                <?php
                                if ($lista) {
                                    foreach ($lista as $key => $row) {
                                        $aux[$key] = $row['NOMBRE_COMUN'];
                                    }
                                    array_multisort($aux, SORT_ASC, $lista);
                                    foreach ($lista as $fila) {
                                        if ($fila['LUCRO'] == 'CON FINES DE LUCRO') {
                                            echo '<li><span></span><a href="' . base_url() . 'index.php/unidadSalud/infU/' . $fila['IDUNIDADSALUD'] . '">' . $fila['NOMBRE_OFICIAL'] . '</a></li>';
                                        }
                                    }
                                } else {
                                    echo '<li><span></span><a id="cUS" href="' . base_url() . 'index.php/unidadSalud/index" class="label">Crear Unidad De Salud</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">   
                    <?php $this->load->view($main); ?>     
                </div> 
           </div>   
        </div>


