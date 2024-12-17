<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/template/')?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/template/')?>assets/img/favicon.png">
  <title>
   Sign In
  </title>
  <?php require_once('admin/template/css.php')?>
</head>

<<body class="bg-gray-200">
  
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign Up</h4>
                </div>
              </div>
              <div class="card-body">
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>"class="user">
                                <div class="class= input-group input-group-outline mb-3 ">    
                                        <input type="text" class="form-control form-control-user" id="exampleName"
                                            placeholder="Masukan Nama Anda" name="nama_pelanggan">
                                        <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="class= input-group input-group-outline mb-3">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Masukan Username Anda" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2 ">', '</div>') ?>
                                </div>                           
                                <div class="class= input-group input-group-outline mb-3 ">              
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">   
                                            <?php echo form_error('password', '<div class="text-danger small ml-2 ">', '</div>') ?>                             
                                </div>
                                <div class="class= input-group input-group-outline mb-3 ">              
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Masukan Alamat Anda" name="email">                                
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign Up</button>
                                    <?php echo $this->session->flashdata('alert',true);?>
                                </div>
                               <p class="mt-4 text-sm text-center">
                                    Have an account?
                                    <a href="<?= base_url('pelanggan/login') ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
    