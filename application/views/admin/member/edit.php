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
                 <h3 class="card-title">Edit Anggota Jemaat</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/member/edit_member/' . $member['member_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>nama</label>
                     <input class="form-control" id="nama" name="nama" value="<?php echo $member['nama'] ?>">
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
                   <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input class="form-control" id="tempat" name="tempat" value="<?php echo $member['tempat'] ?>">
                   </div>
                   <!-- Date -->
                   <div class="form-group">
                     <label>Tanggal lahir</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $member['tgl_lahir'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Golongan Umur</label>
                     <select name="umur" id="umur" class="form-control">
                       <option value="">Pilih Umur</option>
                       <option value="Anak-anak" <?php if ($member['umur'] == "Anak-anak") {
                                                    echo "selected";
                                                  } ?>>Anak-anak</option>
                       <option value="Pemuda" <?php if ($member['umur'] == "Pemuda") {
                                                echo "selected";
                                              } ?>>Pemuda</option>
                       <option value="Dewasa" <?php if ($member['umur'] == "Dewasa") {
                                                echo "selected";
                                              } ?>>Dewasa</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Status</label>
                     <select name="status" class="form-control">
                       <option value="Anggota" <?php if ($member['status'] == "Anggota") {
                                                  echo "selected";
                                                } ?>>Anggota</option>
                       <option value="Jemaat" <?php if ($member['status'] == "Jemaat") {
                                                echo "selected";
                                              } ?>>Jemaat</option>
                     </select>
                   </div>
                   <div class="from-group">
                     <label for="">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Full name" value="<?php echo $member['username'] ?>">
                   </div>
                   <div class="from-group">
                     <label for="">No Telp</label>
                     <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Full name" value="<?php echo $member['no_telp'] ?>">

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