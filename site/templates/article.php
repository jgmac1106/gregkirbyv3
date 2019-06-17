<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article h-entry">
  <article>
    <h1 class="p-name"><?= $page->title()->html() ?></h1>
    <time datetime="<?= $page->date()->toDate('c') ?>" pubdate="pubdate">
    <?= $page->date()->toDate('Y.m.d H:i') ?>
  </time>
    <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>
    <aside>
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
    </aside>
  </article>
</section>

<?php snippet('footer') ?>