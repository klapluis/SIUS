<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <span class="glyphicon glyphicon-list-alt"></span> Lista De Unidades De Salud 
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-home"></i> <a href="<?php echo base_url() ?>index.php/login/page_Admin">Inicio</a>
                </li>
                <li class="active">
                    <i class="fa fa-list-alt"></i> Lista De Unidades De Salud 
                </li>
            </ol>
        </div>
    </div>
    <div id="mensaje"></div>
    <div class="col-xs-12 col-sm-6 col-md-12">

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="form-group">
                <?php
                if ($this->session->flashdata('error')) {
                    echo "<div class='alert alert-danger text-center' alert-dismissable><button type='button' class='close' data-dismiss='alert'>&times;</button>";
                    echo $this->session->flashdata('error') . '</div>';
                }
                ?>
                <?= form_open_multipart(base_url() . "index.php/unidadSalud/Upload") ?>
                <div class="col-xs-12 col-sm-6 col-md-3"><label>Elige Archivo:</label></div>
                <div class="col-xs-12 col-sm-6 col-md-4 table-responsive"><?= form_upload('file'); ?></div>
                <div class="col-xs-12 col-sm-6 col-md-3"><?= form_submit('submit', 'Subir', ' class="btn btn-success"') ?></div>
                <?= form_close() ?>
                <div class="col-xs-12 col-sm-6 col-md-1">
                    <a type="button" href="<?php echo base_url(); ?>/index.php/unidadSalud/index" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Nueva Unidad</a>   
                </div>
            </div>
        </div>
    </div>

    <br/>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
            <table id="USPrivadas" class="pretty">   
                <thead>
                    <tr>
                        <th></th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>LUCRO</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($lista) {
                        foreach ($lista as $key => $row) {
                            $aux[$key] = $row['NOMBRE_OFICIAL'];
                        }
                        array_multisort($aux, SORT_ASC, $lista);
                        foreach ($lista as $fila) {
                            if ($fila['LUCRO'] == 'CON FINES DE LUCRO') {
                                echo '<tr>';
                                echo '<td>';
                                ?>
                            <a href="<?php echo base_url(); ?>/index.php/unidadSalud/eliminar/<?= $fila['IDUNIDADSALUD'] ?>" type="button" onclick='if (!confirm("Está seguro de eliminar a"))
                                                return false' title="Eliminar Usuario" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                <?php
                                echo '</td>';
                                echo '<td>' . anchor('unidadSalud/infU/' . $fila['IDUNIDADSALUD'], $fila['NOMBRE_OFICIAL'], 'class="linkdescr"') . '</td>';
                                echo '<td>' . $fila['DIRECCION'] . '</td>';
                                echo '<td>' . $fila['TELEFONO'] . '</td>';
                                echo '<td>' . $fila['LUCRO'] . '</td>';
                                echo '</tr>';
                            }
                        }
                    } else {
                        echo '<tr><td colspan=5><center>No Existe Informacion</center></td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {
        $('#USPrivadas').dataTable({
//            "scrollX": true
        });
    });

</script>