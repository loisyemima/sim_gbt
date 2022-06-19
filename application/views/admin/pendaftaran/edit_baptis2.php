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
                 <h3 class="card-title">Isi Semua Data!!!</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form action="<?= base_url('admin/pendaftaran/edit_baptis2/' . $baptis['baptis_id']); ?>" method="post">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="">Nama</label>
                     <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="<?php echo $baptis['nama'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Jenis Kelamin</label>
                     <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                       <option value="">Jenis Kelamin</option>
                       <option value="Perempuan" <?php if ($baptis['jenis_kelamin'] == "Perempuan") {
                                                    echo "selected";
                                                  } ?>>Perempuan</option>
                       <option value="Laki-laki" <?php if ($baptis['jenis_kelamin'] == "Laki-laki") {
                                                    echo "selected";
                                                  } ?>>Laki-laki</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label for="">Tempat Lahir</label>
                     <input type="text" class="form-control" id="tempattgl_lahir" name="tempattgl_lahir" placeholder="" value="<?php echo $baptis['tempattgl_lahir'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal lahir</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $baptis['tgl_lahir'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="">Nama Ayah</label>
                     <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="" value="<?php echo $baptis['nama_ayah'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Nama Ibu</label>
                     <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="" value="<?php echo $baptis['nama_ibu'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">No Surat </label><a>*No terakhir :<?php echo $kode['kode'] ?></a>
                     <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $baptis['kode'] ?>" disabled>
                   </div>
                   <div class="form-group">
                     <label for="">Hari Baptis</label>
                     <input type="text" class="form-control" id="hari_tanggal" name="hari_tanggal" placeholder="" value="<?php echo $baptis['hari_tanggal'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal Baptis</label>
                     <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                       <input type="text" id="tgl_baptis" name="tgl_baptis" class="form-control datetimepicker-input" data-target="#reservationdate2" value="<?php echo $baptis['tgl_baptis'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class=" form-group">
                     <label for="">Tempat</label>
                     <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $baptis['tempat'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Dilayani oleh</label>
                     <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $baptis['dilayani'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">Tempat TTD</label>
                     <input type="text" class="form-control" id="tempat_ttd" name="tempat_ttd" placeholder="" value="<?php echo $baptis['tempat_ttd'] ?>">
                   </div>
                   <div class="form-group">
                     <label>Tanggal TTD</label>
                     <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                       <input type="text" id="tgl_ttd" name="tgl_ttd" class="form-control datetimepicker-input" data-target="#reservationdate3" value="<?php echo $baptis['tgl_ttd'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class=" form-group">
                     <label for="">Nama Gembala</label>
                     <input type="text" class="form-control" id="nama_gembala" name="nama_gembala" placeholder="" value="<?php echo $baptis['nama_gembala'] ?>">
                   </div>
                   <div class="form-group">
                     <label for="">NIK</label>
                     <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $baptis['nik'] ?>">
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