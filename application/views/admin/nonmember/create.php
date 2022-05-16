   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard v1</li>
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
           <div class="col-lg-6">
             <?php if (validation_errors()) : ?>
               <div class="alert alert-danger" role="alert">
                 <?= validation_errors(); ?>
               </div>
             <?php endif; ?>

             <?= $this->session->flashdata('message'); ?>

             <form role="form" action="<?= base_url('admin/member/create_member'); ?>" method="post">
               <div class="form-group">
                 <label for="exampleInputFile">File input</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text">Upload</span>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Name</label>
                   <input class="form-control" id="name" name="name">
                 </div>
                 <!-- Date -->
                 <div class="form-group">
                   <label>Date:</label>
                   <div class="input-group date" id="reservationdate" data-target-input="nearest">
                     <input type="text" id="birth" name="birth" class="form-control datetimepicker-input" data-target="#reservationdate" />
                     <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                       <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Age</label>
                   <select name="age_id" class="form-control">
                     <option value="Anak-anak">Anak-anak</option>
                     <option value="Pemuda">Pemuda</option>
                     <option value="Dewasa">Dewasa</option>
                   </select>
                 </div>
                 <div class="form-group">
                   <label>Status</label>
                   <select name="status" class="form-control">
                     <option value="Member">Member</option>
                     <option value="Non Member">Non Member</option>
                   </select>
                 </div>
                 <div class="form-group">
                   <label>Username</label>
                   <select class="select2" id="name" name="name" multiple="multiple" data-placeholder="Select a Name" style="width: 100%;">
                     <?php foreach ($user as $u) { ?>
                       <option value="<?php echo $u['id'] ?>"><?php echo $u['username'] ?></option>
                     <?php } ?>
                   </select>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <button type="reset" class="btn btn-secondary">Reset</button>
             </form>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->