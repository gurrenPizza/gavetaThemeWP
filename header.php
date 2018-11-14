<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="testLevels.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="wrap">
            <h1><a href="<?php site_url()?>" title="<?php bloginfo('name'); ?>">ALBERTOLF</a></h1>
            <div class="infor">

                <?php
                    $args = array('post_type' => 'page', 'pagename' => 'sobre');
                    $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach($my_page as $post): setup_postdata($post); ?>

                    <?php the_excerpt(); ?>

                <?php endforeach; ?>

                <?php else: ?>
                    <p> Nenhum conteúdo inserido na página sobre. </p>
                <?php endif; ?>

                <h2>Pé na porta, gaveta na cara!</h2>
                <p>Todo sábado, às 19h no nosso canal no youtube! Agora sem barriga!</p>
                <a href="https://www.youtube.com/user/andersongaveta" class="custom-botao">Acesse já!</a>

            </div>
        </div>
    </div>
    <script> levelsXp(); </script>