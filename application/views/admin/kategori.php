<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Kategori
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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kategori</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Ketegori</h6>
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
                <a href="javascript:;">
                    <a
                        href="<?= base_url('admin/auth/logout') ?>"
                        class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Log Out</span>
                    </a>
                </a>
        </ul>
    </div>
</nav>

<!-- End Navbar -->
<div class="container-fluid py-4">
    <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Tambah Kategori
    </button>
    <!-- Modal -->
    <div class="container-fluid py-4">
        <div style="width:95%; margin-left:2rem;">
            <?= $this->session->flashdata('alert',true)?>
        </div>
    </div>
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin/kategori/simpan')?>" method="post">

                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kategori">
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div></div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Kategori Konten</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>

                                </tr>
                            </thead>
                            <?php $no = 0; foreach($kategori as $aa){ $no +=1;?>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center">
                                        <p class="text-s font-weight-bold mb-0">
                                            <?= $no;?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-s font-weight-bold mb-0"><?= $aa['nama_kategori']?></p>
                                    </td>

                                    <td class="align-middle text-center">

                                        <span class="text-secondary text-s font-weight-bold">
                                            <!-- -->
                                            <div class="container-fluid py-4">
                                                <a
                                                    href="<?= base_url('admin/kategori/hapus/'.$aa['id_kategori'])?>"
                                                    class="btn btn-sm btn-primary">
                                                    <span class="fa fa-trash">Hapus</span>
                                                </a>

                                                <button
                                                    type="button"
                                                    class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1<?= $aa['id_kategori']?>">
                                                    <span class="fa fa-edit">Edit</span>
                                                </button>
                                                <!-- Modal -->
                                                <div
                                                    class="modal fade"
                                                    id="exampleModal1<?= $aa['id_kategori']?>"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <form action="<?= base_url('admin/kategori/update/')?>" method="post">
                                                                <input type="hidden" value="<?= $aa['id_kategori']?>" name="id_kategori">
                                                                <div class="modal-body">
                                                                    <div class="row mb-3">
                                                                        <label class="col-sm-2 col-form-label">Kategori</label>
                                                                        <div class="col-sm-10">
                                                                            <input
                                                                                type="text"
                                                                                class="form-control"
                                                                                value="<?=$aa['nama_kategori'] ?>"
                                                                                name="nama_kategori">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div></div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

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