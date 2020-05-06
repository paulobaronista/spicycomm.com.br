<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Spicycomm | Spicyweb" />
    <meta name="og:title" content="Spicycomm | Spicyweb" />
    <meta name="og:description" content="Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas." />
    <meta name="og:image" content="<?= base_url(); ?>assets/images/thumb-facebook.jpg" />
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="image_src" href="<?= base_url(); ?>assets/images/thumb-facebook.jpg" />
    <meta name="theme-color" content="#FFF" />
    <!-- property (faz funcionar no linkedin) -->
    <meta property="og:title" content="Spicycomm | Spicyweb" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/thumb-facebook.jpg" />
    <meta property="Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas." />
    <meta property="og:url" content="http://www.spicycomm.com.br" />
    <!-- property (faz funcionar no linkedin) -->
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'keywords', 'content' => $keywords),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/style.css?v=1');
    ?>
</head>

<body>

    <!-- Load -->
    <div id="loader">
        <div id="bg_loader">
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo.png" title="Spicycomm - comunicação estimulante" alt="Spicycomm - comunicação estimulante" />
            <div class="windows8">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Load -->