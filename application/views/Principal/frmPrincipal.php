<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-indent-left"></span> Información
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Inicio
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p class="p"><i class="fa fa-info-circle"></i> <strong>SIUS (Sistema de Informacion de la Unidades de Salud)</strong><br>
                Es un sistemas diseñado para administrar, configurar, los datos que se presentaran en la aplicacion movil IUS.</p>  
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-ambulance fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo count($lista); ?>
                        </div>
                        <div> Unidades de Salud </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>index.php/unidadSalud/listaU">
                <div class="panel-footer">
                    <span class="pull-left">Ver Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php
                            $i = $uPublicas = $uPrivadas = 0;
                            if (count($lista) != 0) {
                                foreach ($lista as $fila) {
                                    if ($fila['LUCRO'] == 'NO DEFINIDO' || $fila['LUCRO'] == 'SIN FINES DE LUCRO') {
                                        $uPublicas++;
                                    } else {
                                        $uPrivadas++;
                                    }
                                }
                            }
                            echo $uPublicas;
                            ?>
                        </div>
                        <div>Unidades Publicas</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>index.php/unidadSalud/listaUPublicas">
                <div class="panel-footer">
                    <span class="pull-left">Ver Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php
                            echo $uPrivadas;
                            ?>
                        </div>
                        <div>Unidades Privadas</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>index.php/unidadSalud/listaUPrivadas">
                <div class="panel-footer">
                    <span class="pull-left">Ver Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12">
                        <a id="cUS" type="button" href="<?php echo base_url(); ?>index.php/unidadSalud/index" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span>     Crear Unidad De Salud</a>
                        <br><br><button id="cUS" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success"><span class="glyphicon glyphicon-list-alt"></span>     Crear Especialidad</button>
                        <br><br><button id="cUS" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1" ><span class="glyphicon glyphicon-briefcase"></span>     Crear Servicio</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Buscar Unidad De Salud</h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                    <input id="nameUnidad" name="email" type="text" onblur='letras(this.value);' class="form-control"  placeholder="Teclea Nombre De La Unidad..">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Buscar Unidad De Salud</h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                    <input id="nameUnidad" name="email" type="text" onblur='letras(this.value);' class="form-control"  placeholder="Teclea Nombre De La Unidad..">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>