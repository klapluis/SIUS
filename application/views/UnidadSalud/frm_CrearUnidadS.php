<?php
$UNICODIGO = array(
    'name' => 'Unicodigo',
    'id' => 'Unicodigo',
    'size' => 50,
    'value' => set_value('Unicodigo'),
    'type' => 'text',
    'class' => 'required number form-control',
    'style' => 'text-transform:uppercase',
);
$NOMBRE_OFICIAL = array(
    'name' => 'Nombre_Oficial',
    'id' => 'Nombre_Oficial',
    'size' => 50,
    'value' => set_value('Nombre_Oficial'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
    'onkeypress' => 'return validarn(event);'
);
$NOMBRE_COMUN = array(
    'name' => 'Nombre_Comun',
    'id' => 'Nombre_Comun',
    'size' => 50,
    'value' => set_value('Nombre_Comun'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
    'onkeypress' => 'return validarn(event);'
);
$DIRECCION = array(
    'name' => 'Direccion',
    'id' => 'Direccion',
    'size' => 50,
    'value' => set_value('Direccion'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$TELEFONO = array(
    'name' => 'Telefono',
    'id' => 'Telefono',
    'size' => 50,
    'value' => set_value('Telefono'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
    'onblur' => "validarNumeros()",
);
$PROVINCIA = array(
    '0' => '---Elegir Opción---',
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
    'value' => set_value('Canton'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'onkeypress' => 'return validarn(event);'
);
$PARROQUIA = array(
    'name' => 'Parroquia',
    'id' => 'Parroquia',
    'size' => 50,
    'value' => set_value('Parroquia'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
    'onkeypress' => 'return validarn(event);'
);
$PARROQUIA_TIPO = array(
    '0' => '---Elegir Opción---',
    'R' => 'Rural',
    'U' => 'Urbana',
);
$ZONA = array(
    '0' => '---Elegir Opción---',
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
    'value' => set_value('Zona_Distribucion'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase'
);
$DISTRITO = array(
    'name' => 'Distrito',
    'id' => 'Distrito',
    'size' => 50,
    'value' => set_value('Distrito'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$DISTRITO_DISTRIBUCION = array(
    'name' => 'Distrito_Distribucion',
    'id' => 'Distrito_Distribucion',
    'size' => 50,
    'value' => set_value('Distrito_Distribucion'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$CIRCUITO = array(
    'name' => 'Circuito',
    'id' => 'Circuito',
    'size' => 50,
    'value' => set_value('Circuito'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$AREA_CODIGO = array(
    'name' => 'Area_Codigo',
    'id' => 'Area_Codigo',
    'size' => 50,
    'value' => set_value('Area_Codigo'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$AREA = array(
    'name' => 'Area',
    'id' => 'Area',
    'size' => 50,
    'value' => set_value('Area'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$RED_ATENCION = array(
    'name' => 'Red_Atencion',
    'id' => 'Red_Atencion',
    'size' => 50,
    'value' => set_value('Red_Atencion'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$LUCRO = array(
    '0' => '---Elegir Opción---',
    'CON FINES DE LUCRO' => 'CON FINES DE LUCRO',
    'SIN FINES DE LUCRO' => 'SIN FINES DE LUCRO',
    'NO DEFINIDO' => 'NO DEFINIDO',
);
$INSTITUCION = array(
    'name' => 'Institucion',
    'id' => 'Institucion',
    'size' => 50,
    'value' => set_value('Institucion'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase',
);
$NIVEL_ATENCION = array(
    '0' => '---Elegir Opción---',
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
    'value' => set_value('Tipologia'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase'
);
$HORARIO_ATENCION = array(
    'name' => 'Horario_Atencion',
    'id' => 'Horario_Atencion',
    'size' => 50,
    'value' => set_value('Horario_Atencion'),
    'type' => 'text',
    'class' => 'form-control',
    'style' => 'text-transform:uppercase'
);
$LONGITUD = array(
    'name' => 'Longitud',
    'id' => 'Longitud',
    'size' => 100,
    'value' => set_value('Longitud'),
    'type' => 'number',
    'class' => 'form-control required number',
    'style' => 'text-transform:uppercase'
);
$LATITUD = array(
    'name' => 'Latitud',
    'id' => 'Latitud',
    'size' => 50,
    'value' => set_value('Latitud'),
    'type' => 'number',
    'class' => 'form-control required number' 
);
$FOTO = array(
    'id' => 'Foto',
    'name' => 'Foto',
    'size' => '15',
    'value' => set_value('foto')
);
?>
<script>
    function validarFormulario() {
        jQuery.validator.messages.required = "<code>Esta campo es obligatorio.</code>";
        jQuery.validator.messages.number = "<code>Esta campo debe ser num&eacute;rico.</code>";
        $("#formulario").validate();
    }
    $(document).ready(function () {
        validarFormulario();
    });
</script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> <a href="<?php echo base_url() ?>index.php/login/page_Admin">Inicio</a>
            </li>
            <li class="active">
                <i class="fa fa-list"></i> <?php echo $title; ?>
            </li>
        </ol>
    </div>
</div>
<div>    
    <?php
    echo form_open_multipart('unidadSalud/guardarUS/', 'id="formulario" name="formulario"class="form-horizontal"');
    if ($this->session->flashdata('error')) {
        echo "<div class='alert alert-success text-center' alert-dismissable><button type='button' class='close' data-dismiss='alert'>&times;</button>";
        echo '<h4><center>' . $this->session->flashdata('error') . '</h4></center>';
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">UNICODIGO:</label>
            <div class="col-lg-3">
                <?php echo form_input($UNICODIGO); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">NOMBRE OFICIAL:</label>
            <div class="col-lg-3">
                <?php echo form_input($NOMBRE_OFICIAL); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">NOMBRE COMUN:</label>
            <div class="col-lg-3">
                <?php echo form_input($NOMBRE_COMUN); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">DIRECCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($DIRECCION); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">TELEFONO:</label>
            <div class="col-lg-3">
                <?php echo form_input($TELEFONO); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">PROVINCIA:</label>
            <div class="col-lg-3">
                <?php echo form_dropdown('Provincia', $PROVINCIA, set_value('Provincia'), 'class="form-control" id="Provincia"'); ?>
            </div>
        </div><div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">CANTON:</label>
            <div class="col-lg-3">
                <?php echo form_input($CANTON); ?>
            </div>
        </div><div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">PARROQUIA:</label>
            <div class="col-lg-3">
                <?php echo form_input($PARROQUIA); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">TIPO DE PARROQUIA:</label>
            <div class="col-lg-3">
                <?php echo form_dropdown('Parroquia_Tipo', $PARROQUIA_TIPO, set_value('Parroquia_Tipo'), 'class="form-control" id="Parroquia_Tipo"'); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Nombre" class="col-lg-2 control-label">ZONA:</label>
            <div class="col-lg-3">
                <?php echo form_dropdown('Zona', $ZONA, set_value('Zona'), 'class="form-control" id="Zona"'); ?>
            </div>
        </div>    
        <div class="form-group col-lg-12">
            <label for="TipoUsuario" class="col-lg-2 control-label">ZONA DE DISTRIBUCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($ZONA_DISTRIBUCION); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="password1" class="col-lg-2 control-label">DISTRITO:</label>
            <div class="col-lg-3">
                <?php echo form_input($DISTRITO); ?>
            </div>
        </div>

        <div class="form-group  col-lg-12">
            <label for="password2" class="col-lg-2 control-label">DISTRITO DISTRIBUCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($DISTRITO_DISTRIBUCION); ?>
            </div>
        </div>

        <div class="form-group  col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">CIRCUITO:</label>
            <div class="col-lg-3">
                <?php echo form_input($CIRCUITO); ?>
            </div>
        </div>

        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">AREA CODIGO:</label>
            <div class="col-lg-3">
                <?php echo form_input($AREA_CODIGO); ?>
            </div>
        </div>

        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">AREA:</label>
            <div class="col-lg-3">
                <?php echo form_input($AREA); ?>
            </div>
        </div>

        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">RED ATENCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($RED_ATENCION); ?>
            </div>
        </div>    
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">LUCRO:</label>
            <div class="col-lg-3">
                <?php echo form_dropdown('Lucro', $LUCRO, set_value('Lucro'), 'class="form-control" id="Lucro"'); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">INSTITUCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($INSTITUCION); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">NIVEL ATENCION:</label>
            <div class="col-lg-3">
                <?php echo form_dropdown('Nivel_Atencion', $NIVEL_ATENCION, set_value('Nivel_Atencion'), 'class="form-control" id="Nivel_Atencion"'); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">TIPOLOGIA:</label>
            <div class="col-lg-3">
                <?php echo form_input($TIPOLOGIA); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">HORARIO ATENCION:</label>
            <div class="col-lg-3">
                <?php echo form_input($HORARIO_ATENCION); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">LONGITUD:</label>
            <div class="col-lg-3">
                <?php echo form_input($LONGITUD); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">LATITUD:</label>
            <div class="col-lg-3">
                <?php echo form_input($LATITUD); ?>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="Estatus" class="col-lg-2 control-label">FOTOGRAFÍA :</label>
            <div class="col-lg-3">
                <?php echo form_upload($FOTO); ?>
            </div>
        </div>    

        <div class="form-group col-lg-12">
            <div class="col-lg-offset-3 col-lg-10">
                <a type="button" href="<?php echo base_url(); ?>index.php/login/page_Admin" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Guardar</button>
            </div>
        </div>
        <hr/>
        <?php echo form_close(); ?>
    </div>
</div>