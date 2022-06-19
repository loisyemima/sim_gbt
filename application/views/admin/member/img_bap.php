   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="col-6">
           <h1 class="h3 mb-0 text-gray-800">Tambah Dokumen</h1>
         </div><!-- /.col -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">

         <div class="row">
           <div class="col-lg-4">
             <!-- general form elements -->
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">Sertifikat Baptis</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/member/create_img/' . $member['member_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Name</label>
                     <input class="form-control" id="image_name" name="image_name" value="<?= set_value('image_name') ?>">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputFile">File input</label>
                     <div class="input-group">
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- /.card-body -->
                 <?php foreach ($img as $key => $value) { ?>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <img src="<?= base_url('assets/img/profile/member/' . $value->image1) ?>" id="foto_load" width="250px" height="300px">
                     </div>
                   </div>
                 <?php } ?>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
                 </div>
               </form>
             </div>
           </div>
           <!-- /.card -->
           <div class="col-lg-4">
             <!-- general form elements -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">Sertifikat Anak</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/member/create_anak/' . $member['member_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Name</label>
                     <input class="form-control" id="nama_image" name="nama_image" value="<?= set_value('image_name') ?>">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputFile">File input</label>
                     <div class="input-group">
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- /.card-body -->
                 <?php foreach ($img3 as $key => $value) { ?>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <img src="<?= base_url('assets/img/profile/member/' . $value->image2) ?>" id="foto_load" width="250px" height="300px">
                     </div>
                   </div>
                 <?php } ?>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
                 </div>
               </form>
             </div>
             <!-- /.card -->
           </div>
           <div class="col-lg-4">
             <div class="card card-info">
               <div class="card-header">
                 <h3 class="card-title">Sertifikat Pernikahan</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/member/create_per/' . $member['member_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Name</label>
                     <input class="form-control" id="nama_image3" name="nama_image3" value="<?= set_value('image_name3') ?>">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputFile">File input</label>
                     <div class="input-group">
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- /.card-body -->
                 <?php foreach ($img2 as $key => $value) { ?>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <img src="<?= base_url('assets/img/profile/member/' . $value->image3) ?>" id="foto_load" width="250px" height="300px">
                     </div>
                   </div>
                 <?php } ?>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
                 </div>
               </form>
             </div>
             <!-- /.card -->
           </div>
         </div>
       </div>
   </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->