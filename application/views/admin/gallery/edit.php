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
                 <h3 class="card-title"><?= $title; ?></h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/gallery/edit_gallery/' . $gallery['gallery_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
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
                     <label>Nama Gambar</label>
                     <input class="form-control" id="nama_gambar" name="nama_gambar" value="<?php echo $gallery['nama_gambar'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Judul</label>
                     <input class="form-control" id="judul" name="judul" value="<?php echo $gallery['judul'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Kegiatan</label>
                     <select name="kegiatan" id="kegiatan" class="form-control">
                       <option value="">Pilih Kegiatan</option>
                       <?php foreach ($event as $e) : ?>
                         <option value="<?= $e['event_id'] ?>" <?= $e['event_id'] == $gallery['kegiatan'] ? "selected" : null ?>><?= $e['name'] ?></option>
                       <?php endforeach; ?>
                     </select>
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