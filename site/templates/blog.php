<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="blog h-feed" role="main">

  <h2 class="p-name"><?= $page->title()->html() ?></h2>
   <div class="feedBio h-card">
      <a class="u-author" href="https://jgregorymcverry.com">Greg McVerry</a>
      <img class="u-photo" src="http://testkirby.jgregorymcverry.com/media/users/7YUi7iA5/1003058223-1560729552/profile.jpg">
   </div>
  <?= $page->text()->kirbytext() ?>
<section class="card-container">
  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article class="h-entry card">
    <header class="card-title">
    <h3 class="p-name"><?= $article->title()->html() ?></h3>
    <div class=" h-card authorInfo">
      <a class="u-author" href="https://jgregorymcverry.com"><span class="p-name">Greg McVerry</a>
      <img
    </div>
  </header>
    <span class="p-summary card-description"><?= $article->intro()->kirbytext() ?></span>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>
</section>
</main>

<?php snippet('footer') ?>