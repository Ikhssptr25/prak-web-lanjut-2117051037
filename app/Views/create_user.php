<?= $this->extend('layouts/app')?>
<?=$this->section('content')?>

    <div class="d-flex justify-content-center align-items-center flex-column" style="width: 100vw; height: 100vh; background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);color:white;">
        <h2>Biodata</h2>
        <form class="d-flex flex-column mt-3" action="<?= base_url('/user/store') ?>" method="POST" style="border: 5px solid black; padding: 30px;" enctype="multipart/form-data">
        <label for="nama">Nama</label><br>
<input type="text" id="nama" name="nama" value="<?= old('nama') ?>">

<?php if (session()->getFlashdata('validationErrors') && array_key_exists('nama', session()->getFlashdata('validationErrors'))) : ?>
    <div class="invalid-feedback">
        <?= session()->getFlashdata('validationErrors')['nama']; ?>
    </div>
<?php endif; ?>
<br>
<label for="npm">NPM</label>
<input type="text" class="form-control mt-2 <?= session()->getFlashdata('validationErrors') && session()->getFlashdata('validationErrors')['npm'] ? 'is-invalid' : '' ?>" id="npm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">

<?php if (session()->getFlashdata('validationErrors') && session()->getFlashdata('validationErrors')['npm']) : ?>
    <div class="invalid-feedback">
        <?= session()->getFlashdata('validationErrors')['npm']; ?>
    </div>
<?php endif; ?><br>


            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <?php foreach ($kelas as $item) : ?>
                    <option value="<?= $item['id'] ?>">
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            
            <input type="file" name="foto" id="foto" class="form-control"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?= $this->endSection()?>
