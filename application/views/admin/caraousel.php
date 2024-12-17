<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Caraousel</title>
        <?php require_once('template/css.php') ?>
    </head>

    <body class="g-sidenav-show bg-gray-200">
        <!-- Sidebar -->
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
            id="sidenav-main">
            <?php require_once('sidebar.php') ?>
        </aside>

        <!-- Main content -->
        <main
            class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Caraousel</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Caraousel</h6>
                    </nav>

                    <div class="collapse navbar-collapse mt-sm-0 mt-4 me-md-0 me-sm-6" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    href="<?= base_url('admin/auth/logout') ?>"
                                    class="nav-link text-body font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid py-4">
                <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Caraousel
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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Caraousel</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form
                                action="<?= base_url('admin/caraousel/simpan') ?>"
                                method="post"
                                enctype="multipart/form-data">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Judul</label>
                                            <input
                                                type="text"
                                                id="nameWithTitle"
                                                class="form-control"
                                                placeholder="Masukkan Judul"
                                                name="judul"
                                                required="required">
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Keterangan</label>
                                            <input
                                                type="text"
                                                id="nameWithTitle"
                                                class="form-control"
                                                placeholder="Masukkan Keterangan"
                                                name="keterangan"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Foto</label>
                                            <input
                                                type="file"
                                                id="nameWithTitle"
                                                class="form-control"
                                                placeholder="Masukkan Nama"
                                                name="foto"
                                                required="required"
                                                accept="image/png, image/gif, image/jpeg">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal"
                                        fdprocessedid="3t093q">Close</button>
                                    <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div></div>
                </div>
               
                <!-- Card Section -->
                <div class="container-fluid py-4">
                    <div class="row mb-3">
                    <?php foreach ($caraousel as $aa) { ?>
                        <div class="col-md-4 mb-2">
                            <div class="card h-100">
                                <img
                                    class="card-img-top"
                                    src="<?= base_url('upload/caraousel/' . $aa['foto'])?>">
                                <div class="card-body">
                                    <a href="javascript:;">
                                        <h5 class="card-title"><?= $aa['judul'] ?></h5>
                                    </a>
                                    <div class="container-fluid py-2">
                                        <a
                                            href="<?= base_url('admin/caraousel/hapus/'.$aa['id_caraousel'])?>"
                                            class="btn btn-sm btn-primary">
                                            <span class="">Hapus</span>
                                        </a>

                                        <button
                                            type="button"
                                            class="btn btn-sm btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#caraousel<?= $aa['id_caraousel']?>">
                                            <span class="">Edit</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <!-- Modal -->
                <?php foreach ($caraousel as $aa) { ?>
                <div
                    class="modal fade"
                    id="caraousel<?= $aa['id_caraousel']?>"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit caraousel</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form
                                action="<?= base_url('admin/caraousel/update/')?>"
                                method="post"
                                enctype="multipart/form-data">
                                <input type="hidden" value="<?= $aa['id_caraousel'] ?>" name="id_caraousel">
                                <input type="hidden" value="<?= $aa['foto'] ?>" name="foto">
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?=$aa['judul'] ?>" name="judul">
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?=$aa['keterangan'] ?>" name="keterangan">
                                        </div>
                                        <div class="row">
                                            <div class="col mb-6">
                                                <label for="nameWithTitle" class="form-label">Foto</label>
                                                <input
                                                    type="file"
                                                    id="nameWithTitle"
                                                    class="form-control"
                                                    placeholder="Masukkan Nama"
                                                    name="foto"
                                                    required="required"
                                                    accept="image/png, image/gif, image/jpeg">
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
                            <?php } ?>
                            
                        </main>

                        <?php require_once('template/js.php') ?>
                    </body>

                </html>