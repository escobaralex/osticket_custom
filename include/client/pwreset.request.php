<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

$userid=Format::input($_POST['userid']);
?>
<h1>Olvide mi Clave</h1>
<p>
Ingrese su correo electronico o nombre usuario en el siguiente formulario y presione el boton
<strong>Enviar Email</strong> para recibir un mail con un link que le restablezca su clave.

<form action="pwreset.php" method="post" id="clientLogin">
    <div style="width:50%;display:inline-block">
    <?php csrf_token(); ?>
    <input type="hidden" name="do" value="sendmail"/>
    <strong><?php echo Format::htmlchars($banner); ?></strong>
    <br>
    <div>
        <label for="username">Nombre Usuario:</label>
        <input id="username" type="text" name="userid" size="30" value="<?php echo $userid; ?>">
    </div>
    <p>
        <input class="btn" type="submit" value="Send Email">
    </p>
    </div>
</form>
