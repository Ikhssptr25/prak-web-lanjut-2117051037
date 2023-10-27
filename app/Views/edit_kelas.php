<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<main class="form-signin w-100 m-auto">
  <form  class="d-flex flex-column mt-3" method="POST" action="<?= base_url('/kelas/' . $kelas['id']) ?>"  enctype="multipart/form-data" style="border: 5px solid black; padding: 30px;">
    <div class="form-floating">
      <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
      <label for="floatingName">Nama Kelas</label>
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingKapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= $kelas['kapasitas'] ?>">
      <label for="floatingKapasitas">Kapasitas</label>
      <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('kapasitas'); ?>
        </div>
      <?php endif; ?>
    </div>
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>
    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Masukkan</button>
  </form>
</main>
<?= $this->endSection('content') ?>