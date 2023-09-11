<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
    
</style>
</head>
<body>
<div style="height: 100vh; width: 100%; " class="d-flex justify-content-center align-items-center">
    <div  class="d-flex justify-content-center align-items-center" style="flex-direction: column;">
        <div class="d-flex" >
            <img src="/images/ikhsan.JPEG" style="border-radius:50%;width:20vh;height:20vh;"/>
        </div>
        <div class="d-flex">
            <div>Nama</div>
            <div>:</div>
            <div><?= $nama ?></div>
        </div>
        <div class="d-flex">
            <div>Kelas</div>
            <div>:</div>
            <div><?= $kelas ?></div>
        </div>
        <div class="d-flex">
            <div>Npm</div>
            <div>:</div>
            <div><?= $npm ?></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</body>
</html>
