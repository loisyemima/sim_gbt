   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-6">
             <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
           </div><!-- /.col -->
         </div><!-- /.row -->
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
                 <h3 class="card-title">Edit User</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('user/profile/edit_profile/' . $user['id']) ?>" method="post">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Upload Image</label>
                     <input type="file" name="image" class="form-control" id="imagePreview">
                     <div><img id="file" src="<?php echo base_url('assets/img/profile/' . $user['image']) ?>" width="458px" height="355px"></div>
                   </div>
                   <div class="form-group">
                     <label>Name</label>
                     <input class="form-control" id="name" name="name" value="<?php echo $user['name'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Username</label>
                     <input class="form-control" id="username" name="username" value="<?php echo $user['username'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Email</label>
                     <input class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>">
                   </div>
                 </div>
                 <!-- /.card-body -->

                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
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