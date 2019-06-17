<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>

  <div class="h-feed notes">
    <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note): ?>
    
      <article class=" h-entry note">
        <header class="note-header">
         
          <a href="<?= $note->url() ?>">
           <time class="dt-published"><?= $note->date()->toDate('Y F d') ?></time>
          </a>
        </header>
         <?= $note->text()->kt() ?>
      </article>
  
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>
