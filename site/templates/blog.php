<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="blog h-feed" role="main">

  <h1 class="p-name"><?= $page->title()->html() ?></h1>
   <div class="p-author h-card">
      <?php if($author = $page->author()->toUser()): ?>
  <h2 class="p-name"><?= $author->name() ?></h2>
  <?php if($avatar = $author->avatar()): ?>
    <figure>
      <img class="u-photo" src="<?= $avatar->url() ?>">
    </figure>
  <?php endif ?>
<?php endif ?>
   </div>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article class="h-entry">
    <h1 class="p-name"><?= $article->title()->html() ?></h1>
    <span class="p-summary"><?= $article->intro()->kirbytext() ?></span>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</main>

<?php snippet('footer') ?>