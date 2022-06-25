   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-6">
             <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
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
                 <h3 class="card-title"></h3>
               </div>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('user/profile/ubah_password/' . $user['member_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="current_password">Password Lama</label>
                     <input type="password" class="form-control" name="current_password" id="current_password">
                     <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="form-group">
                     <label for="new_password1">Password Baru</label>
                     <input type="password" class="form-control" name="new_password1" id="new_password1">
                     <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="form-group">
                     <label for="new_password2">Ulangi Password Baru</label>
                     <input type="password" class="form-control" name="new_password2" id="new_password2">

                     <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                 </div>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Change Password</button>
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