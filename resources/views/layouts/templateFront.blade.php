<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Madeiras Mata Verde - Qualidade, Durabilidade e Garantia em Eucaliptos e Outras Madeiras Tratadas">

   <!-- Title & Favicon -->
   <title>Madeiras Mata Verde - Qualidade e Durabilidade em Madeiras Tratadas</title>
   <link rel="shortcut icon" href="https://www.madeirasmataverde.com.br/assets/images/favicon-mata-verde-128x128-1.png" type="image/x-icon">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/tabler-icons.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/nice-select2.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/flatpickr.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/venobox.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>


   <!-- Right Side Offcanvas -->
   <div class="offcanvas offcanvas-end right-side-touria-offcanvas shadow-lg" tabindex="-1" id="sideMenuOffcanvas">
      <!-- Offcanvas Header -->
      <div class="offcanvas-header">
         <div>
            <img src="assets/img/core-img/logo.png" alt="Madeiras Mata Verde">
         </div>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <!-- Offcanvas Body -->
      <div class="offcanvas-body">
         <div class="container-fluid">
            <div class="d-flex flex-column gap-5 mb-5">
               <!-- Single Item -->
               <div class="about-card-sm d-flex align-items-center gap-3">
                  <div class="icon text-success">
                     <i class="ti ti-shield-half"></i>
                  </div>
                  <div>
                     <h4>Qualidade Garantida</h4>
                     <p class="mb-0">Madeiras tratadas com tecnologia avançada para máxima durabilidade.</p>
                  </div>
               </div>

               <!-- Single Item -->
               <div class="about-card-sm d-flex align-items-center gap-3">
                  <div class="icon text-success">
                     <i class="ti ti-world-star"></i>
                  </div>
                  <div>
                     <h4>Meio Ambiente</h4>
                     <p class="mb-0">Empresa responsável e amiga do meio ambiente.</p>
                  </div>
               </div>

               <!-- Single Item -->
               <div class="about-card-sm d-flex align-items-center gap-3">
                  <div class="icon text-success">
                     <i class="ti ti-capture"></i>
                  </div>
                  <div>
                     <h4>Excelência em Serviço</h4>
                     <p class="mb-0">Atendimento personalizado e entrega pontual.</p>
                  </div>
               </div>

               <!-- Single Item -->
               <div class="about-card-sm d-flex align-items-center gap-3">
                  <div class="icon text-success">
                     <i class="ti ti-user"></i>
                  </div>
                  <div>
                     <h4>Representantes</h4>
                     <p class="mb-0">Seja um representante e conquiste sua independência financeira.</p>
                  </div>
               </div>

               <a href="#" class="btn btn-success">Saiba Mais <i class="ti ti-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </div>

   <!-- Search Form Overlay -->
   <div class="search-bg-overlay" id="searchOverlay"></div>

   <!-- Search Form Popup -->
   <div class="search-form-popup">
      <h2 class="mb-5 display-6 fw-bold text-white">Como posso ajudá-lo hoje?</h2>
      <button type="button" class="close-btn" id="searchClose" aria-label="Close">
         <i class="ti ti-x"></i>
      </button>
      <form class="search-form">
         <input type="search" class="form-control" placeholder="Buscar produtos...">
         <button type="submit" class="btn btn-success d-none"><i class="ti ti-search"></i></button>
      </form>
   </div>

   <!-- Header Area-->
   <header class="header-area style-three">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-xl">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">
               <img src="assets/img/core-img/logo.png" alt="Madeiras Mata Verde">
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#touriaNav"
               aria-controls="touriaNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="ti ti-menu-deep"></i>
            </button>

            <!-- Navbar Nav -->
            <div class="collapse justify-content-xl-end navbar-collapse" id="touriaNav">
               <ul class="navbar-nav align-items-xl-center navbar-nav-scroll">
                  <li>
                     <a href="{{route('front.index')}}">Inicio</a>
                  </li>
                  <li>
                     <a href="{{route('front.sobre')}}">Sobre</a>
                  </li>
                  <li>
                     <a href="{{route('front.produtos')}}">Aplicabilidades</a>
                  </li>
                  <li>
                     <a href="{{route('front.qualidade')}}">Qualidade</a>
                  </li>
                 
                  <li>
                     <a href="{{route('front.contato')}}">Contato</a>
                  </li>
               </ul>

              
               <div class="header-navigation d-flex flex-wrap align-items-center gap-3 mt-4 mt-xl-0">
             
                  <!--<div class="header-search-btn" id="searchButton">
                     <button class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" fill="#F7F7F7" />
                           <path
                              d="M14.0772 14.0987L16.6438 16.6654M15.833 9.58203C15.833 11.2396 15.1745 12.8293 14.0024 14.0014C12.8303 15.1736 11.2406 15.832 9.58301 15.832C7.9254 15.832 6.33569 15.1736 5.16359 14.0014C3.99149 12.8293 3.33301 11.2396 3.33301 9.58203C3.33301 7.92443 3.99149 6.33472 5.16359 5.16261C6.33569 3.99051 7.9254 3.33203 9.58301 3.33203C11.2406 3.33203 12.8303 3.99051 14.0024 5.16261C15.1745 6.33472 15.833 7.92443 15.833 9.58203Z"
                              stroke="#161920" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                  </div>

                
                  <div class="offcanvas-icon" data-bs-toggle="offcanvas" data-bs-target="#sideMenuOffcanvas"
                     aria-controls="sideMenuOffcanvas">
                     <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 26 18" fill="none">
                        <path
                           d="M19.5 1.28571C19.5 0.575658 18.9179 0 18.2 0H1.3C0.582056 0 0 0.575658 0 1.28571C0 1.99577 0.582056 2.57143 1.3 2.57143H18.2C18.9179 2.57143 19.5 1.99572 19.5 1.28571ZM1.3 7.71428H24.7C25.4179 7.71428 26 8.28999 26 9C26 9.71006 25.4179 10.2857 24.7 10.2857H1.3C0.582056 10.2857 0 9.71006 0 9C0 8.28999 0.582056 7.71428 1.3 7.71428ZM1.3 15.4286H13C13.7179 15.4286 14.3 16.0042 14.3 16.7143C14.3 17.4243 13.7179 18 13 18H1.3C0.582056 18 0 17.4243 0 16.7143C0 16.0042 0.582056 15.4286 1.3 15.4286Z"
                           fill="#161920" />
                     </svg>
                  </div>-->

                 
                  <a class="btn btn-success" href="{{route('front.orcamento')}}">Solicitar Orçamento <i class="ti ti-arrow-right"></i></a>
                  <a class="btn  btn-outline-success-custom" href="{{route('front.representante')}}">Seja um Representante <i class="ti ti-arrow-right"></i></a>
               </div>
            </div>
         </nav>
      </div>
   </header>

   

   @yield('content')
   
  

   <!-- Footer -->
   <footer class="footer-wrapper jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('assets/img/bg-img/1.jpg');">
    

      <!-- Divider -->
      <div class="divider"></div>

      <div class="container">
         <div class="footer-top-content">
            <!-- Single Item -->
            <div class="ft-item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.262 22.134C11.262 22.134 4 16.018 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10C20 16.018 12.738 22.134 12.738 22.134C12.334 22.506 11.669 22.502 11.262 22.134ZM12 13.5C12.4596 13.5 12.9148 13.4095 13.3394 13.2336C13.764 13.0577 14.1499 12.7999 14.4749 12.4749C14.7999 12.1499 15.0577 11.764 15.2336 11.3394C15.4095 10.9148 15.5 10.4596 15.5 10C15.5 9.54037 15.4095 9.08525 15.2336 8.66061C15.0577 8.23597 14.7999 7.85013 14.4749 7.52513C14.1499 7.20012 13.764 6.94231 13.3394 6.76642C12.9148 6.59053 12.4596 6.5 12 6.5C11.0717 6.5 10.1815 6.86875 9.52513 7.52513C8.86875 8.1815 8.5 9.07174 8.5 10C8.5 10.9283 8.86875 11.8185 9.52513 12.4749C10.1815 13.1313 11.0717 13.5 12 13.5Z"
                        fill="white" />
                  </svg>
               </div>
               <div>
                  <h4 class="text-white">Onde Estamos</h4>
                  <p class="mb-0 text-white">Estrada Itapecerica/Marilândia BR-494 • KM-62<br>Zona Rural Itapecerica • MG • CEP: 35550-000 </p>
               </div>
            </div>

            <div class="vr-line d-none d-md-block"></div>

            <!-- Single Item -->
            <div class="ft-item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <path
                        d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
                        fill="white" />
                  </svg>
               </div>
               <div>
                  <h4 class="text-white">Contato</h4>
                  <p class="mb-0 text-white"> <i class="ti ti-brand-phone"></i> (37) 3212-6962 <br>  <i class="ti ti-brand-whatsapp"></i> (37) 99803-8863</p>
               </div>
            </div>

            <div class="vr-line d-none d-lg-block"></div>

            <!-- Single Item -->
            <div class="ft-item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <path
                        d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"
                        fill="white" />
                  </svg>
               </div>
               <div>
                  <h4 class="text-white">Email</h4>
                  <p class="mb-0 text-white">financeiro@madeirasmataverde.com.br </p>
               </div>
            </div>
         </div>
      </div>

      <!-- Divider -->
      <div class="divider"></div>

      <div class="container">
         <div class="border-top"></div>
      </div>

    
  

      <!-- Copyright -->
      <div class="copyright-wrapper">
         <div class="container">
            <div class="row align-items-center">
               <!-- Copyright -->
               <div class="col-12 col-md-6">
                  <p class="mb-3 mb-md-0 copyright">Madeiras Mata Verde © <span id="year"></span> -
                     Todos os Direitos Reservados </p>
               </div>

               <!-- Footer Bottom Nav -->
               <div class="col-12 col-md-6">
                  <div class="footer-bottom-nav">
                     <a href="#">Política de Privacidade</a>
                     <a href="#">Termos de Uso</a>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!-- Cookie Alert 
   <div class="cookiealert bg-success shadow-lg show">
      <h4 class="text-white"><i class="ti ti-cookie"></i> Cookie Alert</h4>
      <p class="mb-4 text-white">We use cookies for the best experience on our website, for social media features and to
         anal
         traffic. accepting you agree to our use of cookies. Read <a href="#" target="_blank"> Cookies Policy.</a></p>
      <button class="btn btn-dark btn-sm acceptcookies" type="button" aria-label="Close">Accept</button>
   </div>-->

   <!-- Scroll To Top -->
   <button id="scrollTopButton" class="touria-scrolltop scrolltop-hide">
      <i class="ti ti-arrow-up"></i>
   </button>

   <!-- WhatsApp Floating Button -->
   <a href="https://wa.me/5537998038863?text=Olá! Gostaria de saber mais sobre os produtos da Madeiras Mata Verde." 
      target="_blank" 
      class="whatsapp-float scrolltop-hide"
      title="Fale conosco no WhatsApp">
      <i class="ti ti-brand-whatsapp"></i>
   </a>

   <!-- All JavaScript Files -->
   <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/js/slideToggle.min.js')}}"></script>
   <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
   <script src="{{asset('assets/js/index.js')}}"></script>
   <script src="{{asset('assets/js/cookiealert.js')}}"></script>
   <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
   <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('assets/js/flatpickr.min.js')}}"></script>
   <script src="{{asset('assets/js/nice-select2.js')}}"></script>
   <script src="{{asset('assets/js/venobox.min.js')}}"></script>
   <script src="{{asset('assets/js/wow.min.js')}}"></script>
   <script src="{{asset('assets/js/active.js')}}"></script>
</body>

</html>