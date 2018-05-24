<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Registro';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de registro</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Para unirte al blog de SIBCATIE, introduce un nombre 
                        de usuario, tu email y una contrasena. El email que 
                        escribas debe ser real ya que lo necesitaras para 
                        gestionar tu cuenta. Te recomendamos que uses una
                        contrasena que contenga letras minusculas, mayusculas,
                        numeros y simbolos.
                    </p>
                    <br>
                    <a href="#">Ya tienes cuenta?</a>
                    <br>
                    <br>
                    <a href="#">Olvidaste tu contrasena?</a>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduce tus datos
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contrasena</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Repite la contrasena</label>
                            <input type="password" class="form-control">
                        </div>
                        <br>
                        <button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
                        <button type="submit" class="btn btn-default btn-primary">Enviar datos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>