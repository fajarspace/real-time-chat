<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: start/");
  }
?>

<?php include_once "header.php"; ?>
<body>
<div id="tsparticles"></div>

  <div class="wrapper">
    <section class="form login">
      <header>
        <center><img width="150px" src="static/img/logo/logo-black-cropped.png" alt=""></center>
      </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Masukkan email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Masukkan password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Masuk">
        </div>
      </form>
      <div class="link">Belum punya akun? <a href="daftar">Daftar sekarang!</a></div>
    </section>
  </div>
  
  <script src="static/js/pass-show-hide.js"></script>
  <script src="static/js/login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/particles.js"></script>
<script type="text/javascript" src="static/js/particles2.js"></script>
</body>
</html>
