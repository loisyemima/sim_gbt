   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0"><?= $title; ?></h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active"><?= $title; ?></li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content-header -->


     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-12">
             <div class="card">
               <div class="card-body">
                 <?php if (validation_errors()) : ?>
                   <div class="alert alert-danger" role="alert">
                     <?= validation_errors(); ?>
                   </div>
                 <?php endif; ?>

                 <?= $this->session->flashdata('message'); ?>
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Sub Menu</a>
                 <table class="table table-bordered table-hover" id="example2">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Title</th>
                       <th scope="col">Menu</th>
                       <th scope="col">Url</th>
                       <th scope="col">Icon</th>
                       <th scope="col">Active</th>
                       <th scope="col">Menu Order</th>
                       <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($subMenu as $sm) : ?>
                       <tr>
                         <th scope="row"><?= $i; ?></th>
                         <td><?= $sm['title'] ?></td>
                         <td><?= $sm['menu'] ?></td>
                         <td><?= $sm['url'] ?></td>
                         <td><?= $sm['icon'] ?></td>
                         <td><?= $sm['is_active'] ?></td>
                         <td><?= $sm['menu_order'] ?></td>
                         <td>
                           <a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#editSubMenuModal<?php echo $sm['id']; ?>">edit</a>
                           <a href="" class="badge badge-pill badge-danger" data-toggle="modal" data-target="#deleteSubMenuModal<?php echo $sm['id']; ?>">delete</a>
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
   <div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="exampleSubModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleSubModalLabel">Add New Submenu</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form action="<?= base_url('admin/menu/submenu'); ?>" method="post">
           <div class="modal-body">
             <div class="form-group">
               <input type="text" class="form-control" id="title" name="title" placeholder="Submenu tiltle">
             </div>
             <div class="form-group">
               <select name="menu_id" id="menu_id" class="form-control">
                 <option value="">Select Menu</option>
                 <?php foreach ($menu as $m) : ?>
                   <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                 <?php endforeach; ?>
               </select>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
             </div>
             <div class="form-group">
               <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
             </div>
             <div class="form-group">
               <div class="custom-control custom-checkbox">
                 <input type="checkbox" class="custom-control-input" value="1" id="is_active" name="is_active" checked>
                 <label class="custom-control-label" for="is_active">Active?</label>
               </div>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" id="menu_order" name="menu_order" placeholder="Menu Order">
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

   <!-- Modal Edit-->
   <?php foreach ($subMenu as $smn) : ?>
     <div class="modal fade" id="editSubMenuModal<?php echo $smn['id']; ?>" tabindex="-1" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="editSubMenuModalLabel">Edit Sub Menu</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="<?= base_url('admin/menu/edit_submenu/' . $smn['id']); ?>" method="post">
             <div class="modal-body">
               <div class="form-group">
                 <input type="text" class="form-control" id="title" name="title" placeholder="Submenu tiltle" value="<?php echo $smn['title'] ?>">
               </div>
               <div class="form-group">
                 <select name="menu_id" id="menu_id" class="form-control">
                   <?php foreach ($menu as $mn) : ?>
                     <option value="<?= $mn['id'] ?>" <?= $mn['id'] == $smn['menu_id'] ? "selected" : null ?>><?= $mn['menu'] ?></option>
                   <?php endforeach; ?>
                 </select>
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?php echo $smn['url'] ?>">
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon" value="<?php echo $smn['icon'] ?>">
               </div>
               <div class="form-group">
                 <div class="custom-control custom-checkbox">
                   <input type="checkbox" class="custom-control-input" value="1" id="is_active" name="is_active" checked>
                   <label class="custom-control-label" for="is_active">Active?</label>
                 </div>
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" id="menu_order" name="menu_order" placeholder="Menu Order" value="<?php echo $smn['menu_order'] ?>">
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
   <?php endforeach; ?>

   <!-- Modal Delete-->
   <?php foreach ($subMenu as $smenu) : ?>
     <div class="modal fade" id="deleteSubMenuModal<?php echo $smenu['id']; ?>" tabindex="-1" aria-labelledby="deleteSubMenuModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="deleteSubMenuModalLabel">Anda Yakin Menghapus Data?</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="<?= base_url('admin/menu/delete_submenu/' . $smenu['id']); ?>" method="post">
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Delete</button>
             </div>
           </form>
         </div>
       </div>
     </div>
   <?php endforeach; ?>