<div class="container">
<ol class="breadcrumb">
        	<li><a href="<?php echo site_url('/') ?>">Home</a></li>
        		<li class="active">Noticias</li>
    		</ol>
    		</div>
<?php foreach ($news as $news_item): ?>

	<div class="container">
			
	        <h3>
	        <li>
	        <?php echo $news_item['title']; ?></h3>
	        <div class="main">
	                <?php echo $news_item['text']; ?>
	        </div>
	        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Ver Articulo</a></p>
	        </li>
	        <hr size="2px" color="black" />
        </div>

	        

<?php endforeach; ?>