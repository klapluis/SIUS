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
echo form_open_multipart('especialidad/actualizar/' . $idUS, 'id="formulario" name="formulario"class="form-horizontal"');
?>
<div class="col-xs-12 col-sm-6 col-md-12">
    <div class="form-group page-header ">
        <h1 class="col-xs-12 col-sm-6 col-md-8"><span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?></h1>
        <a  class="btn btn-success col-xs-12 col-sm-6 col-md-2" type="button" href="<?php echo base_url(); ?>index.php/unidadSalud/infU/<?php echo $idUS; ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Regresar </a>
        <button class="btn btn-primary col-xs-12 col-sm-6 col-md-2" type="submit"><span class="glyphicon glyphicon-saved"></span> Guardar</button>
    </div>
</div>

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
        $contador = 0;
        foreach ($infE as $infEs => $row) {
            if ($row['NOMBRE_SERVICIO'] == $nombreI && $band == 0) {
                $band = 1;
                ?>
                <div class="form-group col-xs-12 col-sm-6 col-md-8">
                    <label class="col-xs-12 col-sm-6 col-md-4">NOMBRE DEL SERVICIO</label>
                    <input class=" required form-control" name='Nombre_Servicio<?php echo $contador ?>' id='Nombre_Servicio<?php echo $contador ?>' value='<?php echo $nombreI; ?>'/>
                </div>
                <center><table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ESPECIALIDAD</th>
                                <th>DISPONIBILIDAD (SI/NO)</th>
                                <th>TELEFONO DEL SERVICIO</th>
                                <th>NOMBRE DE PROFESIONAL RESPONSABLE</th>
                                <th>HORARIO DE ATENCION</th>
                                <th>DIAS DE ATENCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <input type='hidden' name='idE<?php echo $contador ?>' id='idE<?php echo $contador ?>' value='<?php echo $row['IDESPECIALIDAD']; ?>'/>                                
                        <td class="col-sm-6 col-md-2">
                            <input class="required form-control" name='Nombre<?php echo $contador ?>' id='Nombre<?php echo $contador ?>' value='<?php echo $row['NOMBRE']; ?>'/>
                        </td>
                        <?php
                        if ($row['DISPONIBILIDAD'] == 1) {
                            $resul = "Si";
                        } else {
                            $resul = "No";
                        }
                        ?>
                        <td class="col-sm-6 col-md-1">
                            <?php echo form_dropdown('Disponibilidad' . $contador, array($row['DISPONIBILIDAD'] => $resul, '2' => '---Elegir Opción---', '1' => 'Si', '0' => 'No'), set_value('Disponibilidad' . $contador), 'class="form-control" id="Disponibilidad' . $contador . '"'); ?>
                        </td>
                        <td class="col-sm-6 col-md-2">
                            <input class="form-control number"id="Telefono<?php echo $contador ?>" name="Telefono<?php echo $contador ?>" type="number" value="<?php echo $row['TELEFONO'] ?>">
                        </td>
                        <td class="col-sm-6 col-md-3">
                            <input class="form-control required"id="Nombre_Profesional_Responsable<?php echo $contador ?>" name="Nombre_Profesional_Responsable<?php echo $contador ?>" type="text" value="<?php echo $row['NOMBRE_PROFESIONAL_RESPONSABLE'] ?>">
                        </td>  
                        <td class="col-sm-6 col-md-1">
                            <input class="form-control required"id="Horario_Atencio<?php echo $contador ?>" name="Horario_Atencio<?php echo $contador ?>" type="text" value="<?php echo $row['HORARIO_ATENCION'] ?>">
                        </td>
                        <td class="col-sm-6 col-md-2">
                            <input class="form-control required"id="Dias_Atencio<?php echo $contador ?>" name="Dias_Atencio<?php echo $contador ?>" type="text" value="<?php echo $row['DIAS_ATENCION'] ?>">
                        </td>
                        </tr>    
                        <?php
                    } else {
                        if ($row['NOMBRE_SERVICIO'] == $nombreI && $band == 1) {
                            ?>
                            <tr>
                            <input type='hidden' class=" required form-control" name='Nombre_Servicio<?php echo $contador ?>' id='Nombre_Servicio<?php echo $contador ?>' value='<?php echo $nombreI; ?>'/>    
                            <input type='hidden' name='idE<?php echo $contador ?>' id='idE<?php echo $contador ?>' value='<?php echo $row['IDESPECIALIDAD']; ?>'/>                                
                            <td class="col-sm-6 col-md-2">
                                <input class="required form-control" name='Nombre<?php echo $contador ?>' id='Nombre<?php echo $contador ?>' value='<?php echo $row['NOMBRE']; ?>'/>
                            </td>
                            <?php
                            if ($row['DISPONIBILIDAD'] == 1) {
                                $resul = "Si";
                            } else {
                                $resul = "No";
                            }
                            ?>
                            <td class="col-sm-6 col-md-1">
                                <?php echo form_dropdown('Disponibilidad' . $contador, array($row['DISPONIBILIDAD'] => $resul, '2' => '---Elegir Opción---', '1' => 'Si', '0' => 'No'), set_value('Disponibilidad' . $contador), 'class="form-control" id="Disponibilidad' . $contador . '"'); ?>
                            </td>
                            <td class="col-sm-6 col-md-2">
                                <input class="form-control number"id="Telefono<?php echo $contador ?>" name="Telefono<?php echo $contador ?>" type="number" value="<?php echo $row['TELEFONO'] ?>">
                            </td>
                            <td class="col-sm-6 col-md-3">
                                <input class="form-control required"id="Nombre_Profesional_Responsable<?php echo $contador ?>" name="Nombre_Profesional_Responsable<?php echo $contador ?>" type="text" value="<?php echo $row['NOMBRE_PROFESIONAL_RESPONSABLE'] ?>">
                            </td>  
                            <td class="col-sm-6 col-md-1">
                                <input class="form-control required"id="Horario_Atencio<?php echo $contador ?>" name="Horario_Atencio<?php echo $contador ?>" type="text" value="<?php echo $row['HORARIO_ATENCION'] ?>">
                            </td>
                            <td class="col-sm-6 col-md-2">
                                <input class="form-control required"id="Dias_Atencio<?php echo $contador ?>" name="Dias_Atencio<?php echo $contador ?>" type="text" value="<?php echo $row['DIAS_ATENCION'] ?>">
                            </td>
                            </tr>
                            <?php
                        }
                    }
                    $contador++;
                }
            }
            $j = $i + 1;
            if ($j < count($infE)) {
                if ($infE[$i]['NOMBRE_SERVICIO'] != $infE[$j]['NOMBRE_SERVICIO']) {
                    $cont = 0;
                }
            }
            ?>
            </tbody>
        </table></center>
    <input type='hidden' name='contador' id='contador' value='<?php echo $contador; ?>'/>
    <?php
}
echo form_close();

