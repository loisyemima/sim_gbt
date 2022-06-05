 <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->

 <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
   <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
     <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2 bg-transparent col-8 mx-auto">
       <div class="bg-gradient-secondary shadow-secondary border-radius-lg p-3">
         <h3 class="text-white text-primary mb-0 text-center">Profil GBT Kristus Ajaib Siliragung</h3>
       </div>
     </div>
     <section class="py-sm-7 py-5 position-relative">
       <div class="container">
         <?php foreach ($profile as $p) { ?>
           <div class="row">
             <div class="col-md-8 mx-auto mb-5 mt-0">
               <img src="<?= base_url('assets/img/upload/' . $p['gambar']); ?>" class="card-img-top p-2 pe-md-3" alt="">
             </div><br>
             <div class="col-12 mx-auto">
               <div class="row">

                 <!--<img class="img-fluid" width="300px" height="200px" style="" src="<?= base_url('assets/img/upload/' . $p['gambar']); ?>">-->
                 <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                   <div class="d-flex justify-content-between align-items-center mb-0">
                     <h3 class="mb-0"><?php echo $p['deskripsi']; ?></h3>
                   </div>
                 </div>

               <?php } ?>
               </div>
             </div>
           </div>
       </div>
     </section>
     <!-- END Testimonials w/ user image & text & info -->
   </div>
 </div>