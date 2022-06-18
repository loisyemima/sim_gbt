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
                 <h3 class="card-title">Edit Pernikahan</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form action="<?= base_url('admin/pendaftaran/edit_pernikahan2/' . $pernikahan['pernikahan_id']); ?>" method="post">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="">Nama Pria</label>
                     <input type="text" class="form-control" id="nama_laki" name="nama_laki" placeholder="" value="<?php echo $pernikahan['nama_laki'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat Lahir Pria</label>
                     <input type="text" class="form-control" id="tempat_laki" name="tempat_laki" placeholder="" value="<?php echo $pernikahan['tempat_laki'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal Lahir Pria</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="lahir_laki" name="lahir_laki" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $pernikahan['lahir_laki'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="">Nama Perempuan</label>
                     <input type="text" class="form-control" id="nama_perempuan" name="nama_perempuan" placeholder="" value="<?php echo $pernikahan['nama_perempuan'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat Lahir perempuan</label>
                     <input type="text" class="form-control" id="tempat_perempuan" name="tempat_perempuan" placeholder="" value="<?php echo $pernikahan['tempat_perempuan'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal Lahir Perempuan</label>
                     <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                       <input type="text" id="lahir_perempuan" name="lahir_perempuan" class="form-control datetimepicker-input" data-target="#reservationdate2" value="<?php echo $pernikahan['lahir_perempuan'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <label for="">No Surat </label><a>*No terakhir :<?php echo $kode['kode'] ?></a>
                     <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $pernikahan['kode'] ?>" disabled>
                   </div>
                   <div class="form-group">
                     <label for="">Hari Pernikahan</label>
                     <input type="text" class="form-control" id="hari_pernikahan" name="hari_pernikahan" placeholder="" value="<?php echo $pernikahan['hari_pernikahan'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal Pernikahan</label>
                     <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                       <input type="text" id="tgl_pernikahan" name="tgl_pernikahan" class="form-control datetimepicker-input" data-target="#reservationdate3" value="<?php echo $pernikahan['tgl_pernikahan'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class=" form-group">
                     <label for="">Tempat</label>
                     <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $pernikahan['tempat'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Dilayani oleh</label>
                     <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $pernikahan['dilayani'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat TTD</label>
                     <input type="text" class="form-control" id="tempattgl_ttd" name="tempattgl_ttd" placeholder="" value="<?php echo $pernikahan['tempattgl_ttd'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal TTD</label>
                     <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                       <input type="text" id="tgl_ttd" name="tgl_ttd" class="form-control datetimepicker-input" data-target="#reservationdate4" value="<?php echo $pernikahan['tgl_ttd'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class=" form-group">
                     <label for="">Nama Gembala</label>
                     <input type="text" class="form-control" id="nama_ttd" name="nama_ttd" placeholder="" value="<?php echo $pernikahan['nama_ttd'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">NIK</label>
                     <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $pernikahan['nik'] ?>">
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