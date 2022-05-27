   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="col-6">
           <h1 class="h3 mb-0 text-gray-800">Detail Data</h1>
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
                 <h3 class="card-title"></h3>
               </div>
               <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger" role="alert">
                   <?= validation_errors(); ?>
                 </div>
               <?php endif; ?>

               <?= $this->session->flashdata('message'); ?>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <img src="<?= base_url('assets/img/profile/member/' . $member1['images']) ?>" id="foto_load" width="250px" height="200px">
                   </div>
                   <div class="form-group">
                     <label>Name</label>
                     <input class="form-control" id="fullname" name="fullname" value="<?php echo $member1['fullname'] ?>" disabled>
                   </div>
                   <div class="form-group">
                     <label>Place Of Birth</label>
                     <input class="form-control" id="place" name="place" value="<?php echo $member1['place'] ?>" disabled>
                   </div>
                   <!-- Date -->
                   <div class="form-group">
                     <label>Date Of Birth</label>
                     <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       <input type="text" id="birth" name="birth" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $member1['birth'] ?>" disabled />
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Status</label>
                     <select name="status" class="form-control" disabled>
                       <option value="Member" <?php if ($member1['status'] == "Member") {
                                                echo "selected";
                                              } ?>>Member</option>
                       <option value="Non Member" <?php if ($member1['status'] == "Non Member") {
                                                    echo "selected";
                                                  } ?>>Non Member</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Username</label>
                     <select class="select2bs4" style="width: 100%;" name="username" id="username" disabled>
                       <option selected="selected">Select</option>
                       <?php foreach ($username as $u) { ?>
                         <option value="<?php echo $u['id'] ?>" <?= $u['id'] == $member1['username'] ? "selected" : null ?>><?php echo $u['username'] ?></option>
                       <?php } ?>
                     </select>
                   </div>
                 </div>
                 <!-- /.card-body -->
                 <div class="row">
                   <?php foreach ($member1 as $i) { ?>
                     <div class="col-sm-3">
                       <div class="form-group">
                         <img value="<?php echo $i['member_id'] ?>" <?= $i['member_id'] == $img['member'] ?> src="<?= base_url('assets/img/profile/member/' . $img['image1']) ?>" id="foto_load" width="250px" height="200px">
                       </div>

                     </div>
                   <?php } ?>
                 </div>
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