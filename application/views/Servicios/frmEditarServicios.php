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
echo form_open_multipart('servicios/actualizar/' . $idUS, 'id="formulario" name="formulario"class="form-horizontal"');
?>
<div class="col-xs-12 col-sm-6 col-md-12">
    <div class="form-group page-header ">
        <h1 class="col-xs-12 col-sm-6 col-md-6"><span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?></h1>
        <a  class="btn btn-success col-xs-12 col-sm-6 col-md-2" type="button" href="<?php echo base_url(); ?>/index.php/unidadSalud/infU/<?php echo $idUS; ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
        <button class="btn btn-primary col-xs-12 col-sm-6 col-md-2" type="submit"><span class="glyphicon glyphicon-saved"></span> Guardar</button>
    </div>
</div>
<center><table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>DESCRIPCION</th>
                <th>DISPONIBILIDAD (SI/NO)</th>
                <th>TELEFONO DEL SERVICIO</th>
                <th>NOMBRE DE PROFESIONAL RESPONSABLE</th>
                <th>HORARIO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador = 1;
            foreach ($infS as $infSe) {
                ?>
            <input type='hidden' name='idS<?php echo $contador ?>' id='idS<?php echo $contador ?>' value='<?php echo $infSe['IDSERVICIO']; ?>'/>
            <tr>
                <td class="col-sm-6 col-md-2">
                    <input class="form-control required"id="Descripcion<?php echo $contador ?>" name="Descripcion<?php echo $contador ?>" type="text" value="<?php echo $infSe['DESCRIPCION'] ?>">
                </td>
                <?php
                    if($infSe['DISPONIBILIDAD']== 1){
                        $resul='Si';
                    }else{
                        $resul='No';
                    }
                ?>
                <td class="col-sm-6 col-md-1">
                    <?php echo form_dropdown('Disponibilidad' . $contador, array($infSe['DISPONIBILIDAD']=>$resul,'2' => '---Elegir Opción---', '1' => 'Si', '0' => 'No'), set_value('Disponibilidad' . $contador), 'class="form-control" id="Disponibilidad' . $contador . '"'); ?>
                </td>
                <td class="col-sm-6 col-md-2">
                    <input class="form-control number"id="Telefono<?php echo $contador ?>" name="Telefono<?php echo $contador ?>" type="number" value="<?php echo $infSe['TELEFONO'] ?>">
                </td><td class="col-sm-6 col-md-2">
                    <input class="form-control required"id="Nombre_Responsable<?php echo $contador ?>" name="Nombre_Responsable<?php echo $contador ?>" type="text" value="<?php echo $infSe['NOMBRE_RESPONSABLE'] ?>">
                </td><td class="col-sm-6 col-md-2">
                    <input class="form-control required"id="Horario<?php echo $contador ?>" name="Horario<?php echo $contador ?>" type="text" value="<?php echo $infSe['HORARIO'] ?>">
                </td>
            </tr>
            <?php
            $contador++;
        }
        ?>
        <input type='hidden' name='contador' id='contador' value='<?php echo $contador; ?>'/>
        </tbody>
    </table></center>
<?php
echo form_close();
