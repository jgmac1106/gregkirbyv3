<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article longreads">
  <article class="h-entry">
    <header>
    <h2 class="p-name"><?= $page->title()->html() ?></h2>
    <div class="p-author h-card pubInfo">
      <?php if($author = $page->author()->toUser()): ?>
  <p class="p-name"><?= $author->name() ?></p>
  <?php if($avatar = $author->avatar()): ?>
    <figure>
      <img class="bioPhoto u-photo" src="<?= $avatar->url() ?>">
    </figure>
  <?php endif ?>
<?php endif ?>
   </div>
    <p>Published on  <time class="dt-published article-date"><?= $page->date()->toDate('Y F d h:i a') ?></time>
</p>
<span class="summary p-summary"><?= $page->intro() ?></span>
</header>
    <div class="copy e-content">
    <?= $page->text()->kirbytext() ?>
    </div>
    <footer>
    <a href="<?= url('blog') ?>">Back…</a>
   </footer>
  </article>
</section>

<?php snippet('footer') ?>