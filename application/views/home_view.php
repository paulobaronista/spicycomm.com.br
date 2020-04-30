<nav class="navbar navbar-default">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 padding-off">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-responsive" src="<?= base_url(); ?>assets/images/logo.png" alt="Spicycomm"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="">HOME</a></li>
                <li><a href="">SOBRE NÓS</a></li>
                <li><a href="">NOSSOS TRABALHOS</a></li>
                <li><a href="">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div align="center" class="embed-responsive embed-responsive-4by3">
                <video autoplay loop class="embed-responsive-item" width="100%" height="90%">
                    <source src="https://ak.picdn.net/shutterstock/videos/1036565651/preview/stock-footage-super-slow-motion-shot-of-flying-red-chilli-peppers-in-the-air-at-fps.webm" type="video/webm">
                    <source src="https://ak.picdn.net/shutterstock/videos/1036565651/preview/stock-footage-super-slow-motion-shot-of-flying-red-chilli-peppers-in-the-air-at-fps.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="item">
            <div align="center" class="embed-responsive embed-responsive-4by3">
                <video autoplay loop class="embed-responsive-item" width="100%" height="90%">
                    <source src="https://ak.picdn.net/shutterstock/videos/18514247/preview/stock-footage-red-triangle-polygons-computer-generated-seamless-loop-geometric-background-k-uhd-x.webm" type="video/webm">
                    <source src="https://ak.picdn.net/shutterstock/videos/18514247/preview/stock-footage-red-triangle-polygons-computer-generated-seamless-loop-geometric-background-k-uhd-x.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <img class="img-responsive chamada" src="<?= base_url(); ?>assets/images/chamada.png" alt="Ideia & Resultados. Experimente.">
</div>

<div class="dezoitoanos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p>18 anos</p>
                <p>Temperando negócios e provando</p>
                <p>Ótimos Resultados</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid padding-off ciquentaAgenciaDoBrasil">
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/ciquentaAgenciaDoBrasil.png" alt="">
</div>

<div class="na-spicy container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 info">
                <p class="t-1">NA SPICY,</p>
                <p class="t-1">360º NÃO É UMA VOLTA. </p>
                <p class="t-2"><span>É IR AO PONTO.</span></p>

                <p class="t-3 mt-1">TRABALHAMOS <span class="t-4">SUA MARCA</span></p>
                <p class="t-3">E OLHAMOS SEU NEGÓCIO COMO UM TODO,</p>
                <p class="t-3">DE FORMA <span class="t-4">INTEGRADA E OBJETIVA,</span></p>
                <p class="t-3">DO COMEÇO AO FIM.</p>
                <p class="t-3">COMUNICAÇÃO 360º <span>NA PRÁTICA:</span></p>
                <p class="t-3"><span>CRIATIVA E VIÁVEL, </span>BASEADA EM</p>
                <p class="t-3"><span>PESQUISA E PLANEJAMENTO, </span></p>
                <p class="t-3">COM <span>RESULTADOS TANGÍVEIS E MENSURÁVEIS.</span></p>
                <p class="t-3">TUDO SEM VOLTAS. <span class="t-4">DIRETO AO PONTO.</span></p>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <img class="img-responsive" src="<?= base_url(); ?>assets/images/360.png" alt="É IR AO PONTO. 360º NÃO É UMA VOLTA.">
            </div>
        </div>
    </div>
</div>




<div class="col-xs-12 col-sm-12 col-md-12 padding-off">
    <form method="post" role="form" action="<?php echo base_url("contato") ?>">
        <div class="group-form">
            <div class="form-group">
                <label for="nome">Nome*</label>
                <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input id="email" type="email" class="email form-control" name="email" required="required" />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input id="telefone" class="phone form-control" type="tel" name="phone" />
            </div>
            <div class="form-group">
                <label for="form-mensagem">Mensagem</label>
                <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
            </div>
            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
        </div>
    </form>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center padding-off">
                <p>COPYRIGHT © - TODOS OS DIREITOS RESERVADOS </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>