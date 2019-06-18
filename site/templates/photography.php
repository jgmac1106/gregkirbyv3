<?php snippet('header') ?>

<main>
  <header class="h-feed intro">
    <h1 class="p-name"><?= $page->title() ?></h1>
     <a class="u-author" href="/"></a>
  </header>

  <ul class="albums"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed() as $album): ?>
    <li class="h-entry">
      <a href="<?= $album->url() ?>">
        <figure class="u-photo">
          <?php if ($cover = $album->cover()): ?>
          <?= $cover->crop(800, 1000) ?>
          <?php endif ?>
          <figcaption class="p-name"><?= $album->title() ?></figcaption>
        </figure>
      </a>
        <a class="u-author" href="/"></a>
    </li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>