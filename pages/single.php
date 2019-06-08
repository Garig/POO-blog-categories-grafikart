<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if($post === false){
	App::notFound();
}
App::setTitle($post->titre);
?>

<h1><?= $post->titre; ?></h1>
<h4><em><?= $post->categorie; ?></em></h4>

<p><?= $post->contenu; ?></p>