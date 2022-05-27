   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active"><?= $title; ?></li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">

         <div class="row">
           <div class="col-lg-6">
             <?php if (validation_errors()) : ?>
               <div class="alert alert-danger" role="alert">
                 <?= validation_errors(); ?>
               </div>
             <?php endif; ?>

             <?= $this->session->flashdata('message'); ?>

             <form role="form" action="<?= base_url('admin/profile_gereja/edit_profile/' . $profile['profile_id']); ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <label for="exampleInputFile">File input</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                 </div>
               </div>
               <div class="form-group">
                 <label>Image Name</label>
                 <input class="form-control" id="image_name" name="image_name" value="<?php echo $profile['image_name'] ?>">
               </div>
               <div class="form-group">
                 <label>Text</label>
                 <textarea placeholder="Enter ..." name="description" id="summernote" value="<?php echo $profile['description'] ?>">
                    </textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="reset" class="btn btn-secondary">Reset</button>
             </form>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->