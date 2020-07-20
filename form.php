<form id="frmMain" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h2>Login</h2>
    <div>
        <input class="textbox" type="text" name="nombre" placeholder="Introduce un nombre.." value="<?php if(!$enviado && isset($name)) echo $name; ?>">
    </div>
    <br>
    <div>
        <input class="textbox" type="text" name="correo" placeholder="Introduce un correo.." value="<?php if(!$enviado && isset($mail)) echo $mail; ?>">
    </div>
    <div>
        <textarea class="messagebox" type="text" name="mensaje" placeholder="Introduce un mensaje.."><?php if(!$enviado && isset($msg)) echo $msg; ?></textarea>
    </div>
    <div class="container">
        <?php if(!empty($error)): ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
        <?php elseif($enviado): ?>
        <div class="alert alert-success">
            <p>Enviado Correctamente</p>
        </div>
        <?php endif ?>
    </div>
    <div>
        <input class="btn btn-green" type="submit" name="send" value="Enviar">
    </div>
</form>
