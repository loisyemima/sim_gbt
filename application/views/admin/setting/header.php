   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="col-6">
           <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
         </div><!-- /.col -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">

         <div class="row">
           <div class="col-md-8">
             <!-- general form elements -->
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title"></h3>
               </div>
               <?php
                // Session 
                if ($this->session->flashdata('sukses')) {
                  echo '<div class="alert alert-success">';
                  echo $this->session->flashdata('sukses');
                  echo '</div>';
                }

                // File upload error
                if (isset($error)) {
                  echo '<div class="alert alert-success">';
                  echo $error;
                  echo '</div>';
                }

                // Error
                echo validation_errors('<div class="alert alert-success">', '</div>');
                ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/setting/header/' . $site['config_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <input type="hidden" name="config_id" value="<?php echo $site['config_id'] ?>">
                   <div class="form-group">
                     <label for="exampleInputFile">Gambar</label>
                     <div class="input-group">
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Teks</label>
                     <textarea class="form-control" id="summernote" name="ket" value=""><?php echo $site['ket'] ?></textarea>
                   </div>
                 </div>
                 <!-- /.card-body -->

                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Save</button>
                 </div>
               </form>
             </div>
             <!-- /.card -->
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->