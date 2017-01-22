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
Hemos enviado un e-mail a la direccion de correo ingresada. Por favor siga
el link en el correo para confirmar su cuenta y obtener acceso a sus Tickets.
</p>
<?php } ?>
