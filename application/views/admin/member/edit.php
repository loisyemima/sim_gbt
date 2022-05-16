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
                     <label>Name</label>
                     <input class="form-control" id="fullname" name="fullname" value="<?php echo $member['fullname'] ?>">
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
                     <label>Place Of Birth</label>
                     <input class="form-control" id="place" name="place" value="<?php echo $member['place'] ?>">
                   </div>
                   <!-- Date -->
                   <div class="form-group">
                     <label>Date Of Birth</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="birth" name="birth" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $member['birth'] ?>" />
                       <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                         <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Age Level</label>
                     <select name="age" id="age" class="form-control">
                       <option value="">Select Age</option>
                       <?php foreach ($age as $a) : ?>
                         <option value="<?= $a['age_id'] ?>" <?= $a['age_id'] == $member['age'] ? "selected" : null ?>><?= $a['name'] ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Status</label>
                     <select name="status" class="form-control">
                       <option value="Member" <?php if ($member['status'] == "Member") {
                                                echo "selected";
                                              } ?>>Member</option>
                       <option value="Non Member" <?php if ($member['status'] == "Non Member") {
                                                    echo "selected";
                                                  } ?>>Non Member</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Username</label>
                     <select class="select2bs4" style="width: 100%;" name="username" id="username">
                       <option selected="selected">Select</option>
                       <?php foreach ($username as $u) { ?>
                         <option value="<?php echo $u['id'] ?>" <?= $u['id'] == $member['username'] ? "selected" : null ?>><?php echo $u['username'] ?></option>
                       <?php } ?>
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