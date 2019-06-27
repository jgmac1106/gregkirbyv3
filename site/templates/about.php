<?php snippet('header') ?>

<main class="h-card">
  <header class="intro">
    <h2 class="p-name"><?= $page->title() ?></h2>
  </header>

  <div class="layout">

    <aside>
      <section>
        <h2>Address</h2>
        <div class="text p-adr">
          <?= $page->address()->kt() ?>
        </div>
      </section>

      <section>
        <h2>Email</h2>
        <div class="u-email text">
          <?= html::email($page->email()) ?>
        </div>
      </section>

      <section>
        <h2>Phone</h2>
        <div class="text p-phone">
          <?= html::tel($page->phone()) ?>
        </div>
      </section>

      <section>
        <h2>On the web</h2>
        <div class="text">
          <ul>
            <?php foreach ($page->social()->toStructure() as $social): ?>
            <li class="u-url"><?= html::a($social->url(), $social->platform()) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </section>

    </aside>

    <div class="text">
      <?= $page->text()->kt() ?>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
