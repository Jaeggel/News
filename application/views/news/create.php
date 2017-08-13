

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

  <form class="form-horizontal">
 	<div class="container" id="wrapper">
 		<ol class="breadcrumb">
        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
        	<li class="active">Crear Noticia</li>
    	</ol>

	  	<div class="form-group">
	    	<label 
	    		class="control-label col-xs-3" for="title">Título de la Noticia: 
	    	</label>
	    	<input class="form-control" type="input" name="title" placeholder="Título de la Noticia" required/><br />
	    </div>
		<div class="form-group">
	    	<label class="control-label col-xs-3" for="text">Contenido: </label>
	    	<textarea class="form-control" name="text" placeholder="Contenido" required></textarea><br />
	    </div>
	    <div class="form-group">
	    	<input style="background-color: #009688" class="btn btn-primary" type="submit" name="submit" value="Crear Nueva Noticia" />
		</div>
	</div>

</form>
