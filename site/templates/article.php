<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article">
  <article class="h-entry">
    <h1 class="p-name"><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>
  </article>
     <div class="p-author h-card">
      <?php if($author = $page->author()->toUser()): ?>
  <h2 class="p-name"><?= $author->name() ?></h2>
  <?php if($avatar = $author->avatar()): ?>
    <figure>
      <img class="u-photo" src="<?= $avatar->url() ?>">
    </figure>
  <?php endif ?>
<?php endif ?>
   </div>
</section>

<?php snippet('footer') ?>
