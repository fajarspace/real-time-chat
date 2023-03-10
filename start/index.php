<?php 
  session_start();
  include_once "../config/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../masuk");
  }
?>
<?php include_once "header.php"; ?>
<body>
<div id="tsparticles"></div>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../static/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="../components/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Keluar</a>
      </header>
      <div class="search">
        <span class="text">Pilih orang untuk memulai chat</span>
        <input type="text" placeholder="ketik nama...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="../static/js/users.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../static/js/particles.js"></script>

</body>
</html>
