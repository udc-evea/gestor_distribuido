<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include_title() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo stylesheet_path("bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo stylesheet_path("bootstrap-theme.min.css");?>">
        <link rel="stylesheet" href="<?php echo stylesheet_path("main.css");?>">
        <script src="<?php echo javascript_path("modernizr-2.6.2.min.css");?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Estás usando un navegador <strong>obsoleto</strong>. Por favor visita <a href="http://browsehappy.com/">upgrade your browser</a> para mejorar su experiencia en el sitio.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include_partial("global/navbar");?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12"><?php echo $sf_content ?></div>
          </div>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo javascript_path("jquery-1.10.2.min.js");?>><\/script>');</script>
        <script src="<?php echo javascript_path("bootstrap.min.js");?>"></script>
        <script src="<?php echo javascript_path("bootbox.min.js");?>"></script>
        <script src="<?php echo javascript_path("rails.js");?>"></script>
        
        <?php include_slot("action_js");?>
    </body>
</html>
