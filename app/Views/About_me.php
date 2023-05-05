
<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('content') ?>

<section>
  
   
   <div class="text-center" id="about">
      <div class="text-custom fw-semibold fs-2 py-4">ABOUT ME</div>
      <div class="mt-5">
         <div class="container">
            <div id="persona" class="row text-brown">
               <div class="col ">
                  <img src="../Image/img3.png" alt="">
                  <div class="text-center">
                     <div class="fw-bold mt-2 mb-4">PERSONAL INFORMATON</div>
                     <p>Name: Mega Lanalee T. Arbolado</p>
                     <p>Place of Birth: Cuyo, Palawan</p>
                     <p>Age: 22 yrs old</p>
                  </div>
               </div>
               <div class="col">
                  <img src="../Image/img5.png" alt="">
                  <div class="text-center">
                     <div class="fw-bold mt-2 mb-4">HOBBIES</div>
                     <p>Painting</p>
                     <p>Swimming</p>
                     <p>Watching Kdrama</p>
                  </div>
               </div>
               <div class="col">
                  <img src="../Image/Screenshot (224).png" alt="">
                  <div class="text-center">
                     <div class="fw-bold mt-2 mb-4">SKILLS</div>
                     <p>Computer Literature</p>
                     <P>Excellent Communication</P>
                     <P>Problem-Solving</P>
                  </div>
               </div>
               <div class="col">
                  <img src="../Image/img6.png" alt="">
                  <div class="text-center">
                     <div class="fw-bold mt-2 mb-4">WORK EXPERIENCE</div>
                     <p>When I was in Senior HighSchool I took my Immersion at the <br> Municipality of Cuyo Palawan in the Department of Accounting Office.
                        <br> I was assigned by the accounting officer to do basic bookkeeping.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-custom text-center py-5">
        <br> <br><br><button class="btn btn-outline-danger " onclick="history.back()">Home</button>
      </div>
      
      <?= $this->endSection() ?>