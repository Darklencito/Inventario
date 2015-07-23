<?php
session_start();
if($_SESSION)
{
	header("Location:php/asignaciones.php");
}
?>

<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="img/logomenu.png" >

    <meta charset="utf-8">
    <title>Sistema Inventario</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/required.css">
    <!--<script src="js/librerias/Modernizr/modernizr-latest.js"></script>-->
	<script src="js/jqueryT.js"></script>
	<script src="js/cookie-plugin.js"></script>
    <script>
	function remember_me(){
	   var c = $("#check");
	   if(c.is(":checked")){
		 var u = $("#username").val();
		 var p = $("#password").val();
		 $.cookie("username", u, { expires: 3650 });
		 $.cookie("password", p, { expires: 3650 });
	   }
	}
	function load_em(){
	   var u = $.cookie("username");
	   var p = $.cookie("password");
	
	   $("#username").val(u);
	   $("#password").val(p);
	}
	</script>
</head>
  <body>
<div class="container" style="margin-top:150px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Acceso</h3>
        </div>
          <div class="panel-body">
          <?php
if (isset($_GET['error'])) {
    echo '
              <div class="alert alert-danger-alt alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Acceso Denegado</strong> Revise que sus datos de acceso al sistema sean correctos y vuelva a intentarlo.</div>   

    ';
} else {
    echo '';
}
?>
            <form accept-charset="UTF-8" role="form" method="POST" action="php/acceso.php">
                    <fieldset>
                <div class="form-group">
                 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="Usuario" value="" placeholder="Usuario" required>                                        
                                    </div>
              </div>
              <div class="form-group">
                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="text" class="form-control" name="Pass" value="" placeholder="Password" required>                                        
                                    </div>
              </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Iniciar sesión">
            </fieldset>
              </form>
              <p></p>
               <a class="btn btn-lg btn-info btn-block" href="registro.php">Registrarme</a>
          </div>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>