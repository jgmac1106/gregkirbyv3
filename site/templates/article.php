<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="blog" role="main">

<article class="h-entry">

  <h1 class="p-name"><?= $page->title()->html() ?></h1>
  <time class="dt-published"><?= $page->date()->toDate('d.m.Y') ?></time>
  <?= $page->text()->kirbytext() ?>
   <?php foreach($page->children()->listed()->flip() as $article): ?>
  <?php if($author = $page->author()->toUser()): ?>
    <aside class="p-author h-card author">

      <h1 class="p-name"><?= $author->name() ?></h1>

      <?php if($avatar = $author->avatar()): ?>
        <figure>
          <img class="u-photo" src="<?= $avatar->url() ?>">
        </figure>
      <?php endif ?>

      <?= $author->bio()->kirbytext() ?>

      <h2>On the web:</h2>

      <ul>
        <li><a class="u-url" href="<?= $author->website() ?>">Website</a></li>
        <li><a class="u-url" href="<?= $author->twitter() ?>">Twitter</a></li>
        <li><a class="u-url" href="<?= $author->instagram() ?>">Instagram</a></li>
        <li><a class="u-url" href="<?= $author->linkedin() ?>">LinkedIn</a></li>
      </ul>

    </aside>
  <?php endif ?>
</article>

<?php snippet('footer') ?>


  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

