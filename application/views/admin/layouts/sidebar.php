<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url('admin/dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('admin/manager_list') ?>">
                        <i class="bi bi-circle"></i><span>Manager List</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/user_list') ?>">
                        <i class="bi bi-circle"></i><span>User List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('admin/profile') ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('admin/logout') ?>">
                <i class="bi bi-person"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>