<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="bg-custom py-4">  
        <div class="container-fluid">
        <div class= fs-1>
            
             <div class=" text-center"> <span class="fw-bold">MOTTO</span>
             </div> 
        </div>
     </div>
    <div class="background text-center fw-semibold fs-2">IF YOU CAN DREAM IT,
        <P>YOU CAN DO IT</P>
    </div>
    <div class="bg-custom text-center py-1">
        <br> <br><br><button class="btn btn-outline-danger " onclick="history.back()">Home</button>
      </div>
</body>

<?= $this->endSection() ?>