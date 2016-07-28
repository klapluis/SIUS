<?php
$UNICODIGO = array(
    'name' => 'Unicodigo',
    'id' => 'Unicodigo',
    'size' => 50,
    'value' => $infU[0]->UNICODIGO,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$NOMBRE_OFICIAL = array(
    'name' => 'Nombre_Oficial',
    'id' => 'Nombre_Oficial',
    'size' => 50,
    'value' => $infU[0]->NOMBRE_OFICIAL,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$NOMBRE_COMUN = array(
    'name' => 'Nombre_Comun',
    'id' => 'Nombre_Comun',
    'size' => 50,
    'value' => $infU[0]->NOMBRE_COMUN,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$DIRECCION = array(
    'name' => 'Direccion',
    'id' => 'Direccion',
    'size' => 50,
    'value' => $infU[0]->DIRECCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$TELEFONO = array(
    'name' => 'Telefono',
    'id' => 'Telefono',
    'size' => 50,
    'value' => $infU[0]->TELEFONO,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);

$PROVINCIA = array(
    $infU[0]->PROVINCIA => $infU[0]->PROVINCIA,
    'Azuay' => 'Azuay',
    'Bolivar' => 'Bolivar',
    'Cañar' => 'Cañar',
    'Carchi' => 'Carchi',
    'Chimborazo' => 'Chimborazo',
    'Cotopaxi' => 'Cotopaxi',
    'El Oro' => 'El Oro',
    'Esmeraldas' => 'Esmeraldas',
    'Galápagos' => 'Galápagos',
    'Guayas' => 'Guayas',
    'Imbabura' => 'Imbabura',
    'Loja' => 'Loja',
    'Los Rios' => 'Los Rios',
    'Manabí' => 'Manabí',
    'Morona Santiago' => 'Morona Santiago',
    'Napo' => 'Napo',
    'Orellana' => 'Orellana',
    'Pastaza' => 'Pastaza',
    'Pichincha' => 'Pichincha',
    'Santa Elena' => 'Santa Elena',
    'Santo Domingo de los Tsáchilas' => 'Santo Domingo de los Tsáchilas',
    'Sucumbios' => 'Sucumbios',
    'Tungurahua' => 'Tungurahua',
    'Zamora Chimchipe' => 'Zamora Chimchipe'
);
$CANTON = array(
    'name' => 'Canton',
    'id' => 'Canton',
    'size' => 50,
    'value' => $infU[0]->CANTON,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$PARROQUIA = array(
    'name' => 'Parroquia',
    'id' => 'Parroquia',
    'size' => 50,
    'value' => $infU[0]->PARROQUIA,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
if ($infU[0]->PARROQUIA_TIPO == 'R') {
    $tipo = "Rural";
} else {
    $tipo = "Urbano";
}
$PARROQUIA_TIPO = array(
    $infU[0]->PARROQUIA_TIPO => $tipo,
    'R' => 'Rural',
    'U' => 'Urbana',
);

$ZONA = array(
    $infU[0]->ZONA => $infU[0]->ZONA,
    'Zona 1' => 'Zona 1',
    'Zona 2' => 'Zona 2',
    'Zona 3' => 'Zona 3',
    'Zona 4' => 'Zona 4',
    'Zona 5' => 'Zona 5',
    'Zona 6' => 'Zona 6',
    'Zona 7' => 'Zona 7',
    'Zona 8' => 'Zona 8',
    'Zona 9' => 'Zona 9',
);
$ZONA_DISTRIBUCION = array(
    'name' => 'Zona_Distribucion',
    'id' => 'Zona_Distribucion',
    'value' => $infU[0]->ZONA_DISTRIBUCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$DISTRITO = array(
    'name' => 'Distrito',
    'id' => 'Distrito',
    'size' => 50,
    'value' => $infU[0]->DISTRITO,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$DISTRITO_DISTRIBUCION = array(
    'name' => 'Distrito_Distribucion',
    'id' => 'Distrito_Distribucion',
    'size' => 50,
    'value' => $infU[0]->DISTRITO_DISTRIBUCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$CIRCUITO = array(
    'name' => 'Circuito',
    'id' => 'Circuito',
    'size' => 50,
    'value' => $infU[0]->CIRCUITO,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$AREA_CODIGO = array(
    'name' => 'Area_Codigo',
    'id' => 'Area_Codigo',
    'size' => 50,
    'value' => $infU[0]->AREA_CODIGO,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$AREA = array(
    'name' => 'Area',
    'id' => 'Area',
    'size' => 50,
    'value' => $infU[0]->AREA,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$RED_ATENCION = array(
    'name' => 'Red_Atencion',
    'id' => 'Red_Atencion',
    'size' => 50,
    'value' => $infU[0]->RED_ATENCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$LUCRO = array(
    $infU[0]->LUCRO => $infU[0]->LUCRO,
    'CON FINES DE LUCRO' => 'CON FINES DE LUCRO',
    'SIN FINES DE LUCRO' => 'SIN FINES DE LUCRO',
    'NO DEFINIDO' => 'NO DEFINIDO',
);
$INSTITUCION = array(
    'name' => 'Institucion',
    'id' => 'Institucion',
    'size' => 50,
    'value' => $infU[0]->INSTITUCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$NIVEL_ATENCION = array(
    $infU[0]->NIVEL_ATENCION => $infU[0]->NIVEL_ATENCION,
    'NIVEL 1' => 'NIVEL 1',
    'NIVEL 2' => 'NIVEL 2',
    'NIVEL 3' => 'NIVEL 3',
    'NIVEL 4' => 'NIVEL 4',
    'NIVEL 5' => 'NIVEL 5',
);
$TIPOLOGIA = array(
    'name' => 'Tipologia',
    'id' => 'Tipologia',
    'size' => 50,
    'value' => $infU[0]->TIPOLOGIA,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$HORARIO_ATENCION = array(
    'name' => 'Horario_Atencion',
    'id' => 'Horario_Atencion',
    'size' => 50,
    'value' => $infU[0]->HORARIO_ATENCION,
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'disabled' => "true"
);
$FOTO = array(
    'id' => 'Foto',
    'name' => 'Foto',
    'size' => '15',
    'value' => set_value('foto')
);
?>
<script>
    $(document).ready(function () {
        $('#editar').on('click', function () {
            $('#Unicodigo').removeAttr("disabled");
            $('#Nombre_Oficial').removeAttr("disabled");
            $('#Nombre_Comun').removeAttr("disabled");
            $('#Direccion').removeAttr("disabled");
            $('#Telefono').removeAttr("disabled");
            $('#Longitud').removeAttr("disabled");
            $('#Latitud').removeAttr("disabled");
            $('#Provincia').removeAttr("disabled");
            $('#Canton').removeAttr("disabled");
            $('#Parroquia').removeAttr("disabled");
            $('#Parroquia_Tipo').removeAttr("disabled");
            $('#Zona').removeAttr("disabled");
            $('#Zona_Distribucion').removeAttr("disabled");
            $('#Distrito').removeAttr("disabled");
            $('#Distrito_Distribucion').removeAttr("disabled");
            $('#Circuito').removeAttr("disabled");
            $('#Area_Codigo').removeAttr("disabled");
            $('#Area').removeAttr("disabled");
            $('#Red_Atencion').removeAttr("disabled");
            $('#Lucro').removeAttr("disabled");
            $('#Institucion').removeAttr("disabled");
            $('#Nivel_Atencion').removeAttr("disabled");
            $('#Tipologia').removeAttr("disabled");
            $('#Horario_Atencion').removeAttr("disabled");
            $('#editar').hide();
            $('#guardar').show();
            $('#cancelar').show();
        });
    });//attr("disabled", "disabled");
</script>
<script>
    $(document).ready(function () {
        $('#cancelar').on('click', function () {
            location.reload();
            $('#guardar').hide();
            $('#cancelar').hide();
            $('#editar').show();
        });
    });
</script>
<script>
    function validarFormulario() {
        jQuery.validator.messages.required = "<code>Esta campo es obligatorio.</code>";
        jQuery.validator.messages.number = "<code>Esta campo debe ser numerico.</code>";
        $("#formulario").validate();
    }
    $(document).ready(function () {
        validarFormulario();
        $('#guardar').hide();
        $('#cancelar').hide();
        $('#editar').show();
    });
</script>

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-th-list"></span> <?php echo $infU[0]->NOMBRE_OFICIAL; ?></h1>
        </div>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> <a href="<?php echo base_url() ?>index.php/login/page_Admin">Inicio</a>
            </li>
            <li class="active">
                <i class="fa fa-list"></i> <?php echo $title; ?>
            </li>
        </ol>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#infor">Información </a></li>
        <li><a data-toggle="tab" href="#areaespe">Áreas de Especialidad</a></li>
        <li><a data-toggle="tab" href="#servicios">Servicios</a></li>
    </ul>
</div>
<?php
if ($this->session->flashdata('error')) {
    echo "<div class='alert alert-danger text-center' alert-dismissable><button type='button' class='close' data-dismiss='alert'>&times;</button>";
    echo $this->session->flashdata('error') . '</div>';
}
?>
<div class="tab-content">
    <div id="infor" class="tab-pane fade in active">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <?php echo form_open_multipart('unidadSalud/modificarFoto/' . $infU[0]->IDUNIDADSALUD, 'class="form-horizontal"'); ?>
                <div class="input-group">
                    <label for="Estatus" class=" control-label">FOTO OFICIAL </label>
                </div>
                <div class="table-responsive">
                    <?php echo form_upload($FOTO); ?>
                </div>
                <div>
                    <img  src= "<?php echo base_url() . $infU[0]->FOTO; ?>" style="width: 300px; height: 250px;"data-holder-rendered="true" alt= "140x140"  class= "img-thumbnail" >
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" id="guardarF" name="guardarF" >Cambiar Imagen</button> 
                </div>
                <?php echo form_close(); ?>
            </div>
            <?php
                echo form_open('unidadSalud/modificar/' . $infU[0]->IDUNIDADSALUD, 'id="formulario" name="formulario" class="form-horizontal"');
            ?>
            <div class="col-lg-8 col-md-6">
                <br>
                <button type="button"  class="btn btn-success" id="editar" name="editar" ><span class="glyphicon glyphicon-edit"></span>  Editar</button>
                <button type="submit"  class="btn btn-info" style="display: none" id="guardar" name="guardar"><span class="glyphicon glyphicon-floppy-save"></span>  Guardar</button>
                <button type="button"  class="btn btn-warning" style="display: none" id="cancelar" name="cancelar"><span class="glyphicon glyphicon-remove"></span>  Cancelar</button><br>
                <br>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">NOMBRE OFICIAL:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <input id="Nombre_Oficial" name="Nombre_Oficial" disabled="true" type="text"  class="required form-control"  value="<?php echo $infU[0]->NOMBRE_OFICIAL ?>">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">NOMBRE COMUN:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <input id="Nombre_Comun" name="Nombre_Comun" disabled="true" type="text"  class="required form-control"  value="<?php echo $infU[0]->NOMBRE_COMUN ?>"> 
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">DIRECCION:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <input id="Direccion" name="Direccion" type="text" disabled="true" class="required form-control"  value="<?php echo $infU[0]->DIRECCION ?>">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">TELEFONO:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                        <input id="Telefono" name="Telefono" type="text" disabled="true" class="required number form-control"  value="<?php echo $infU[0]->TELEFONO ?>">                
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">LONGITUD:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <input id="Longitud" name="Longitud" type="text" disabled="true" class="required number form-control"  value="<?php echo $infU[0]->LONGITUD ?>">                
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Estatus" class="col-lg-3 control-label">LATITUD:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <input id="Latitud" name="Latitud" type="text" disabled="true" class="required number form-control"  value="<?php echo $infU[0]->LATITUD ?>">                
                    </div>
                </div>
            </div>
            <hr/><br>
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">UNICODIGO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">PROVINCIA</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">CANTON</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">PARROQUIA</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label col-xs-12 col-sm-6 col-md-2">PARROQUIA TIPO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label col-xs-12 col-sm-6 col-md-2">ZONA</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input disabled="true" id="Unicodigo" name="Unicodigo" type="text" class="required number form-control" value="<?php echo $infU[0]->UNICODIGO ?>"></td>
                            <td> <?php echo form_dropdown('Provincia', $PROVINCIA, set_value('Provincia'), ' disabled="true" class="form-control" id="Provincia"'); ?></td>
                            <td> <input disabled="true" id="Canton" name="Canton" type="text"  class="required form-control"  value="<?php echo $infU[0]->CANTON ?>"></td>
                            <td> <input disabled="true" id="Parroquia" name="Parroquia" type="text"  class="required form-control"  value="<?php echo $infU[0]->PARROQUIA ?>"></td>
                            <td> <?php echo form_dropdown('Parroquia_Tipo', $PARROQUIA_TIPO, set_value('Parroquia_Tipo'), 'disabled="true" class="form-control" id="Parroquia_Tipo"'); ?></td>
                            <td> <?php echo form_dropdown('Zona', $ZONA, set_value('Zona'), 'disabled="true" class="required form-control" id="Zona"'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="col-xs-12 col-sm-6 col-md-3">
                                <label for="Estatus" class="control-label">ZONA DISTRIBUCION</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">DISTRITO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">DISTRITO DISTRIBUCION</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">CIRCUITO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">AREA CODIGO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">AREA</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input disabled="true" id="Zona_Distribucion" disabled="true" name="Zona_Distribucion" type="text"  class="required form-control"  value="<?php echo $infU[0]->ZONA_DISTRIBUCION ?>"></td>
                            <td><input disabled="true" id="Distrito" disabled="true" name="Distrito" type="text"  class="required form-control"  value="<?php echo $infU[0]->DISTRITO ?>"></td>
                            <td><input disabled="true" id="Distrito_Distribucion" disabled="true" name="Distrito_Distribucion" type="text"  class="required form-control"  value="<?php echo $infU[0]->DISTRITO_DISTRIBUCION ?>"></td>
                            <td><input disabled="true" id="Circuito" name="Circuito" disabled="true" type="text"  class="required form-control"  value="<?php echo $infU[0]->CIRCUITO ?>"></td>
                            <td><input disabled="true" id="Area_Codigo" name="Area_Codigo" disabled="true" type="text"  class="required form-control"  value="<?php echo $infU[0]->AREA_CODIGO ?>"></td>
                            <td><input disabled="true" id="Area" name="Area" type="text" disabled="true" class="required form-control"  value="<?php echo $infU[0]->AREA ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">RED ATENCION</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">LUCRO</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">INSTITUCIÓN</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">NIVEL ATENCIÓN</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-2">
                                <label for="Estatus" class="control-label">TIPOLOGIA</label>
                            </th>
                            <th class="col-xs-12 col-sm-6 col-md-1">
                                <label for="Estatus" class="control-label">HORARIO ATENCIÓN</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input disabled="true" id="Red_Atencion" name="Red_Atencion" type="text"  class="required form-control"  value="<?php echo $infU[0]->RED_ATENCION ?>"></td>
                            <td> <?php echo form_dropdown('Lucro', $LUCRO, set_value('Lucro'), ' disabled="true" class="required form-control" id="Lucro"'); ?></td>
                            <td><input disabled="true" id="Institucion" name="Institucion" type="text"  class="required form-control"  value="<?php echo $infU[0]->INSTITUCION ?>"></td>
                            <td> <?php echo form_dropdown('Nivel_Atencion', $NIVEL_ATENCION, set_value('Nivel_Atencion'), ' disabled="true" class="required form-control" id="Nivel_Atencion"'); ?></td>
                            <td><input disabled="true" id="Tipologia" name="Tipologia" type="text"  class="required form-control"  value="<?php echo $infU[0]->TIPOLOGIA ?>"></td>
                            <td><input disabled="true" id="Horario_Atencion" name="Horario_Atencion" type="text"  class="required form-control"  value="<?php echo $infU[0]->HORARIO_ATENCION ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

    <div id="areaespe" class="tab-pane fade">
        <?php if ($infE != NULL) { ?>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="form-group">
                        <a type="button"  href="<?php echo base_url() ?>index.php/especialidad/editar/<?php echo $infU[0]->IDUNIDADSALUD; ?>" class="col-xs-12 col-sm-6 col-md-1 btn btn-success" id="editarE" name="editarE" ><span class="glyphicon glyphicon-edit"></span>  Editar</a>
                        <a class="col-xs-12 col-sm-6 col-md-2 btn btn-info" id="cE" type="button" href="<?php echo base_url() ?>index.php/especialidad/index/<?php echo $infU[0]->IDUNIDADSALUD ?>"><span class="glyphicon glyphicon-plus"></span>  Crear Area Especialidad</a>
                        <h3 class="col-xs-12 col-sm-6 col-md-8"style="text-align: center">CARTERA DE SERVICIOS</h3>
                    </div>
                </div>
            </div>
            <hr/><br/>
            <?php
            foreach ($infE as $key => $row) {
                /* Seguidamente generamos un vector o array de claves que guardamos en la variable auxiliar 
                 * $aux. Si nos fijamos, estamos guardando todas las edades. */
                $aux[$key] = $row['NOMBRE_SERVICIO'];
            }
            array_multisort($aux, SORT_ASC, $infE);
            /* Como primer parámetro le estamos pasando el vector de claves donde tenemos todas
             *  las edades, el segundo parámetro es para indicar la forma de ordenació; ascendente o descendente y por último incorporamos el vector a ordenar.
             */
            $band = 0;
            $cont = 0;
            for ($i = 0; $i < count($infE); $i++) {
                if ($cont < 1) {
                    $cont++;
                    $nombreI = $infE[$i]['NOMBRE_SERVICIO'];
                    $band = 0;
                    ?>
                    <div class="row">
                        <h4 class="col-xs-12 col-sm-6 col-md-12"style="text-align: center">
                            <?php echo $nombreI ?>
                        </h4>
                    </div>
                    <?php
                    foreach ($infE as $infEs => $row) {
                        if ($row['NOMBRE_SERVICIO'] == $nombreI && $band == 0) {
                            $band = 1;
                            ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="col-xs-12 col-sm-6 col-md-3">
                                                    <label for="Estatus" class="control-label">ESPECIALIDAD</label>
                                                </th>
                                                <th class="col-xs-12 col-sm-6 col-md-1">
                                                    <label for="Estatus" class="control-label">DISPONIBILIDAD (SI/NO)</label>
                                                </th>
                                                <th class="col-xs-12 col-sm-6 col-md-1">
                                                    <label for="Estatus" class="control-label">TELEFONO DEL SERVICIO</label>
                                                </th>
                                                <th class="col-xs-12 col-sm-6 col-md-1">
                                                    <label for="Estatus" class="control-label">NOMBRE DE PROFESIONAL RESPONSABLE</label>
                                                </th>
                                                <th class="col-xs-12 col-sm-6 col-md-1">
                                                    <label for="Estatus" class="control-label">HORARIO DE ATENCION</label>
                                                </th>
                                                <th class="col-xs-12 col-sm-6 col-md-2">
                                                    <label for="Estatus" class="control-label">DIAS DE ATENCION</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>/index.php/Especialidad/eliminar/<?= $row['unidad_SaludIDUNIDADSALUD'] ?>/<?= $row['IDESPECIALIDAD'] ?>" type="button" onclick='if (!confirm("Está seguro de eliminar a"))
                                                                                    return false' title="Eliminar" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                                </td>
                                                <td class="col-sm-6 col-md-2"><?php echo $row['NOMBRE']; ?></td>
                                                <?php
                                                if ($row['DISPONIBILIDAD'] == 1) {
                                                    $resul = "Si";
                                                } else {
                                                    $resul = "No";
                                                }
                                                ?>
                                                <td class="col-sm-6 col-md-1"><?php echo $resul ?></td>
                                                <td class="col-sm-6 col-md-2"><?php echo $row['TELEFONO']; ?></td>
                                                <td class="col-sm-6 col-md-3"><?php echo $row['NOMBRE_PROFESIONAL_RESPONSABLE']; ?></td>  
                                                <td class="col-sm-6 col-md-1"><?php echo $row['HORARIO_ATENCION'] ?></td>
                                                <td class="col-sm-6 col-md-2"><?php echo $row['DIAS_ATENCION']; ?></td>
                                            </tr>    
                                            <?php
                                        } else {
                                            if ($row['NOMBRE_SERVICIO'] == $nombreI && $band == 1) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>index.php/Especialidad/eliminar/<?= $row['unidad_SaludIDUNIDADSALUD'] ?>/<?= $row['IDESPECIALIDAD'] ?>" type="button" onclick='if (!confirm("Está seguro de eliminar a"))
                                                                                            return false' title="Eliminar" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                    <td class="col-sm-6 col-md-2"><?php echo $row['NOMBRE']; ?></td>
                                                    <?php
                                                    if ($row['DISPONIBILIDAD'] == 1) {
                                                        $resul = "Si";
                                                    } else {
                                                        $resul = "No";
                                                    }
                                                    ?>
                                                    <td class="col-sm-6 col-md-1"><?php echo $resul ?></td>
                                                    <td class="col-sm-6 col-md-2"><?php echo $row['TELEFONO']; ?></td>
                                                    <td class="col-sm-6 col-md-3"><?php echo $row['NOMBRE_PROFESIONAL_RESPONSABLE']; ?></td>  
                                                    <td class="col-sm-6 col-md-1"><?php echo $row['HORARIO_ATENCION'] ?></td>
                                                    <td class="col-sm-6 col-md-2"><?php echo $row['DIAS_ATENCION']; ?></td>
                                                </tr>
                            <?php
                            }
                        }
                    }?>
                                                            </table>
                                </div>
                            </div>
                        <?php
                }
                $j = $i + 1;
                if ($j < count($infE)) {
                    if ($infE[$i]['NOMBRE_SERVICIO'] != $infE[$j]['NOMBRE_SERVICIO']) {
                        $cont = 0;
                    }
                }
            }
        } else {
            ?>
            <br>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <a id="cE" type="button" href="<?php echo base_url() ?>/index.php/especialidad/index/<?php echo $infU[0]->IDUNIDADSALUD ?>" class="btn btn-default"> Crear Especialidad</a>
            </div>
        <?php } ?>    
    </div>

    <div id="servicios" class="tab-pane fade">
        <?php
        if ($infS != NULL) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <a type="button"  href="<?php echo base_url() ?>index.php/servicios/editar/<?php echo $infU[0]->IDUNIDADSALUD; ?>" class="col-xs-12 col-sm-6 col-md-1 btn btn-success" id="editarS" name="editarS" ><span class="glyphicon glyphicon-edit"></span>  Editar</a>
                    <a class="col-xs-12 col-sm-6 col-md-2 btn btn-info" id="cS" type="button" href="<?php echo base_url() ?>index.php/servicios/index/<?php echo $infU[0]->IDUNIDADSALUD ?>"><span class="glyphicon glyphicon-plus"></span>  Crear Servicio</a>
                    <h3 class="col-xs-12 col-sm-6 col-md-8"style="text-align: center">SERVICIOS</h3>
                </div>
            </div>
            <hr><br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="Estatus" class="control-label">DESCRIPCION</label>
                                </th>
                                <th class="col-xs-12 col-sm-6 col-md-1">
                                    <label for="Estatus" class="control-label">DISPONIBILIDAD (SI/NO)</label>
                                </th>
                                <th class="col-xs-12 col-sm-6 col-md-1">
                                    <label for="Estatus" class="control-label">TELEFONO DEL SERVICIO</label>
                                </th>
                                <th class="col-xs-12 col-sm-6 col-md-1">
                                    <label for="Estatus" class="control-label">NOMBRE DE PROFESIONAL RESPONSABLE</label>
                                </th>
                                <th class="col-xs-12 col-sm-6 col-md-1">
                                    <label for="Estatus" class="control-label">HORARIO DE ATENCION</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($infS as $infSe) {
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/servicios/eliminar/<?= $infSe['IDSERVICIO'] ?>/<?= $infSe['unidad_SaludIDUNIDADSALUD'] ?>" type="button" onclick='if (!confirm("Está seguro de eliminar a"))
                                                    return false' title="Eliminar Usuario" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                    <td class="col-sm-6 col-md-2"><?php echo $infSe['DESCRIPCION']; ?></td>
                                    <?php
                                    if ($infSe['DISPONIBILIDAD'] == 1) {
                                        $resul = "Si";
                                    } else {
                                        $resul = "No";
                                    }
                                    ?>
                                    <td class="col-sm-6 col-md-1"><?php echo $resul ?></td>
                                    <td class="col-sm-6 col-md-2"><?php echo $infSe['TELEFONO']; ?></td>
                                    <td class="col-sm-6 col-md-3"><?php echo $infSe['NOMBRE_RESPONSABLE']; ?></td>  
                                    <td class="col-sm-6 col-md-1"><?php echo $infSe['HORARIO'] ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo '<br><a id="cS" type="button" href="' . base_url() . 'index.php/servicios/index/' . $infU[0]->IDUNIDADSALUD . '" class="btn btn-default"> Crear Servicio</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>    
