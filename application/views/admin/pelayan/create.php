   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
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
           <div class="col-md-8">
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">Create Pelayan</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>

               <form role="form" action="<?= base_url('admin/pelayan/create_pelayan'); ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Nama</label>
                     <select class="select2bs4" id="name" name="name" data-placeholder="Pilih Nama" style="width: 100%;">
                       <?php foreach ($member as $m) { ?>
                         <option value="<?php echo $m['member_id'] ?>"><?php echo $m['nama'] ?></option>
                       <?php } ?>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Level</label>
                     <select name="level" id="level" class="form-control">
                       <option value="Pengurus">Pengurus</option>
                       <option value="Pelayan">Pelayan</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Deskripsi</label>
                     <input class="form-control" id="description" name="description">
                   </div>
                 </div>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->