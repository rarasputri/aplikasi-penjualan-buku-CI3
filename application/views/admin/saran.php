<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Saran
        </title>
        <?php require_once('template/css.php')?>
    </head>

    <body class="g-sidenav-show  bg-gray-200">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
            id="sidenav-main">
            <?php require_once('sidebar.php')?>
        </aside>
        <main
            class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav
                class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
                id="navbarBlur"
                navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">
                                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                            </li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Saran</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Saran</h6>
                    </nav>
                </div>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-4 me-md-0 me-sm-6" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <a href="javascript:;"  >
              <a href="<?= base_url('admin/auth/logout') ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Log Out</span>
              </a>
              </a>
          </ul>
        </div>
        </nav>

        <!-- End Navbar -->
        <div class="container-fluid py-4">
           
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">DAFTAR SARAN</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Saran</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>

                                        </tr>
                                    </thead>
                                    <?php $no = 0; foreach($saran as $aa){ $no +=1;?>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-s font-weight-bold mb-0">
                                                    <?= $no;?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-s font-weight-bold mb-0"><?= $aa['nama']?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-s font-weight-bold mb-0"><?= $aa['email']?></p>
                                            </td>
                                           
                                            <td class="align-middle text-center">
                                                <p class="text-s font-weight-bold mb-0"><?= $aa['isi_saran']?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-s font-weight-bold mb-0"><?= $aa['tanggal']?></p>
                                            </td>
                                    
                                            <td class="align-middle text-center">

                                                <span class="text-secondary text-s font-weight-bold">
                                                    <!-- -->
                                                    <div class="container-fluid py-4">
                                                        <a
                                                            href="<?= base_url('admin/saran/hapus/'.$aa['id_saran'])?>"
                                                            class="btn btn-sm btn-primary">
                                                            <span class="fa fa-trash"></span>
                                                        </a>
                                                       
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</main>

<?php require_once('template/js.php')?>
</body>

</html>