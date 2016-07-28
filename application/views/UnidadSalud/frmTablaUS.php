<center>
    <?= form_open_multipart("unidadSalud/guardar") ?>
    <h1 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Contenido Del Archivo Subido</h1></center>
<?= form_submit('submit', 'Guardar', 'class="btn btn-success"') ?>
<a type="button" href="<?php echo base_url() ?>index.php/unidadSalud/listaU/" class="btn btn-warning"  id="cancelar" name="cancelar"><span class="glyphicon glyphicon-remove"></span>  Cancelar</a><br>

    <div class="panel-body">
        <div class="table-responsive">
            <table border="2px" class="table table-bordered table-hover table-striped pretty">
        <thead>
            <tr>
                <th>
                    <label for="Estatus" class="control-label">Nº</label>
                </th>                
                <th>
                    <label for="Estatus" class="control-label">UNICODIGO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">NOMBRE OFICIAL</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">NOMBRE COMUN</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">DIRECCION</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">TELEFONO </label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">PROVINCIA</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">CANTON</label><br>
                </th>
                <th>
                    <label for="Estatus" class="control-label">PARROQUIA</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">PARROQUIA TIPO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">ZONA</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">ZONA DISTRIBUCION</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">DISTRITO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">DISTRITO DISTRIBUCION</label><br>
                </th>
                <th>
                    <label for="Estatus" class="control-label">CIRCUITO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">AREA CODIGO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">AREA</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">RED ATENCION</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">LUCRO</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">INSTITUCIÓN</label><br>
                </th>
                <th>
                    <label for="Estatus" class="control-label">NIVEL ATENCIÓN</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">TIPOLOGIA</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">HORARIO ATENCIÓN</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">LONGITUD</label>
                </th>
                <th>
                    <label for="Estatus" class="control-label">LATITUD</label>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador = 0;
            foreach ($values as $value) {
                $contador = $contador + 1;
                for ($i = 65; $i <= 90; $i++) {
                    if (isset($value[chr($i)]) == "") {
                        $value[chr($i)] = "NO DEFINIDO";
                    }
                }
                ?>
            <input style="display: none;" id="Unicodigo<?php echo $contador ?>" name="Unicodigo<?php echo $contador ?>" type="hidden" value="<?php echo $value['A'] ?>"></td>
            <input style="display: none;" id="Nombre_Oficial<?php echo $contador ?>" name="Nombre_Oficial<?php echo $contador ?>" type="hidden" value="<?php echo $value['B'] ?>">
            <input style="display: none;" id="Nombre_Comun<?php echo $contador ?>" name="Nombre_Comun<?php echo $contador ?>" type="hidden" value="<?php echo $value['C'] ?>"> 
            <input style="display: none;" id="Direccion<?php echo $contador ?>" name="Direccion<?php echo $contador ?>" type="hidden" value="<?php echo $value['D'] ?>">                                        
            <input style="display: none;" id="Telefono<?php echo $contador ?>" name="Telefono<?php echo $contador ?>" type="hidden" value="<?php echo $value['E'] ?>">
            <input style="display: none;" id="Provincia<?php echo $contador ?>" name="Provincia<?php echo $contador ?>" type="hidden" value="<?php echo $value['F'] ?>">
            <input style="display: none;" id="Canton<?php echo $contador ?>" name="Canton<?php echo $contador ?>" type="hidden" value="<?php echo $value['G'] ?>">
            <input style="display: none;" id="Parroquia<?php echo $contador ?>" name="Parroquia<?php echo $contador ?>" type="hidden" value="<?php echo $value['H'] ?>">
            <input style="display: none;" id="Parroquia_Tipo<?php echo $contador ?>" name="Parroquia_Tipo<?php echo $contador ?>" type="hidden" value="<?php echo $value['I'] ?>">
            <input style="display: none;" id="Zona<?php echo $contador ?>" name="Zona<?php echo $contador ?>" type="hidden" value="<?php echo $value['J'] ?>">
            <input style="display: none;" id="Zona_Distribucion<?php echo $contador ?>" name="Zona_Distribucion<?php echo $contador ?>" type="hidden" value="<?php echo $value['K'] ?>">
            <input style="display: none;" id="Distrito<?php echo $contador ?>"  name="Distrito<?php echo $contador ?>" type="hidden" value="<?php echo $value['L'] ?>">
            <input style="display: none;" id="Distrito_Distribucion<?php echo $contador ?>" name="Distrito_Distribucion<?php echo $contador ?>" type="hidden" value="<?php echo $value['M'] ?>">
            <input style="display: none;" id="Circuito<?php echo $contador ?>" name="Circuito<?php echo $contador ?>"  type="hidden" value="<?php echo $value['N'] ?>">
            <input style="display: none;" id="Area_Codigo<?php echo $contador ?>" name="Area_Codigo<?php echo $contador ?>" type="hidden" value="<?php echo $value['O'] ?>">
            <input style="display: none;" id="Area<?php echo $contador ?>" name="Area<?php echo $contador ?>" type="hidden" value="<?php echo $value['P'] ?>">
            <input style="display: none;" id="Red_Atencion<?php echo $contador ?>" name="Red_Atencion<?php echo $contador ?>" type="hidden" value="<?php echo $value['Q'] ?>">
            <input style="display: none;" id="Lucro<?php echo $contador ?>" name="Lucro<?php echo $contador ?>" type="hidden" value="<?php echo $value['R'] ?>">
            <input style="display: none;" id="Institucion<?php echo $contador ?>" name="Institucion<?php echo $contador ?>" type="hidden" value="<?php echo $value['S'] ?>">
            <input style="display: none;" id="Nivel_Atencion<?php echo $contador ?>" name="Nivel_Atencion<?php echo $contador ?>" type="hidden" value="<?php echo $value['T'] ?>">
            <input style="display: none;" id="Tipologia<?php echo $contador ?>" name="Tipologia<?php echo $contador ?>"  type="hidden" value="<?php echo $value['U'] ?>">
            <input style="display: none;" id="Horario_Atencion<?php echo $contador ?>" name="Horario_Atencion<?php echo $contador ?>"  type="hidden" value="<?php echo $value['V'] ?>">
            <input style="display: none;" id="Longitud<?php echo $contador ?>" name="Longitud<?php echo $contador ?>"  type="hidden" value="<?php echo $value['W'] ?>">
            <input style="display: none;" id="Latitud<?php echo $contador ?>" name="Latitud<?php echo $contador ?>"  type="hidden" value="<?php echo $value['X'] ?>">    
                <?php
            echo "<tr>";
            echo "<td>" . $contador . "</td>";
            echo "<td>" . $value["A"] . "</td>";
            echo "<td>" . $value["B"] . "</td>";
            echo "<td>" . $value["C"] . "</td>";
            echo "<td>" . $value["D"] . "</td>";
            echo "<td>" . $value["E"] . "</td>";
            echo "<td>" . $value["F"] . "</td>";
            echo "<td>" . $value["G"] . "</td>";
            echo "<td>" . $value["H"] . "</td>";
            echo "<td>" . $value["I"] . "</td>";
            echo "<td>" . $value["J"] . "</td>";
            echo "<td>" . $value["K"] . "</td>";
            echo "<td>" . $value["L"] . "</td>";
            echo "<td>" . $value["M"] . "</td>";
            echo "<td>" . $value["N"] . "</td>";
            echo "<td>" . $value["O"] . "</td>";
            echo "<td>" . $value["P"] . "</td>";
            echo "<td>" . $value["Q"] . "</td>";
            echo "<td>" . $value["R"] . "</td>";
            echo "<td>" . $value["S"] . "</td>";
            echo "<td>" . $value["T"] . "</td>";
            echo "<td>" . $value["U"] . "</td>";
            echo "<td>" . $value["V"] . "</td>";
            echo "<td>" . $value["W"] . "</td>";
            echo "<td>" . $value["X"] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
        </div>
    </div>
    <input type='hidden' name='contador' id='contador' value='<?php echo $contador; ?>'/>
</center>
<?= form_close() ?> 
