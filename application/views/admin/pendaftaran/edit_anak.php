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
                 <h3 class="card-title">Edit Pendaftaran Anak</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form action="<?= base_url('admin/pendaftaran/edit_anakkod/' . $anak['anak_id']); ?>" method="post">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="">Nama Anak</label>
                     <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="" value="<?php echo $anak['nama_anak'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Jenis Kelamin</label>
                     <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="" value="<?php echo $anak['jenis_kelamin'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat Lahir</label>
                     <input type="text" class="form-control" id="tempattgl_lahir" name="tempattgl_lahir" placeholder="" value="<?php echo $anak['tempattgl_lahir'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal lahir</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $anak['tgl_lahir'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="">Nama Ayah</label>
                     <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="" value="<?php echo $anak['nama_ayah'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Nama Ibuk</label>
                     <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="" value="<?php echo $anak['nama_ibu'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">No Surat </label><a>*No terakhir :<?php echo $kode['kode'] ?></a>
                     <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $anak['kode'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Hari Baptis</label>
                     <input type="text" class="form-control" id="hari_penyerahan" name="hari_penyerahan" placeholder="" value="<?php echo $anak['hari_penyerahan'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="tgl1">Tanggal Baptis</label>
                     <input type="date" id="tgl1" name="tgl_penyerahan" class="form-control" value="<?php echo $anak['tgl_penyerahan'] ?>">
                   </div>
                   <div class=" form-group">
                     <label for="">Tempat</label>
                     <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $anak['tempat'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Dilayani oleh</label>
                     <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $anak['dilayani'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat TTD</label>
                     <input type="text" class="form-control" id="tempattgl_ttd" name="tempattgl_ttd" placeholder="" value="<?php echo $anak['tempattgl_ttd'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="tgl2">Tanggal TTD</label>
                     <input type="date" id="tgl2" name="tgl_ttd" class="form-control" value="<?php echo $anak['tgl_ttd'] ?>">
                   </div>
                   <div class=" form-group">
                     <label for="">Nama Gembala</label>
                     <input type="text" class="form-control" id="nama_ttd" name="nama_ttd" placeholder="" value="<?php echo $anak['nama_ttd'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">NIK</label>
                     <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $anak['nik'] ?>">
                   </div>
                 </div>
                 <div class="card-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">edit</button>
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