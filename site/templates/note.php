<?php snippet('header') ?>

<main>
  <article class="h-entry note">
    <header class="note-header intro">
      <div class="h-card">
      <?php if($author = $page->author()->toUser()): ?>
  <h2 class="p-name"><?= $author->name() ?></h2>
  <?php if($avatar = $author->avatar()): ?>
    <figure>
      <img class="u-photo" src="<?= $avatar->url() ?>">
    </figure>
  <?php endif ?>
<?php endif ?>
   </div>
      <time class="dt-published note-date"><?= $page->date()->toDate('Y F d') ?></time>
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
