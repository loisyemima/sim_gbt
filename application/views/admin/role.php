   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0"><?= $title; ?></h1>
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
           <div class="col-12">
             <div class="card">
               <div class="card-body">
                 <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                 <?= $this->session->flashdata('message'); ?>
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>

                 <table class="table table-bordered table-hover" id="dataTable">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Role</th>
                       <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($role as $r) : ?>
                       <tr>
                         <th scope="row"><?= $i; ?></th>
                         <td><?= $r['role'] ?></td>
                         <td>
                           <a href="<?= base_url('admin/dashboard/roleaccess/') . $r['id']; ?>" class="badge badge-pill badge-warning">access</a>
                           <a href="" class="badge badge-pill badge-success">edit</a>
                           <a href="" class="badge badge-pill badge-danger">delete</a>
                         </td>
                       </tr>
                       <?php $i++; ?>
                     <?php endforeach; ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->


   <!-- Modal -->
   <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="newRoleModalLabel">Add New Menu</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form action="<?= base_url('admin/dashboard/role'); ?>" method="post">
           <div class="modal-body">
             <div class="form-group">
               <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Add</button>
           </div>
         </form>
       </div>
     </div>
   </div>