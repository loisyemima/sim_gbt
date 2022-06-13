   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
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
                 <h3 class="card-title">Edit Pelayan</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->

               <form role="form" action="<?= base_url('admin/kegiatan/edit_kegiatan/' . $kegiatan['kegiatan_id']); ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Nama Kegiatan</label>
                     <input class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?php echo $kegiatan['nama_kegiatan'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal Kegiatan</label>
                     <input class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="<?php echo $kegiatan['tgl_kegiatan'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Text</label>
                     <textarea placeholder="Enter ..." name="deskripsi" id="summernote"><?php echo $kegiatan['deskripsi'] ?>
                    </textarea>
                   </div>
                 </div>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="reset" class="btn btn-secondary">Reset</button>
                 </div>
               </form>
             </div>
           </div>
         </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->