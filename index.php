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
    <title>Venus Template</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="static/css/main.css">

</head>
<body>
<div id="tsparticles" ></div>
    <main>
        <section class="intro">
            <div class="intro-content">
                <h1> chattan <br> <div class="space" >.Space</div></h1>
                <p class="lg-p mt-2">
                  Realtime chat dengan menggunakan enkripsi vigenere cipher
                </p>
                <a href="daftar" class="btn mt-2"> Daftar </a>
                <a href="masuk" class="btn mt-2"> Masuk </a>
              </div>

        </section>

        <section class="features">

            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-access-anywhere.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3>Akses pesan kamu, kapan saja</h3>

                    <p>Kemampuan untuk menggunakan ponsel, tablet, atau komputer untuk mengakses pesan Kamu dimana saja, kapan saja</p>
                </div>
            </div>

            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-security.svg" alt=""> </div>
                <div class="features-item-body mt-2">
                    <h3> Keamanan yang ketat</h3>
                    <p> Menggunakan enkripsi Vigenere cipher yang dapat membantu mengamankan pesan Kamu secara end-to-end</p>
                </div>

            </div>
            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-collaboration.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3> Real-time chat</h3>
                    <p> Kirim pesan secara langsung</p>
                </div>

            </div>
            <div class="features-item">
                <div class="features-item-head"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-any-file.svg" alt=""> </div>
                <div class="features-item-body  mt-2">
                    <h3> Store any type of file</h3>
                    <p> Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all file types to be securely stored and shared.</p>
                </div>
            </div>
        </section>
        <section class="productive">
            <div class="productive-img"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/illustration-stay-productive.png" alt=""> </div>

            <div class="productive-content">

                <h2>Stay productive, wherever you are</h2>

                <p class="lg-p"> Never let location be an issue when accessing your files. Fylo has you covered for all of your file storage needs. </p>

                <p class="lg-p"> Securely share files and folders with friends, family and colleagues for live collaboration. No email attachments required.
                </p>
                <p class="lg-p"> <a class="content-link" href="#">See how Fylo works <i class="fas fa-arrow-alt-circle-right"></i></a> </p>
            </div>
        </section>

        <section class="testimonial">

            <div class="testimonial-item">
                <div class="testimonial-item-text">
                    <p>Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
                </div>
                <div class="testimonial-item-reviewer">
                    <div class="testimonial-item-reviewer-img"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-1.jpg" alt=""></div>
                    <div class="ml-1 testimonial-item-reviewer-text">
                        <h4>Satish Patel</h4>
                        <p>Founder & CEO, Huddle</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item">
                <div class="testimonial-item-text">
                    <p>Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
                </div>
                <div class="testimonial-item-reviewer">
                    <div class="testimonial-item-reviewer-img"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-2.jpg" alt=""></div>
                    <div class="ml-1 testimonial-item-reviewer-text">
                        <h4> Bruce McKenzie </h4>
                        <p>Founder & CEO, Huddle</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-item-text">
                    <p> Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine.</p>
                </div>
                <div class="testimonial-item-reviewer">
                    <div class="testimonial-item-reviewer-img"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/profile-3.jpg" alt=""></div>
                    <div class="ml-1 testimonial-item-reviewer-text">
                        <h4> Iva Boyd</h4>
                        <p>Founder & CEO, Huddle</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">

            <div class="cta-item">
                <div class="cta-text">
                    <h2>Get early access today </h2>
                    <p>It only takes a minute to sign up and our free starter tier is extremely generous. If you have any questions, our support team would be happy to help you.</p>
                </div>
                <form class="cta-form mt-2" action="">
                    <input class="input-block" type="text" placeholder="example@email.com"> <button class="btn-block">Get Started For Free</button> </form>
            </div>
        </section>
    </main>
    <footer>
        <section class="contact-info">

            <div class="contact-info-logo"> <img src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/logo.svg" alt=""> </div>
            <div class="contact-info-location">
                <div class="contact-info-location-item">
                    <img class="img-footer" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-location.svg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>
            <div class="contact-info-contacts">
                <div class="contact-info-contacts-item">
                    <img class="img-footer" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-phone.svg" alt="">
                    <p>+1-543-123-4567</p>
                </div>
                <div class="contact-info-contacts-item ">

                    <img class="img-footer" src="https://hannahshiels.github.io/front-end-mentor/fylo-dark-theme-landing-page-master/images/icon-email.svg" alt="">
                    <p>example@fylo.com</p>
                </div>

            </div>
            <nav class="contact-info-links">
                <ul class="contact-info-links-list">
                    <li> <a href="#">About Us</a> </li>
                    <li> <a href="#">Jobs</a> </li>
                    <li> <a href="#">Press</a> </li>
                    <li> <a href="#">Blog</a> </li>
                </ul>
                <ul class="contact-info-links-list">
                    <li> <a href="#">Contact Us</a> </li>
                    <li> <a href="#">Terms</a> </li>
                    <li> <a href="#">Privacy</a> </li>
                </ul>
            </nav>
            <div class="contact-info-social-links">
                <a class="icon-link" href="#">
                    <div class="contact-info-social-link-item flex-center"> <i class="fab fa-facebook-f"></i></div>
                </a>
                <a class="icon-link" href="#">
                    <div class="contact-info-social-link-item flex-center"> <i class="fab fa-twitter"></i></div>
                </a>
                <a class="icon-link" href="#">
                    <div class="contact-info-social-link-item flex-center"> <i class="fab fa-instagram"></i> </div>
                </a>
            </div>
            <div class="attribution-container">
                <p class="attribution">
                    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. Coded by <a href="https://codepen.io/devhannah">Hannah</a>.
                </p>
            </div>


        </section>


    </footer>


  <script src="static/js/pass-show-hide.js"></script>
  <script src="static/js/signup.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/particles.js"></script>
  

</body>
</html>
