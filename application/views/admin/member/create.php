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
                 <h3 class="card-title">Create Anggota Jemaat</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>

               <form role="form" action="<?= base_url('admin/member/create_member'); ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Nama</label>
                     <input class="form-control" id="nama" name="nama">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputFile">Gambar :</label>
                     <div class="input-group">
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input class="form-control" id="tempat" name="tempat">
                   </div>
                   <!-- Date -->
                   <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Golongan Umur</label>
                     <select name="umur" id="umur" class="form-control">
                       <option value="">Pilih Golongan</option>
                       <option value="Anak-anak">Anak-anak</option>
                       <option value="Pemuda">Pemuda</option>
                       <option value="Dewasa">Dewasa</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Status</label>
                     <select name="status" class="form-control">
                       <option value="">Pilih Status</option>
                       <option value="Anggota">Anggota</option>
                       <option value="Jemaat">Jemaat</option>
                     </select>
                   </div>
                   <div class="from-group">
                     <label for="">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Full name" value="<?= set_value('username'); ?>">
                     <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="from-group">
                     <label for="">Password</label>
                     <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                     <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                   </div>
                   <div class="form-group">
                     <label for="">Ulang Password</label>
                     <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                   </div>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <button type="reset" class="btn btn-secondary">Reset</button>
               </form>
             </div>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->