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
      <header>chattanSpace</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Belum punya akun? <a href="daftar">Daftar sekarang!</a></div>
    </section>
  </div>
  
  <?php include_once "footer.php"; ?>
  <script src="static/js/pass-show-hide.js"></script>
  <script src="static/js/login.js"></script>
</body>
</html>