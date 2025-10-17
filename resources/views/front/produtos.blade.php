@extends('layouts.templateFront')

@section('content')
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Aplicabilidades</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Aplicabilidades</li>
            </ul>
         </div>
      </div>

   </div>

   <!-- Featured Products Section -->
   <section class="featured-destination bg-secondary">

      <div class="container">
         <div class="row g-4">
            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/10.jpg')}}" alt="Postes de Eucalipto">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Postes de Eucalipto</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>

            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/11.jpg')}}" alt="Dormentes">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Dormentes</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>

            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/12.jpg')}}" alt="Madeiras para Construção">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Madeiras para Construção</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>

            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/10.jpg')}}" alt="Madeiras para Eletrificação">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Madeiras para Eletrificação</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>

            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/11.jpg')}}" alt="Madeiras para Telefonia">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Madeiras para Telefonia</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>

            <!-- Featured Product Card -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="featured-destination-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                  <img src="{{asset('assets/img/bg-img/12.jpg')}}" alt="Madeiras para Meio Rural">

                  <!-- Overlay Content -->
                  <div class="overlay-content d-flex flex-wrap gap-4 align-items-end justify-content-between">
                     <div>
                        <p class="mb-1 text-white">Produto</p>
                        <h4 class="mb-0 text-white">Madeiras para Meio Rural</h4>
                     </div>
                     <!-- Badge -->
                     <span class="badge bg-success">Tratados</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Divider -->
     
   </section>



   <!-- Product Features Section -->
   <section class="bg-light py-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
               <div class="section-heading text-center">
                  <span class="sub-title text-success">Por que escolher nossos produtos?</span>
                  <h2 class="mb-0">Vantagens da Madeira Tratada</h2>
               </div>
            </div>
         </div>

         <div class="divider-sm"></div>

         <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-3">
               <div class="feature-card text-center">
                  <div class="icon mb-3">
                     <i class="ti ti-shield-check text-success" style="font-size: 3rem;"></i>
                  </div>
                  <h5>Proteção Total</h5>
                  <p class="mb-0">Tratamento CCA em autoclave garante proteção contra cupins, fungos e umidade.</p>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
               <div class="feature-card text-center">
                  <div class="icon mb-3">
                     <i class="ti ti-clock text-success" style="font-size: 3rem;"></i>
                  </div>
                  <h5>Durabilidade</h5>
                  <p class="mb-0">Vida útil de 15 a 30 anos dependendo da aplicação e condições de uso.</p>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
               <div class="feature-card text-center">
                  <div class="icon mb-3">
                     <i class="ti ti-leaf text-success" style="font-size: 3rem;"></i>
                  </div>
                  <h5>Sustentável</h5>
                  <p class="mb-0">Produzido a partir de reflorestamento próprio com 2,5 milhões de árvores.</p>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
               <div class="feature-card text-center">
                  <div class="icon mb-3">
                     <i class="ti ti-certificate text-success" style="font-size: 3rem;"></i>
                  </div>
                  <h5>Certificação</h5>
                  <p class="mb-0">Produtos certificados e que atendem às normas técnicas brasileiras.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- CTA Section - Solicitar Orçamento -->
   <section class="bg-success text-white py-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
               <h3 class="mb-3 text-white">Interessado em nossos produtos?</h3>
               <p class="mb-4 text-white">Solicite um orçamento personalizado e descubra como a madeira tratada pode ser a solução ideal para seu projeto.</p>
               <a href="{{route('front.orcamento')}}" class="btn btn-light btn-lg px-5">
                  <i class="ti ti-phone me-2"></i>
                  Solicitar Orçamento
               </a>
            </div>
         </div>
      </div>
   </section>

@endsection
