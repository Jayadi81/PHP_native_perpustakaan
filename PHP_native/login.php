<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<section class="vh-100 gradient-custom">
<div class="p-5 bg-image" style="
        background-image: url('https://asset.kompas.com/crops/Yn331T3ABD2Twkqhp_sO-K0m6Go=/429x39:5529x3439/750x500/data/photo/2021/05/10/609931bb5334c.jpg');
        height: 100%;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Login Perpus Online</h2>
              <p class="text-white-50 mb-5">Masukkan akun login and password!</p>
          <form action="proses_login.php" method="post">  
            <div data-mdb-input-init class="form-outline form-white mb-4">
              Username:
              <input type="text" name="username" value="" class="form-control">
            </div>

            <div data-mdb-input-init class="form-outline form-white mb-4">
              password:
              <input type="password" name="password" class="form-control"><br>
            </div>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="login" class="btn btn-success" value="LOGIN">Login</button>
            </div>
          </form>

            <div>
            <p class="mb-0">Don't have an account? <a href="tambah_siswa" class="text-white-50 fw-bold"><a href='tambah_siswa.php'>Sign up</a></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
