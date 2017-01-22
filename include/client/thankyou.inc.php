<?php
if(!defined('OSTCLIENTINC') || !is_object($ticket)) die('Kwaheri rafiki!'); //Say bye to our friend..

//Please customize the message below to fit your organization speak!
?>
<div>
    <?if($errors['err']) {?>
        <p align="center" id="errormessage"><?=$errors['err']?></p>
    <?}elseif($msg) {?>
        <p align="center" id="infomessage"><?=$msg?></p>
    <?}elseif($warn) {?>
        <p id="warnmessage"><?=$warn?></p>
    <?}?>
</div>
<div style="margin:5px 100px 100px 0;">
    <?=Format::htmlchars($ticket->getName())?>,<br>
    <p>
     Gracias por Contactarnos<br>
     Una solicitud de ticket de soporte ha sido creado y un representante de SysGestion se comunicara con Ud. a la brevedad posible.</p>
          
    <?if($cfg->autoRespONNewTicket()){ ?>
    <p>Un email con el numero de Ticket ha sido enviado a la cuenta: <b><?=$ticket->getEmail()?></b>.
       Ud. va a necesitar el numero de ticket además de su correo para ver el status y progreso en linea.
    </p>
    <p>
     Si ud. desea enviar alguna información adicional o comentarios, por favor siga las instrucciones contenidas en el e-mail.
    </p>
    <?}?>
    <p>Soporte SYSGESTION</p>
</div>
<?
unset($_POST); //clear to avoid re-posting on back button??
?>
