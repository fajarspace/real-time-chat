<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: start/");
  }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chattanSpace - Realtime chat dengan menggunakan enkripsi vigenere cipher</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="static/css/main.css">

</head>
<body>
<div id="tsparticles" ></div>
<div id="astro" ></div>
<div class="get-started">
  <div>
    <h1> chattan <br> <div class="space" >.Space</div>

    <a href="daftar" class="btn"> Get started </a>
  </h1>
</div>       
        <div  >

        </div>
</div>
        
    <div class="features">

            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-access-anywhere.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3>Akses pesan kamu, kapan saja</h3>

                    <p>Gunakan ponsel, tablet, atau komputer untuk mengakses pesan Kamu dimana saja, kapan saja</p>
                </div>
            </div>

            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-security.svg" alt=""> </div>
                <div class="features-item-body mt-2">
                    <h3> Keamanan yang ketat</h3>
                    <p> Di lengkapi dengan enkripsi Vigenere cipher yang dapat membantu mengamankan pesan Kamu secara end-to-end</p>
                </div>

            </div>
            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-collaboration.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3> Real-time chat</h3>
                    <p> Kirim pesan secara langsung (Live) tanpa takut pesan kamu tidak terkirim</p>
                </div>

            </div>
            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-any-file.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3> Store any type of file</h3>
                    <p> Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all file types to be securely stored and shared.</p>
                </div>
            </div>
        </div>
        

  <script src="static/js/pass-show-hide.js"></script>
  <script src="static/js/signup.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/particles.js"></script>
  

</body>
</html>
