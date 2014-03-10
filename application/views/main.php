<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Bootstrap -->
        <link href="<?php echo assets_url(); ?>/bootflat/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo assets_url(); ?>/bootflat/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo assets_url(); ?>/bootflat/css/bootflat.css" rel="stylesheet" media="screen">
        <link href="<?php echo assets_url(); ?>/bootflat/css/bootflat-extensions.css" rel="stylesheet" media="screen">
        <link href="<?php echo assets_url(); ?>/bootflat/css/bootflat-square.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo assets_url(); ?>/bootflat/js/html5shiv.js"></script>
        <script src="<?php echo assets_url(); ?>/bootflat/js/respond.min.js"></script>
        <![endif]-->        

        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/app.css'); ?>" />
        <?php foreach((array) @$css as $f): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $f; ?>" />
        <?php endforeach; ?>

        <script type="text/javascript">var App = {base_url: "<?php echo base_url(); ?>"};</script>
        <script type="text/javascript" src="<?php echo assets_url('jquery/jquery-2.1.0.min.js'); ?>"></script>
    </head>
    <body>
        <div class="app-nav"><?php $this->load->view('nav/main'); ?></div>
        
        <script type="text/javascript" src="<?php echo assets_url('/bootflat/js/bootstrap.min.js'); ?>"></script>
        <?php foreach((array) @$js as $f): ?>
        <script type="text/javascript" src="<?php echo $f; ?>" />
        <?php endforeach; ?>
    </body>
</html>
