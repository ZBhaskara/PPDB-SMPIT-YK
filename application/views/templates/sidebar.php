<?php
$role_id = $this->session->userdata('role_id');
?>
<?php if ($role_id == 1) : ?>
    <ul class="navbar-nav bgsidebar sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
            <div class="sidebar-brand-icon">
                <img src="<?= base_url('assets/img/logo/logo.png') ?>" height="40px" width="40px">
            </div>
            <div class="sidebar-brand-text mx-3">Admin PPDB ONLINE</div>
        </a>
    <?php else : ?>
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/logo/logo.png') ?>" height="40px" width="40px">
                </div>
                <div class="sidebar-brand-text mx-3 ">PPDB ONLINE</div>
            </a>
        <?php endif; ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                      FROM `user_menu` JOIN `user_access_menu`
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                      WHERE `user_access_menu`.`role_id` = $role_id
                      ORDER BY `user_access_menu`.`menu_id` ASC
                      ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <!-- LOOPING MENU-->
        <?php
        foreach ($menu as $m) : ?>
            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>
            <!-- SUB MENU yang login-->
            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                             FROM `user_sub_menu` JOIN `user_menu`
                             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                             WHERE `user_sub_menu`.`menu_id` = $menuId
                             AND `user_sub_menu`.`is_active` = 1
            
            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <!-- Tampil SUB MENU yang login-->
            <?php foreach ($subMenu as $sm) : ?>
                <?php if ($title == $sm['title']) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span></a>
                    </li>


                <?php endforeach; ?>
                <hr class="sidebar-divider mt-3">
            <?php endforeach; ?>



            <!-- Sidebar Toggler (Sidebar) -->


        </ul>
        <!-- End of Sidebar -->