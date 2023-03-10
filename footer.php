  <!--Footer-->
  <footer class="bg-white">
    <div class="container mx-auto px-8">
      <div class="w-full flex flex-col md:flex-row py-6">
        <!-- <div class="flex-1 mb-6 text-black">
          <a class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                transform="matrix(1,0,0,1,0,0)" />
              <path class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
            </svg>
            chattan .Space
          </a>
        </div> -->
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Links</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class=" underline text-gray-800 hover:text-blue-500">Jurnal</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="underline text-gray-800 hover:text-blue-500">Banner</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a target="_blank" href="https://github.com/fajarspace/real-time-chat" class="underline text-gray-800 hover:text-blue-500">Fork me on Github</a>
            </li>
          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Tech Stacks</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">PHP</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">MYSQL</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">TAILWIND CSS</p>
            </li>
          </ul>
          <p class="uppercase text-gray-500 md:mb-6">Tools</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">Visual Studio Code</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">XAMPP</p>
            </li>

          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Contributors</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">FAJAR AGUNG NUGROHO</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">BERLIANA NOVIANSYAH</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">ADITYA BANI ISRO</p>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">ALFHIN CHORRY
                AGNESHA</p>
            </li>
          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Built with ?????? </p>
          <ul class="list-reset mb-6">
          <!-- <h1 class="my-2 text-7xl font-bold text-gray-500 leading-tight">
          chattan .Space
          </h1> -->
          <img src="static/img/logo/logo-black.png" alt="">
          </ul>
        </div>

      </div>
    </div>
    <!-- <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by
      freepik - www.freepik.com</a> -->
  </footer>
  <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;
    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }
    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>


  <script src="static/js/pass-show-hide.js"></script>
  <script src="static/js/signup.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.1/tsparticles.min.js" integrity="sha256-D6LXCdCl4meErhc25yXnxIFUtwR96gPo+GtLYv89VZo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="static/js/particles.js"></script>
<script type="text/javascript" src="static/js/particles2.js"></script>