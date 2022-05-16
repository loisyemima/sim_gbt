   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
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

             <form role="form" action="<?= base_url('admin/member/edit_nonmember/' . $member['member_id']) ?>" method="post">

               <div class="form-group">
                 <label for="exampleInputFile">File input</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile" value="<?php echo $member['image'] ?>">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text">Upload</span>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Name</label>
                   <input class="form-control" id="name" name="name" value="<?php echo $member['name'] ?>">
                 </div>
                 <!-- Date -->
                 <div class="form-group">
                   <label>Date:</label>
                   <div class="input-group date" id="reservationdate" data-target-input="nearest">
                     <input type="text" id="birth" name="birth" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $member['birth'] ?>" />
                     <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                       <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Age</label>
                   <select name="age_id" class="form-control">
                     <option value="Anak-anak" <?php if ($member['age_id'] == "Anak-anak") {
                                                  echo "selected";
                                                } ?>>Anak-anak</option>
                     <option value="Pemnuda" <?php if ($member['age_id'] == "Pemuda") {
                                                echo "selected";
                                              } ?>>Pemuda</option>
                     <option value="Dewasa" <?php if ($member['age_id'] == "Dewasa") {
                                              echo "selected";
                                            } ?>>Dewasa</option>
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
                   <label>Name</label>
                   <select class="select2" id="username" name="username" multiple="multiple" data-placeholder="Select a Name" style="width: 100%;">
                     <?php foreach ($user as $u) : ?>
                       <option value="<?= $u['id'] ?>" <?= $u['id'] == $smn['username'] ? "selected" : null ?>><?= $mn['username'] ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
                 <button type="submit" value="Update" class="btn btn-primary">Submit</button>
                 <button type="reset" class="btn btn-secondary">Reset</button>
             </form>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->