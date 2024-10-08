<div class="contenedor olvide">
    <?php 
        include_once __DIR__.'/../templates/nombre-sitio.php';
    ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Ingresa tu correo para enviar las instrucciones</p>
        <?php 
            include_once __DIR__.'/../templates/alertas.php';
        ?>
        <form class="formulario" action="/olvide" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu email" value="<?php echo $usuario->email; ?>">
            </div>
            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Crea una aquí</a>
        </div>
    </div>
</div>