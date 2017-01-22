<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id="landing_page">
    <?php
    if($cfg && ($page = $cfg->getLandingPage()))
        echo $page->getBodyWithImages();
    else
        echo  '<h1>Welcome to the Support Center</h1>';
    ?>
    <div id="new_ticket">
        <h3>Abrir un Nuevo Ticket</h3>
        <br>
		<div>Por favor indique su requerimiento con la mayor cantidad de detalle posible. Para ingresar a un ticket ingresado previamente, favor logearse.</div>
        <p>
            <a href="open.php" class="green button">Abrir un Nuevo Ticket</a>
        </p>
    </div>

    <div id="check_status">
        <h3>Revisar Estado Ticket</h3>
        <br>
        <div>Tenemos un archivo historial de todos tus requerimientos y respuestas.</div>
        <p>
            <a href="view.php" class="blue button">Revisar Estado Ticket</a>
        </p>
    </div>
</div>
<div class="clear"></div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p>Consulte nuestras <a href="kb/index.php">Preguntas Frecuentes (FAQs)</a>, antes de abrir un nuevo Ticket.</p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
