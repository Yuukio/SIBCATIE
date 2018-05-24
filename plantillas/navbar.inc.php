<?php
Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario::obtenerNumeroUsuarios(Conexion::obtener_conexion());
Conexion::cerrar_conexion();
?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este boton despliega la barra de navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Flora digital del CATIE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Entradas</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Autores</a></li>
                <li><a href="#">Galerias</a></li>
                <li><a href="#">Referencias</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <?php
                        echo $total_usuarios;
                        ?>

                    </a>

                </li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesion</a></li>
                <li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar cuenta</a></li>
            </ul>
        </div>
    </div>

</nav>
