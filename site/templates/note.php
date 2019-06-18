<?php snippet('header') ?>

<main>
  <article class="h-entry note">
    <header class="note-header intro">
     <p>Published on <time datetime="<?= $page->date()->toDate('c') ?>" pubdate="pubdate"> by
      <a class="u-author" href="/">Greg McVerry</a>
      <?php if ($page->tags()->isNotEmpty()) : ?>
      <p class="note-tags tags"><?= $page->tags() ?></p>
      <?php endif ?>
    </header>

  <div class="p-content note-text text">
      <?= $page->text()->kt() ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>
