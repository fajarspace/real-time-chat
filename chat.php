<?php 
  session_start();
  include_once "config/config.php";

  if(!isset($_SESSION['unique_id'])){
    header("location: masuk");
  }
?>
<?php include_once "header.php"; ?>
<body>
<div id="tsparticles" ></div>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: start/");
          }
        ?>
        <a href="start/" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="static/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Ketik pesan..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="static/js/chat.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/particles.js"></script>
</body>
</html>
