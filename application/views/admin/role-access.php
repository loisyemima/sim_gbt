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
           <div class="col-lg-6">
             <div class="card">
               <div class="card-body">
                 <?= $this->session->flashdata('message'); ?>

                 <h5>Role : <?= $role['role']; ?></h5>
                 <table class="table table-hover">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Menu</th>
                       <th scope="col">Access</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($menu as $m) : ?>
                       <tr>
                         <th scope="row"><?= $i; ?></th>
                         <td><?= $m['menu'] ?></td>
                         <td>
                           <div class="form-check">
                             <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id'] ?>" data-menu="<?= $m['id'] ?>">
                           </div>
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