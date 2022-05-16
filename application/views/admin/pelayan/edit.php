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
                 <h3 class="card-title">Edit Pelayan</h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="<?= base_url('admin/pelayan/edit_Pelayan/' . $pelayan['pelayan_id']) ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Name</label>
                     <select class="select2bs4" style="width: 100%;" name="name" id="name">
                       <?php foreach ($member as $m) { ?>
                         <option value="<?php echo $m['member_id'] ?>" <?= $m['member_id'] == $pelayan['name'] ? "selected" : null ?>><?php echo $m['fullname'] ?></option>
                       <?php } ?>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Level</label>
                     <select name="level" id="level" class="form-control">
                       <option value="Pengurus" <?php if ($pelayan['level'] == "Pengurus") {
                                                  echo "selected";
                                                } ?>>Pengurus</option>
                       <option value="Pelayan" <?php if ($pelayan['level'] == "Pelayan") {
                                                  echo "selected";
                                                } ?>>Pelayan</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Description</label>
                     <input class="form-control" id="description" name="description" value="<?php echo $pelayan['description'] ?>">
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