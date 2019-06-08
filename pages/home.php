<div class="row">
	<div class="col-sm-8">

		<ul style="padding-left:0px">
			<?php foreach (\App\Table\Article::getLast() as $post): ?>

			<h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
			<h4><em><?= $post->categorie; ?></em></h4>

			<p><?= $post->extrait; ?></p>

			<?php endforeach; ?>

		</ul>

<!--<p><a href="index.php?p=single">Single</a></p>-->
    </div>
    <div class="col-sm-4">
    	<ul style="padding-left:0px">
    	<?php foreach (\App\Table\Categorie::all() as $categorie): ?>
    		<li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
    	<?php endforeach; ?>
    	</ul>
    </div>
</div>