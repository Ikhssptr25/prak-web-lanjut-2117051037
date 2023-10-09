<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
    .item{
      
        
    }
</style>
</head>
<body> 
<div style="height: 100vh; width: 100%; border:3px solid black;background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);color:white;" class="d-flex justify-content-center align-items-center flex-column">
        <div class="d-flex mb-4"  >
            <img src="<?=$user['foto'] ??  '<default-foto>'?>" style="border-radius:50%;width:20vh;height:20vh;"/>
        </div>
    <div  class="d-flex justify-content-center align-items-start p-5 text-left" style="border-radius:10px;flex-direction: column;border:3px solid black">
       
        <div class="d-flex p-3 item">
            <div>Nama : <?=$user['nama'] ?></div>
        </div>
        <div class="d-flex p-3 item">
            <div>Kelas : <?=$user['nama_kelas'] ?></div>
        </div>
        <div class="d-flex p-3 item">
            <div>Npm : <?= $user['npm'] ?></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</body>
</html>
