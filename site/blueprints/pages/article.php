<?php snippet('header') ?>

<article class="h-entry">

  <h1 class="p-name"><?= $page->title()->html() ?></h1>
  <time class="dt-published"><?= $page->date()->toDate('d.m.Y') ?></time>
  <?= $page->text()->kirbytext() ?>

  <?php if($author = $page->author()->toUser()): ?>
    <aside class="p-author h-card author">

      <h1 class="p-name"><?= $author->name() ?></h1>

      <?php if($avatar = $author->avatar()): ?>
        <figure>
          <img class="u-photo" src="<?= $avatar->url() ?>">
        </figure>
      <?php endif ?>

    </aside>
</article>

<?php snippet('footer') ?>