
<main>
  <section>
    <img src="<?= $poster_url; ?>" width="300" alt="poster de <?=$data_title ?> "
    style="border-radius: 8px"
    />
  </section>
  <hgroup>
    <h3><?=$title; ?> - <?= $until_message ?></h3>
    <p>Fecha de estreno: <?= $release_date; ?></p>
    <p>La siguiente es:  <?= $following_production["title"]; ?></p>
  </hgroup>
</main>
