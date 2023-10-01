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
<div style="height: 100vh; width: 100%; border:3px solid black;" class="d-flex justify-content-center align-items-center flex-column">
        <div class="d-flex mb-4"  >
            <img src="/images/ikhsan.JPEG" style="border-radius:50%;width:20vh;height:20vh;"/>
        </div>
    <div  class="d-flex justify-content-center align-items-start p-5 text-left" style="border-radius:10px;flex-direction: column;border:3px solid black">
       
        <div class="d-flex p-3 item">
            <div>Nama : <?= $nama ?></div>
        </div>
        <div class="d-flex p-3 item">
            <div>Kelas : <?= $kelas ?></div>
        </div>
        <div class="d-flex p-3 item">
            <div>Npm : <?= $npm ?></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</body>
</html>
