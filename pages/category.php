<?php

use App\Table\Article;
use App\Table\Categorie;
use App\App;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
	App::notFound();
}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>

<h1><?= $categorie->titre; ?></h1>

<div class="row">
	<div class="col-sm-8">

		<ul style="padding-left:0px">
			<?php foreach ($articles as $post): ?>

			<h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
			<h4><em><?= $post->categorie; ?></em></h4>

			<p><?= $post->extrait; ?></p>

			<?php endforeach; ?>

		</ul>

<!--<p><a href="index.php?p=single">Single</a></p>-->
    </div>
    <div class="col-sm-4">
    	<ul style="padding-left:0px">
    	<?php foreach ($categories as $categorie): ?>

    		<li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>

    	<?php endforeach; ?>
    	</ul>
    </div>
</div>