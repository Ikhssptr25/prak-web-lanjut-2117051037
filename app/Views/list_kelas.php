<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <?php if (session('validation') && session('validation')->hasError('delete_failed')) : ?>
            <div class="alert alert-danger">
              <?= session('validation')->getError('delete_failed'); ?>
            </div>
          <?php endif; ?>
          <h2>Tabel Kelas</h2>
          <a class="btn btn-primary mt-3" href="<?= base_url('kelas/create') ?>" style="width:150px;margin-left:10px;margin-top:1500px;">tambah Kelas</a></br></br>

        </div>
        <!-- Memasukkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .container {
            margin-top: 20px;
        }
        .btn-edit {
            background-color: #007bff;
            color: #fff;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        .table {
            background-color: #f8f9fa; /* Warna latar belakang tabel */
        }
        .table th, .table td {
            border: 1px solid #dee2e6; /* Garis tepi sel tabel */
        }
        .table th {
            background-color: #343a40; /* Warna latar belakang header kolom */
            color: #fff;
        }
    </style>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="Container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th >No</th>
                  <th >Nama Kelas</th>
                  <th >Kapasitas Kelas</th>
                  <th >Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $kelas) { ?>
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?= $kelas['nama_kelas'] ?></span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?= $kelas['kapasitas'] ?></span>
                    </td>
                    <td style="display: flex;" class="align-middle text-center">
                      <a class="btn btn-success mx-1" href="<?= base_url('kelas/' . $kelas['id']) ?>"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>Detail</a>
                      <a class="btn btn-edit mx-1 "href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

                      <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-delete mx-1">
                          <i class="fas fa-trash text-dark me-2" aria-hidden="true"></i>
                          Delete
                        </button>
                      </form>
                      
                    </td>
                  </tr>
                <?php } ?>
                   <!-- Memasukkan script Bootstrap JS (opsional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection('content') ?>