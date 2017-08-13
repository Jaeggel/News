<html>
        <head>
                <title>Clase CodeIgniter</title>
                <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
                <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-latest.js"); ?>"></script>
				<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
				<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url("estilo.css"); ?>" />
  				<link rel="stylesheet" href="<?php echo base_url("assets/fonts/opensans.css"); ?>"/>
  				<link rel="stylesheet" href="<?php echo base_url("assets/fonts/Pacifico.css"); ?>"/>
  
        </head>
        <body>

        <nav class="navbar navbar-default" role="navigation" style="color:#FFFFFF;background-color:#009688;padding:9px 4px;margin-top:0;font-family:'Poiret One';"">
        	
	        <div class="container-fluid">

	            <div class="navbar-header"> 
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only" >Toggle navigation</span> Menu <i class="fa fa-bars"></i>
	                </button>
	                 </ul><IMG src="<?php echo base_url("assets/img/logon.png"); ?>" WIDTH=78 HEIGHT=78 BORDER=2 VSPACE=3 HSPACE=3 align=left>
	                <a style="color:#FFFFFF;" class="navbar-brand page-scroll" href="<?php echo site_url('/') ?>">Newspaper</a>
	            </div>

	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right" >
	                    <li>
	                        <a class="btn btn-default btn-outline btn-circle" href="<?php echo site_url('news/create') ?>">Crear Noticia</a>
	                    </li>
	                    
	                    <li>
	                        <a class="btn btn-default btn-outline btn-circle" href="<?php echo site_url('news') ?>">	Noticias</a>
	                    </li>

	                    <li>
	                        <a class="btn btn-default btn-outline btn-circle" href="<?php echo site_url('/about') ?>">About</a>
	                    </li>
	            </div>
	        </div>

	    </nav>
     	<div> 
        	<h2 style="text-align:center;margin-top:10px;"><?php echo $title; ?></h2>
        </div>
