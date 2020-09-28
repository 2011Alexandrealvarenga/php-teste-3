<?php
$title = "CONTATO";
include 'includes/head.php';
include 'includes/header.php';

?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="theme-page padding-bottom-66">
        <div class="clearfix">        
            <div class="row page-margin-top">
                <form class="contact-form" method="post" action="send/send-contato.php">
                    <div class="row">
                        <fieldset class="column column-1-2">
                            <input required class="text-input" name="nome" type="text" value="" placeholder="Seu nome *">
                            <input required class="text-input" name="email" type="text" value="" placeholder="Seu e-mail *">
                            <input class="text-input" name="telefone" type="text" value="" placeholder="Seu Telefone">
                        </fieldset>
                        <fieldset class="column column-1-2">
                            <textarea name="mensagem" placeholder="Sua mensagem ..."></textarea>
                        </fieldset>
                    </div>
                    <div class="row margin-top-30">                   
                        <div class="column column-1-2 align-right">
                            <input type="submit" name="submit" value="ENVIAR" class="more active">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>