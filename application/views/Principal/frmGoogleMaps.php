<?php echo $map['js']; ?>
<script>
    $(document).ready(function () {
        validarFormulario();
    });
    function validarFormulario() {
        jQuery.validator.messages.required = "<code>Esta campo es obligatorio.</code>";
        jQuery.validator.messages.number = "<code>Esta campo debe ser numerico.</code>";
        $("#formulario").validate();
    }
</script>

<div class='row'>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <form  role="search">
            <div  class="input-group">
                <input id="input_buscar" name="buscarinput" type="text" class="form-control" placeholder="Teclee la Unidad Salud">
                <span id="btn_buscar" name= "btn_buscar" class=" btn input-group-addon" type="submit"><i class="glyphicon glyphicon-search"></i></span>
            </div>
        </form>
    </div><br><br>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <?php echo $map['html']; ?>
    </div>
    <?php
        echo form_open('Login/actualizar', 'id="formulario" name="formulario" class="form-horizontal"');
    ?>
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="form-group">
            <button type="submit"  class="btn btn-info" id="guardar" name="guardar"><span class="glyphicon glyphicon-floppy-save"></span>  Actualizar</button>
        </div>
        <div class="form-group">
            <label for="Estatus" class="control-label">NOMBRE OFICIAL:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                <input id="Nombre_Oficial" name="Nombre_Oficial" type="text"  class="required form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="Estatus" class="control-label">LONGITUD:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input id="Longitud" name="Longitud" type="number" class="required number form-control">                
            </div>
        </div>
        <div class="form-group">
            <label for="Estatus" class="control-label">LATITUD:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input id="Latitud" name="Latitud" type="number" class="required number form-control">                
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>

