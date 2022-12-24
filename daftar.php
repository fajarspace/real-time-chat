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
    <section class="form signup">
      <header>chattanSpace</header>
      <form action="components/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nama Depan</label>
            <input type="text" name="fname" placeholder="Nama Depan" required>
          </div>
          <div class="field input">
            <label>Nama Belakang</label>
            <input type="text" name="lname" placeholder="Nama Belakang" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Masukkan email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Masukkan password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Pilih foto profile</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Daftar">
        </div>
      </form>
      <div class="link">sudah daftar? <a href="masuk">Login</a></div>
    </section>
  </div>


  <?php include_once "footer.php"; ?>
  <script src="static/js/pass-show-hide.js"></script>
<script src="static/js/signup.js"></script>

</body>
</html>
