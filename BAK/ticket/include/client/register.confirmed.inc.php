<?php if ($content) {
    list($title, $body) = $ost->replaceTemplateVariables(
        array($content->getName(), $content->getBody())); ?>
<h1><?php echo Format::display($title); ?></h1>
<p><?php
echo Format::display($body); ?>
</p>
<?php } else { ?>
<h1>Registro de Cuenta</h1>
<p>
<strong>Gracias por Registrarse para una Cuenta.</strong>
</p>
<p>
Tu haz confirmado tu direccion de correo y activado tu cuenta satisfactoriamente
Tu puedes proceder a chequear tickets abiertos anteriormente o crear un nuevo Ticket
</p>
<p><em>Area de Soporte SYSGESTION</em></p>
<?php } ?>
