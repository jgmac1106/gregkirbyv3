<?php snippet('header') ?>

<main class="h-feed">
  <header class="intro">
    <h1 class="p-name"><?= $page->title() ?></h1>
    <a class="u-author" href="/"></a>
  </header>

  <div class="h-feed notes">
    <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note): ?>
    
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
  </div>

</main>

<?php snippet('footer') ?>
