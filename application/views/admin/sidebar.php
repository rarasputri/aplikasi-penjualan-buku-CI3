<?php
function is_active($uri_segment) {
    return (strpos(uri_string(), $uri_segment) !== false) ? 'active bg-gradient-primary' : '';
}
?>

<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" <?= base_url('beranda') ?> " target="_blank">
        <img src="<?= base_url('assets/template/')?>assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">LokaBaca</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= is_active('admin/dashboard') ?>" href="<?=base_url('admin/dashboard')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/user') ?>" href="<?= base_url('admin/user') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/orders') ?>" href="<?= base_url('admin/orders') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/konfigurasi') ?>" href="<?= base_url('admin/konfigurasi') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Konfigurasi</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/carousel') ?> " href="<?= base_url('admin/caraousel') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Carousel</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white  <?= is_active('admin/konten') ?>" href="<?= base_url('admin/konten') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Konten</span>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/galeri') ?> " href="<?= base_url('admin/galeri') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Galeri</span>
          </a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/blog') ?> " href="<?= base_url('admin/blog') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Blog</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/kategori') ?>" href="<?= base_url('admin/kategori') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Kategori</span>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-white  <?= is_active('admin/saran') ?>" href="<?= base_url('admin/saran') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Saran</span>
          </a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link text-white <?= is_active('admin/logout') ?>" href="<?= base_url('auth/logout') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">logout</span>
          </a>
        </li>
        
      </ul>
    </div>
    