<?php
function word_limiter($text, $limit = 150) {
    $words = explode(" ", $text);
    if (count($words) > $limit) {
        return implode(" ", array_slice($words, 0, $limit)) . '...';
    }
    return $text;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Konten
        </title>
        <?php require_once('template/css.php')?>

    </head>
    <style>
    .keterangan-col {
        max-width: 350px; /* Sesuaikan dengan lebar yang diinginkan */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .keterangan-full {
        white-space: normal;
        max-width: 100%; /* Agar dapat diperluas penuh saat 'Baca selengkapnya' diklik */
    }

    </style>
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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Konten</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Konten</h6>
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
        Tambah Konten
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form
                    action="<?= base_url('admin/konten/simpan') ?>"
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
                                    placeholder="Masukkan Nama"
                                    name="judul"
                                    required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Penulis</label>
                                <input
                                    type="text"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Nama"
                                    name="penulis"
                                    required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Format Buku</label>
                                <input
                                    type="text"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Format Buku"
                                    name="format_buku"
                                    required="required">
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    <?php foreach ($kategori as $aa) { ?>
                                    <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Keterangan</label>
                                <textarea
                                    name="keterangan"
                                    placeholder="Masukkan Keterangan"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Harga</label>
                                <textarea
                                    name="harga"
                                    placeholder="Masukkan Harga "
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Stok</label>
                                <input
                                    type="number"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Jumlah Stok"
                                    name="stock"
                                    required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Penerbit</label>
                                <input
                                    type="text"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Nama Penerbit"
                                    name="penerbit"
                                    required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Tanggal Terbit</label>
                                <input
                                    type="text"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Tanggal Terbit"
                                    name="tanggal_terbit"
                                    required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-6">
                                <label for="nameWithTitle" class="form-label">Isbn</label>
                                <input
                                    type="number"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan ISBN"
                                    name="isbn"
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

</div>
</div>

<div class="row">
<div class="col-12">
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Konten Berita</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
<div class="table-responsive p-0">
    <table  id="myTable" class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penulis</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Format Buku</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                <th
                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <?php $no = 0; foreach($konten as $aa){
            $no +=1;?>
        <tbody>
            <tr>
                <td class="align-middle text-center"><?= $no;?></td>
                <td class="align-middle text-center"><?= $aa['judul']?></td>    
                <td class="align-middle text-center"><?= $aa['penulis']?></td>
                <td class="align-middle text-center"><?= $aa['format_buku']?></td>
                <td class="align-middle text-center">
                    <span class="keterangan-short"><?= word_limiter($aa['keterangan'], 5); ?></span>
                    <span class="keterangan-full d-none"><?= $aa['keterangan'] ?></span><br>
                    <a href="javascript:void(0)" class="read-more" onclick="toggleKeterangan(this)">Baca selengkapnya</a>
                </td>
                <td class="align-middle text-center"><?= $aa['harga']?></td>
                <td class="align-middle text-center">
                    <a href="<?= base_url('upload/konten/' . $aa['foto']) ?>" target="_blank" style="color: blue; text-decoration: underline;">
                        Lihat Foto
                    </a>
                </td>


                <td class="align-middle text-center">

                    <span class="text-secondary text-s font-weight-bold">
                        <!-- -->
                        <div class="container-fluid py-4">
                            <a
                                href="<?= base_url('admin/konten/hapus/'.$aa['id_konten'])?>"
                                class="btn btn-sm btn-primary">
                                <span class="">hapus</span>
                            </a>

                            <button
                                type="button"
                                class="btn btn-sm btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#konten<?= $aa['id_konten']?>">
                                <span class="">edit</span>
                            </button>
                            <!-- Modal -->
                            <div
                                class="modal fade"
                                id="konten<?= $aa['id_konten']?>"
                                tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Konten</h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form
                                            action="<?= base_url('admin/konten/update/')?>"
                                            method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $aa['id_konten'] ?>" name="id_konten">
                                            <input type="hidden" value="<?= $aa['foto'] ?>" name="foto">
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['judul'] ?>" name="judul">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Penulis</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['penulis'] ?>" name="penulis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Format Buku</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['format_buku'] ?>" name="format_buku">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Penerbit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['penerbit'] ?>" name="penerbit">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Stok</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['stock'] ?>" name="stock">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Isbn</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?=$aa['isbn'] ?>" name="isbn">
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                   
                                                        <label class="col-sm-2 col-form-label">Ketegori</label>
                                                        <div class="col-sm-10">
                                                        <select name="id_kategori" class="form-control">
                                                            <?php foreach ($kategori as $uu) { ?>
                                                            <option
                                                                <?php if ($uu['id_kategori']==$aa['id_kategori']) {echo"selected"; }?>
                                                                value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        </div>
                                                   
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            value="<?=$aa['keterangan'] ?>"
                                                            name="keterangan">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Harga</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            value="<?=$aa['harga'] ?>"
                                                            name="harga">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    
                                                    <label class="col-sm-2 col-form-label">Foto</label>
                                                    <div class="col-sm-10">
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
</body></html>
<script>
function toggleKeterangan(link) {
    const shortText = link.previousElementSibling.previousElementSibling;
    const fullText = link.previousElementSibling;
    if (fullText.classList.contains('d-none')) {
        fullText.classList.remove('d-none');
        shortText.classList.add('d-none');
        link.textContent = 'Tutup';
    } else {
        fullText.classList.add('d-none');
        shortText.classList.remove('d-none');
        link.textContent = 'Baca selengkapnya';
    }
}

</script>

