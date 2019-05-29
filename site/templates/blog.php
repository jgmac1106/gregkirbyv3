<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="blog" role="main">

  <h1 class="h-feed"><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article class="h-entry">
    <h1 class="p-name"><?= $article->title()->html() ?></h1>
    <?php if($author = $page->author()->toUser()): ?>
       <div class="p-author h-card"><?= $author->name() ?>
       	<figure>
          <img class="u-photo" src="<?= $avatar->url() ?>">
        </figure>
       </div>
          <?php endif ?>
      <time class="dt-published"><?= $page->date()->toDate('d.m.Y') ?></time>
    <p class="p-summary"><?= $article->text()->excerpt(300) ?></p>
    <a href="<?= $article->url() ?>" rel="canonical">Read more…</a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>