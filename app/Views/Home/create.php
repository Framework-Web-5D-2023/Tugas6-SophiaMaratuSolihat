<?= $this->extend("Views/home"); ?>

<?= $this->section("content"); ?>
<div class="container">
  <div class="container">
    <h1><?= $title; ?></h1>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Nama </h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["Masukkan Nama....."]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Npm </h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["Masukkan NPM....."]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Prodi </h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["Masukkan Prodi....."]; ?></h3>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>