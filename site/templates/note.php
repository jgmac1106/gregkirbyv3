<?php snippet('header') ?>

<main>
  <article class="h-entry note">
    <header class="note-header intro">
      <time class="dt-published note-date"><?= $page->date()->toDate('Y F d h:i a') ?></time>
      <?php if ($page->tags()->isNotEmpty()) : ?>
      <p class="note-tags tags"><?= $page->tags() ?></p>
      <?php endif ?>
      <a class="u-author" href="/"></a>
    </header>

  <div class="p-content note-text text">
      <?= $page->text()->kt() ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>
