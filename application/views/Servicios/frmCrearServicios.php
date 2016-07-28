<?php
//Nombre
$DESCRIPCION = array(
    'name' => 'Descripcion',
    'id' => 'Descripcion',
    'size' => 50,
    'value' => set_value('Descripcion'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$DISPONIBILIDAD  = array(
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
$NOMBRE_RESPONSABLE = array(
    'name' => 'Nombre_Responsable',
    'id' => 'Nombre_Responsable',
    'size' => 50,
    'value' => set_value('Nombre_Responsable'),
    'type' => 'text',
    'class' => 'required form-control',
    'style' => 'text-transform:uppercase',
);
$HORARIO = array(
    'name' => 'Horario',
    'id' => 'Horario',
    'size' => 50,
    'value' => set_value('Horario'),
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
echo form_open_multipart('servicios/guardar/'.$idUS, 'id="formulario" name="formulario"class="form-horizontal"');
?>
<div class="col-xs-12 col-sm-6 col-md-12">
    <div class="form-group page-header ">
        <h1 class="col-xs-12 col-sm-6 col-md-6"><span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?></h1>
        <a  class="btn btn-success col-xs-12 col-sm-6 col-md-2" type="button" href="<?php echo base_url(); ?>/index.php/unidadSalud/infU/<?php echo $idUS; ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
    </div>
</div>
<div class="form-group">
    <label for="Nombre" class="col-lg-3 control-label">DESCRIPCION:</label>
    <div class="col-lg-3">
        <?php echo form_input($DESCRIPCION); ?>
    </div>
</div>
<div class="form-group">
    <label for="Nombre" class="col-lg-3 control-label">DISPONIBILIDAD:</label>
    <div class="col-lg-3">
        <?php echo form_dropdown('Disponibilidad', $DISPONIBILIDAD, set_value('Disponibilidad'), 'class="form-control required" id="Disponibilidad"'); ?>
    </div>
</div>
<div class="form-group">
    <label for="Nombre" class="col-lg-3 control-label">TELEFONO:</label>
    <div class="col-lg-3">
        <?php echo form_input($TELEFONO); ?>
    </div>
</div>
<div class="form-group">
    <label for="Nombre" class="col-lg-3 control-label">NOMBRE RESPONSABLE:</label>
    <div class="col-lg-3">
        <?php echo form_input($NOMBRE_RESPONSABLE); ?>
    </div>
</div>
<div class="form-group">
    <label for="Nombre" class="col-lg-3 control-label">HORARIO:</label>
    <div class="col-lg-3">
        <?php echo form_input($HORARIO); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-lg-offset-3 col-lg-12">
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Guardar</button>
    </div>
</div>
<?php echo form_close(); 