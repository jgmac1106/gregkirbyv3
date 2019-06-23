<?php snippet('header') ?>

<main class="h-feed">
  <header class="intro">
    <h1 class="p-name"><?= $page->title() ?></h1>
    <a class="u-author" href="/"></a>
  </header>

  <div class="notes">
    <?php foreach($notes1 = $page->children()->listed()->flip()->paginate(10) as $note): ?>

    
      <article class=" h-entry note">
        <header class="note-header">
         
          <a href="<?= $note->url() ?>">
           <time class="dt-published"><?= $note->date()->toDate('Y F d h:i a')?></time>
          </a>
          <a class="u-author" href="/"></a>
        </header>
         <?= $note->text()->kt() ?>
      </article>
  
    <?php endforeach ?>
    <?php if ($notes1->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if ($notes1->pagination()->hasNextPage()): ?>
  <a rel="next" href="<?= $notes1->pagination()->nextPageURL() ?>">
    ‹ older posts
  </a>
  <?php endif ?>

  <?php if ($notes1->pagination()->hasPrevPage()): ?>
  <a rel="prev" href="<?= $notes1->pagination()->prevPageURL() ?>">
    newer posts ›
  </a>
  <?php endif ?>

</nav>
<?php endif ?>
  </div>

</main>

<?php snippet('footer') ?>
