<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="h-feed" role="main">

  <h2 class="p-name"><?= $page->title()->html() ?></h2>
   <div class="feedBio h-card">
      <a class="u-author" href="https://jgregorymcverry.com">Greg McVerry</a>
      <img class="u-photo" src="http://testkirby.jgregorymcverry.com/media/users/7YUi7iA5/1003058223-1560729552/profile.jpg">
   </div>
    <div class="card-container">
  <?php foreach($page->children()->listed()->flip() as $article): ?>
  <article class="h-entry card">
    <div class="hader">
    <h3 class="p-name"><?= $article->title()->html() ?></h3>
  </div>
  <div class="buty">
    <span class="p-summary"><?= $article->intro() ?></span>
  </div>
  <div class="futer">
      <span class=" h-card authorInfo">
      <a class="u-author" href="https://jgregorymcverry.com"><span class="p-name">Greg McVerry</a>
    </span>
     <a href="<?= $article->url() ?>">Read more…</a>
  </futer>
  </article>
  <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>