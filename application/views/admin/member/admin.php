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
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/member/getadmin/') ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="from-group">
                     <label for="">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Full name" value="<?php echo $member['username'] ?>">
                     <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="from-group">
                     <label for="">Password</label>
                     <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" value="<?php echo $member['password'] ?>">
                     <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="form-group">
                     <label for="">Ulang Password</label>
                     <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password" value="<?php echo $member['password'] ?>">
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