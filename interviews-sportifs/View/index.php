<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
<div class="slider">
    <ul class="slides">
      <li>
        <img src="static/img/posts/lol.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bienvenue sur notre site</h3>
          <h5 class="light grey-text text-lighten-3">Hereux de vous voir</h5>
        </div>
      </li>
      <li>
        <img src="static/img/posts/trevor.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Ici vous retrouverez</h3>
          <h5 class="light grey-text text-lighten-3">Toutes les interviews</h5>
        </div>
      </li>
      <li>
        <img src="static/img/posts/test.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Mais interviews de qui ?</h3>
          <h5 class="light grey-text text-lighten-3">De tous vos sportifs préférés!!</h5>
        </div>
      </li>
      <li>
        <img src="static/img/posts/louis-pellissier-319.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Interviews sportifs vous souhaite</h3>
          <h5 class="light grey-text text-lighten-3">Une bonne lecture.</h5>
        </div>
      </li>
    </ul>
  </div>
      



  <div class="container">
    <?php if (empty($this->oPosts)): ?>
        <h1>Il n'y a aucun article.</h1>
        <p><button type="button" onclick="window.location='<?=ROOT_URL?>admin_add.html'" class="btn waves-effect waves-light">Ajoutez votre premier article!</button></p>
    <?php else: ?>
    <h1 class="page-title green-text">Les dernières interview de nos sportifs préférés</h1>
    <div class="row center" style="border: 1px solid red">

      <!-- ARTICLES -->
      <?php foreach ($this->oPosts as $oPost): ?>
        <div class="col l6 m6 s12 center">
          <div class="card hoverable center">
            <div class="card-content center">
              <h5><a class="blue-text text-darken-2" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html"><?=htmlspecialchars($oPost->title)?></a></h5>
              <h6 class="blue-text">Le <?=date('d/m/Y à H:i', strtotime($oPost->createdDate));?></h6>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
    					<img src="<?=ROOT_URL?>static/img/posts/<?= $oPost->image ?>" class="activator" alt="<?= $oPost->title ?>">
    				</div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
              <p><a href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html">Voir le chapitre au complet</a></p>
            </div>
            <div class="card-reveal">
    					<span class="card-title grey-text text-darken-4"><?= $oPost->title ?><i class="material-icons right">close</i></span>
    					<p><?= preg_replace("/<img[^>]+\>/i", "", nl2br(mb_strimwidth($oPost->body, 0, 800, '...'))); ?></p>
    				</div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>
<?php endif ?>
<?php require 'inc/footer.php' ?>
