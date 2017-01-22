<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

$email=Format::input($_POST['lemail']?$_POST['lemail']:$_GET['e']);
$ticketid=Format::input($_POST['lticket']?$_POST['lticket']:$_GET['t']);

if ($cfg->isClientEmailVerificationRequired())
    $button = "E-mail para Link de Acceso";
else
    $button = "Ver el Ticket";
?>
<h1>Revisar Estado del Ticket</h1>
<p>Por favor indiquenos el e-mail y numero de ticket, y un link de acceso
le sera enviado por e-mail.</p>
<form action="login.php" method="post" id="clientLogin">
    <?php csrf_token(); ?>
<div style="display:table-row">
    <div style="width:40%;display:table-cell;box-shadow: 12px 0 15px -15px rgba(0,0,0,0.4);padding-right: 2em;">
    <strong><?php echo Format::htmlchars($errors['login']); ?></strong>
    <br>
    <div>
        <label for="email">E-Mail:
        <input id="email" placeholder="e.g. john.doe@osticket.com" type="text"
            name="lemail" size="30" value="<?php echo $email; ?>"></label>
    </div>
    <div>
        <label for="ticketno">Numero de Ticket:</label><br/>
        <input id="ticketno" type="text" name="lticket" placeholder="e.g. 051243"
            size="30" value="<?php echo $ticketid; ?>"></td>
    </div>
    <p>
        <input class="btn" type="submit" value="<?php echo $button; ?>">
    </p>
    </div>
    <div style="display:table-cell;padding-left: 2em;padding-right:90px;">
<?php if ($cfg && $cfg->getClientRegistrationMode() !== 'disabled') { ?>
        Tiene una cuenta con Nosotros?
        <a href="login.php">Inscribase</a> <?php
    if ($cfg->isClientRegistrationEnabled()) { ?>
        or <a href="account.php?do=create">Registro para una Cuenta</a> <?php
    } ?> para Acceder a todos sus Tickets.
<?php
} ?>
    </div>
</div>
</form>
<br>
<p>
Si este es su primer contacto o ha perdido su numero de Ticket, por favor <a href="open.php">Abra un Nuevo Ticket</a>.
</p>
