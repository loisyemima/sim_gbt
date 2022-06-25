  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <div class="image">
        <img src="<?= base_url('assets/img/logo/Logo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      </div>
      <span class="brand-text font-weight-light">SIM GBT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- nav -->
          <!-- Query Menu -->
          <?php
          $role_id = $this->session->userdata('role_id');
          $queryMenu = "SELECT user_menu.id, menu
                  FROM user_menu
                  JOIN user_access_menu
                  ON user_menu.id = user_access_menu.menu_id
                  WHERE user_access_menu.role_id = $role_id
                  ORDER BY user_menu.order_menu ASC
                  ";
          $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <!-- looping menu -->
          <?php foreach ($menu as $m) : ?>
            <!-- Heading -->

            <li class="nav-header"> <?= $m['menu']; ?> </li>

            <!-- menyesuaikan sub-menu dengan menu-->
            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                      FROM user_sub_menu
                      WHERE menu_id = $menuId
                      AND is_active = 1
                      ORDER BY user_sub_menu.menu_order ASC
                      ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm) : ?>
              <!-- actived menu-->
              <li class="nav-item">
                <?php if ($title == $sm['title']) : ?>
                  <a href="<?= base_url($sm['url']); ?>" class="nav-link active">
                  <?php else : ?>
                    <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                    <?php endif; ?>
                    <i class="<?= $sm['icon']; ?>"></i>
                    <p>
                      <?= $sm['title']; ?>
                    </p>
                    </a>
              </li>

            <?php endforeach; ?>


          <?php endforeach; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>