<?php
if (isset($this->session->userdata['esta_logeado'])) {
        header("location:" . base_url());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="SGIAM">
        <meta name="author" content="Kevin Atiencia">

        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url() ?>modelador/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>modelador/css/Tablas.css">
<!--        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>modelador/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>modelador/js/JsValidacion.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/treeMenu.js"></script> 
        <script type="text/javascript" src="<?php echo base_url() ?>modelador/js/jquery.validate.js"></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

        <script type="text/javascript">
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script>
        function validarFormulario() {
            jQuery.validator.messages.required = "<code>Esta campo es obligatorio.</code>";
            jQuery.validator.messages.number = "<code>Esta campo debe ser numerico.</code>";
            jQuery.validator.messages.email = '<code>Correo electronico invalido</code>';
            $("#formulario").validate();
        }
        $(document).ready(function () {
            validarFormulario();
        });
        </script>
    </head>
    <body>
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                        <?php
            if (isset($message)) {
                  echo "<div class='alert alert-danger text-center' alert-dismissable><button type='button' class='close' data-dismiss='alert'>&times;</button>";
                  echo $message;
                echo "</div>";
            }
        ?>
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar Sesión</div>
                    </div>
                    
                    <div style="padding-top:30px" class="panel-body" >
                        <?php echo form_open('login/validar/', 'id="formulario" name="formulario" class="form-horizontal"'); ?>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<!--                            <input id="email" name="email" type="text" onblur='validarEmail(this.value);' class="form-control"  placeholder="Teclea Tu Email">                                        -->
                            <input id="email" name="email" type="text"  class="form-control required email"  placeholder="Teclea Tu Email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control required" name="password" placeholder="Teclea Tu Password">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <center>
                                    <div class="g-recaptcha" data-sitekey="6Ld6xCMTAAAAAPuKlenO5SJ07XMUPIpQP48Ztg2-"></div>
                                    <button id="save" type="submit" onclick= "" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</button>
                                </center>
                            </div>
                        </div>
                        <div class="form-group"><br><br><br>
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" ></div>
                            </div>
                        </div>    
                        </form>
                    </div>                     
                </div>  
            </div>
        </div>
    </body>
</html>