        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <?php if (in_groups('admin')) : ?>

                <!-- divider -->
                <hr class="sidebar-divider">


                <!-- Heading -->
                <div class="sidebar-heading">
                    User Management
                </div>


                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <i class="fas fa-users"></i>
                        <span>User List</span></a>
                </li>

            <?php endif; ?>

            <!-- divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                User Profile
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/data'); ?>">
                    <i class="fas fa-user-edit"></i>
                    <span>Data</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->