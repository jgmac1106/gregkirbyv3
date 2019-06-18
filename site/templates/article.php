<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article h-entry">
  <article>
    <h1 class="p-name"><?= $page->title()->html() ?></h1>
    <p>Published on <time datetime="<?= $page->date()->toDate('c') ?>" pubdate="pubdate"> by
      <a class="u-author" href="/">Greg McVerry</a>
    <?= $page->date()->toDate('Y.m.d H:i') ?>
  </time>
    <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>
   
  </article>
</section>

<?php snippet('footer') ?>