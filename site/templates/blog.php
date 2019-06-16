<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog h-feed">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article class="h-entry">
    <h1 class="p-name"><?= $article->title()->html() ?></h1>
    <p class="p-summary"><?= $article->text()->excerpt(300) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
 <aside class="h-card">
      <?php if($author = $page->author()->toUser()): ?>
  <h2 class="p-name"><?= $author->name() ?></h2>
  <?php if($avatar = $author->avatar()): ?>
    <figure>
      <img class="u-photo" src="<?= $avatar->url() ?>">
    </figure>
  <?php endif ?>
<?php endif ?>
</aside>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>