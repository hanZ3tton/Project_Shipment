<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard/index')  ?> ">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">Menu</div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'app/dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('app/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <div class="sidebar-heading">Shipment</div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'app/shipment') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-truck"></i>
            <span>Shipment</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('app/shipment/create') ?>">Add Shipment</a>
                <a class="collapse-item" href="<?= base_url('app/shipment') ?>">All Inbound</a>
                <a class="collapse-item" href="<?= base_url('app/shipment/Completed') ?>">Completed</a>
                <a class="collapse-item" href="<?= base_url('app/shipment/outbound') ?>">Outbound</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">User</div>

    <!-- Nav Item - Table User -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'app/user') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('app/user') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Table User</span>
        </a>
    </li>
    <!-- Nav Item - Table User -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'app/user/create') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('app/user/create') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Add New User</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->