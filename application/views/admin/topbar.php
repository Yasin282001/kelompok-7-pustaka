<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 statictop shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$judul;?></h1>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdowntoggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray600 small"><?=$user['nama'];?></span>
        <img class="img-profile roundedcircle" src="<?= base_url('assets/img/profile/').$user['image'];?>">
    </a>

<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" arialabelledby="userDropdown">
    <a class="dropdown-item" href="<?=base_url('user');?>">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile Saya</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="<?= base_url('admin/logout');?>" datatoggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a>
</div>
</li>

</ul>

</nav>
<!-- End of Topbar -->