<?php snippet('header') ?>

<main class="h-feed">
  <header class="intro">
    <h1 class="p-name"><?= $page->title() ?></h1>
    <a class="u-author" href="/"></a>
  </header>

  <div class="notes">
    <?php if ($notes->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if ($notes->pagination()->hasNextPage()): ?>
  <a class="next" href="<?= $notes->pagination()->nextPageURL() ?>">
    ‹ older posts
  </a>
  <?php endif ?>

  <?php if ($notes->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?= $notes->pagination()->prevPageURL() ?>">
    newer posts ›
  </a>
  <?php endif ?>

</nav>
<?php endif ?>
    
      <article class=" h-entry note">
        <header class="note-header">
         
          <a href="<?= $note->url() ?>">
           <time class="dt-published"><?= $note->date()->toDate('Y F d h:i a')?></time>
          </a>
          <a class="u-author" href="/"></a>
        </header>
         <?= $note->text()->kt() ?>
      </article>
  
  </div>

</main>

<?php snippet('footer') ?>
