
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

<body class="bg-gray-200">
  
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                </div>
              </div>
              <div class="card-body">
                <form action="<?= base_url('auth/login')?>" method="post" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="username" class="form-control" placeholder="Username" name="username">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    
                    <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                    <?php echo $this->session->flashdata('alert',true);?>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>