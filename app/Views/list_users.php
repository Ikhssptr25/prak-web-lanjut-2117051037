<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<!DOCTYPE html>
<div class="row">
    
    <a class="btn btn-primary mt-3" href="<?=base_url('user/create')?>" style="width:150px;margin-left:50px;">tambah data</a>
</div>
</div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa</title>


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
</head>
<body>
    <div class="container">
        <h2>Tabel Mahasiswa</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td class="text-center">
                            
                            <button class="btn btn-edit mx-1 ">Edit</button>
                            <button class="btn btn-delete mx-1">Delete</button>
                            <a class="btn btn-success mx-1" href="<?=base_url('/user/'.$user['id'])?>">Detail</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Memasukkan script Bootstrap JS (opsional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?=$this->endSection()?>
