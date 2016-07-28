<?php
//Nombre
$NOMBRE_SERVICIO = array(
    'name' => 'Nombre_Servicio',
    'id' => 'Nombre_Servicio',
    'size' => 50,
    'value' => set_value('Nombre_Servicio'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$NOMBRE = array(
    'name' => 'Nombre',
    'id' => 'Nombre',
    'size' => 50,
    'value' => set_value('Nombre'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$DISPONIBILIDAD = array(
    '2' => '---Elegir Opción---',
    '1' => 'Si',
    '0' => 'No',
);
$TELEFONO = array(
    'name' => 'Telefono',
    'id' => 'Telefono',
    'size' => 50,
    'value' => set_value('Telefono'),
    'type' => 'number',
    'class' => 'number form-control',
    'style' => 'text-transform:uppercase',
);
$NOMBRE_PROFESIONAL_RESPONSABLE = array(
    'name' => 'Nombre_Profesional_Responsable',
    'id' => 'Nombre_Profesional_Responsable',
    'size' => 50,
    'value' => set_value('Nombre_Profesional_Responsable'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$HORARIO_ATENCION = array(
    'name' => 'Horario_Atencion',
    'id' => 'Horario_Atencion',
    'size' => 50,
    'value' => set_value('Horario_Atencion'),
    'type' => 'text',
    'data-type' => "DATE",
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase'
);
$DIAS_ATENCION = array(
    'name' => 'Dias_Atencion',
    'id' => 'Dias_Atencion',
    'size' => 50,
    'value' => set_value('Dias_Atencion'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase'
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
<?php
echo form_open_multipart('especialidad/guardar/' . $idUS, 'id="formulario" name="formulario"class="form-horizontal"');
?>
<div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12">
        <div class="form-group page-header ">
            <h1 class="col-xs-12 col-sm-6 col-md-8"><span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?></h1>
            <a  class="btn btn-success col-xs-12 col-sm-6 col-md-2" type="button" href="<?php echo base_url(); ?>index.php/unidadSalud/infU/<?php echo $idUS; ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
        </div>
    </div>
    <div class="form-group">
        <label for="Nombre_Servicio" class="col-lg-3 control-label">NOMBRE DEL SERVICIO:</label>
        <div class="col-lg-3">
            <?php echo form_input($NOMBRE_SERVICIO); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Nombre" class="col-lg-3 control-label">ESPECIALIDAD:</label>
        <div class="col-lg-3">
            <?php echo form_input($NOMBRE); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Nombre" class="col-lg-3 control-label">DISPONIBILIDAD:</label>
        <div class="col-lg-3">
            <?php echo form_dropdown('Disponibilidad', $DISPONIBILIDAD, set_value('Disponibilidad'), 'class="form-control required" id="Disponibilidad"'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Telefono" class="col-lg-3 control-label">TELEFONO:</label>
        <div class="col-lg-3">
            <?php echo form_input($TELEFONO); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Nombre_Profesional_Responsable" class="col-lg-3 control-label">NOMBRE RESPONSABLE:</label>
        <div class="col-lg-3">
            <?php echo form_input($NOMBRE_PROFESIONAL_RESPONSABLE); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Horario_Atencion" class="col-lg-3 control-label">HORARIO ATENCION:</label>
        <div class="col-lg-3">
            <?php echo form_input($HORARIO_ATENCION); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="Dias_Atencion" class="col-lg-3 control-label">DIAS DE ATENCION:</label>
        <div class="col-lg-3">
            <?php echo form_input($DIAS_ATENCION); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-3 col-lg-12">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Guardar</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
