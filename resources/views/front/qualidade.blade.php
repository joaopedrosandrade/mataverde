@extends('layouts.templateFront')

@section('content')
<div class="qualidade-page">
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Qualidade</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Qualidade</li>
            </ul>
         </div>
      </div>
   </div>

   <!-- Madeira Autoclavada Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Madeira Autoclavada</h3>
               <p class="mb-0">Processo avançado de tratamento para máxima durabilidade</p>
            </div>
         </div>
         
         <div class="col-12 col-lg-10 mx-auto">
            <div class="feature-card">
               <div class="row g-4">
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-settings text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Processo Célula Cheia</h5>
                     <p class="mb-3">No Brasil temos, predominantemente, a utilização do processo de célula cheia para produzir o eucalipto imunizado em autoclave, este processo se aplica a agentes preservativos hidrossolúveis, como o CCA, e o método de impregnação se dá por vácuo-pressão.</p>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-leaf text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Preservativo CCA</h5>
                     <p class="mb-3">Inicialmente cria-se uma solução da mistura do agente preservativo com a água. Em seguida a madeira é armazenada dentro do autoclave. Cria-se, então, um vácuo dentro do autoclave, esta parte do processo tem como finalidade retirar o ar para facilitar a absorção da solução.</p>
                  </div>
               </div>
               
               <div class="row g-4 mt-4">
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-pressure text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Sistema Vácuo-Pressão</h5>
                     <p class="mb-3">Após o vácuo, é criada uma pressão dentro do autoclave, que forçará a penetração da solução na madeira. E finalmente utiliza-se o vácuo novamente para retirar o excesso.</p>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-check-circle text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Produto Final</h5>
                     <p class="mb-0">Após o tratamento a madeira é levada a uma área de descanso, onde escorre a solução remanescente, e então ela está pronta para ser enviada ao cliente.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Processo de Tratamento Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>O Processo de Tratamento</h3>
               <p class="mb-0">Conheça as 6 etapas do processo de autoclave</p>
            </div>
         </div>
         
        <div class="col-12">
           <img class="d-block mx-auto img-fluid" src="{{asset('assets/img/pr/r.png')}}" alt="Etapa 1">
        
        </div>
      </div>
   </div>

   <!-- Vantagens do Processo Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Vantagens do Processo CCA</h3>
               <p class="mb-0">Por que escolher madeira tratada em autoclave?</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-shield-check text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Proteção Total</h5>
               <p class="mb-0">Proteção contra cupins, fungos, bactérias e intempéries por décadas.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-leaf text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Eco-Friendly</h5>
               <p class="mb-0">Processo sustentável com preservativos ecologicamente corretos e recicláveis.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-clock text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Durabilidade</h5>
               <p class="mb-0">Vida útil estendida significativamente, reduzindo custos de manutenção.</p>
            </div>
         </div>
      </div>
   </div>

   <!-- Controle de Qualidade Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Controle de Qualidade</h3>
               <p class="mb-0">Garantia de excelência em todos os nossos produtos</p>
            </div>
         </div>
         
         <div class="col-12 col-lg-8 mx-auto">
            <div class="feature-card">
               <div class="row g-4">
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-3">
                        <i class="ti ti-microscope text-success" style="font-size: 3rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Análise Laboratorial</h5>
                     <p class="mb-0">Controle rigoroso da concentração e penetração do preservativo através de análises laboratoriais.</p>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-3">
                        <i class="ti ti-certificate text-success" style="font-size: 3rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Certificações</h5>
                     <p class="mb-0">Produtos certificados conforme normas técnicas brasileiras e internacionais de qualidade.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>
</div>

<style>
/* Estilos específicos para o processo de autoclave */
.processo-autoclave {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   gap: 2rem;
   max-width: 1200px;
   margin: 0 auto;
}

.processo-etapa {
   display: flex;
   flex-direction: column;
   align-items: center;
   text-align: center;
   position: relative;
}

.etapa-numero {
   width: 60px;
   height: 60px;
   background: #3CB371;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   margin-bottom: 1rem;
   z-index: 2;
}

.etapa-numero .numero {
   color: white;
   font-size: 24px;
   font-weight: bold;
}

.etapa-conteudo {
   flex: 1;
}

.etapa-imagem {
   margin-bottom: 1rem;
   height: 120px;
   display: flex;
   align-items: center;
   justify-content: center;
}

.autoclave {
   position: relative;
   width: 100px;
   height: 80px;
}

.autoclave-base {
   width: 100%;
   height: 60px;
   background: #e9ecef;
   border-radius: 8px;
   position: relative;
   border: 2px solid #dee2e6;
}

.solucao-baixa {
   background: #6c757d;
   height: 30px;
}

.solucao-alta {
   background: #6c757d;
   height: 60px;
}

.madeira-inset {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 30px;
   height: 30px;
   background: #8b4513;
   border-radius: 50%;
   border: 2px solid #654321;
}

.madeira-section {
   width: 100%;
   height: 100%;
   border-radius: 50%;
   background: repeating-linear-gradient(
      45deg,
      #8b4513,
      #8b4513 2px,
      #654321 2px,
      #654321 4px
   );
}

/* Setas e movimentos */
.seta-movimento, .seta-solucao, .seta-excesso {
   position: absolute;
   width: 20px;
   height: 3px;
   background: #ff8c00;
   top: 50%;
   transform: translateY(-50%);
}

.seta-direita {
   right: -30px;
}

.seta-direita::after {
   content: '';
   position: absolute;
   right: -5px;
   top: -3px;
   width: 0;
   height: 0;
   border-left: 8px solid #ff8c00;
   border-top: 4px solid transparent;
   border-bottom: 4px solid transparent;
}

.seta-esquerda {
   left: -30px;
}

.seta-esquerda::after {
   content: '';
   position: absolute;
   left: -5px;
   top: -3px;
   width: 0;
   height: 0;
   border-right: 8px solid #ff8c00;
   border-top: 4px solid transparent;
   border-bottom: 4px solid transparent;
}

/* Setas de ar saindo */
.setas-ar, .setas-final {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 40px;
   height: 40px;
}

.setas-saindo .seta-ar, .setas-saindo .seta-final {
   position: absolute;
   width: 8px;
   height: 2px;
   background: #ff8c00;
}

.setas-saindo .seta-ar:nth-child(1), .setas-saindo .seta-final:nth-child(1) {
   top: 20%;
   left: 50%;
   transform: translateX(-50%);
}

.setas-saindo .seta-ar:nth-child(2), .setas-saindo .seta-final:nth-child(2) {
   top: 50%;
   right: 10%;
   transform: translateY(-50%) rotate(90deg);
}

.setas-saindo .seta-ar:nth-child(3), .setas-saindo .seta-final:nth-child(3) {
   bottom: 20%;
   left: 50%;
   transform: translateX(-50%);
}

.setas-saindo .seta-ar:nth-child(4), .setas-saindo .seta-final:nth-child(4) {
   top: 50%;
   left: 10%;
   transform: translateY(-50%) rotate(90deg);
}

/* Setas de pressão entrando */
.setas-pressao {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 40px;
   height: 40px;
}

.setas-entrando .seta-pressao {
   position: absolute;
   width: 8px;
   height: 2px;
   background: #ff8c00;
}

.setas-entrando .seta-pressao:nth-child(1) {
   top: 20%;
   left: 50%;
   transform: translateX(-50%);
}

.setas-entrando .seta-pressao:nth-child(2) {
   top: 50%;
   right: 10%;
   transform: translateY(-50%) rotate(90deg);
}

.setas-entrando .seta-pressao:nth-child(3) {
   bottom: 20%;
   left: 50%;
   transform: translateX(-50%);
}

.setas-entrando .seta-pressao:nth-child(4) {
   top: 50%;
   left: 10%;
   transform: translateY(-50%) rotate(90deg);
}

/* Setas de conexão entre etapas */
.seta-conexao {
   position: absolute;
   background: #3CB371;
   z-index: 1;
}

.seta-horizontal {
   width: 60px;
   height: 4px;
   top: 30px;
   right: -30px;
}

.seta-vertical {
   width: 4px;
   height: 60px;
   bottom: -30px;
   left: 50%;
   transform: translateX(-50%);
}

.seta-horizontal::after {
   content: '';
   position: absolute;
   right: -8px;
   top: -6px;
   width: 0;
   height: 0;
   border-left: 12px solid #3CB371;
   border-top: 8px solid transparent;
   border-bottom: 8px solid transparent;
}

.seta-vertical::after {
   content: '';
   position: absolute;
   bottom: -8px;
   left: -6px;
   width: 0;
   height: 0;
   border-top: 12px solid #3CB371;
   border-left: 8px solid transparent;
   border-right: 8px solid transparent;
}

.etapa-texto h5 {
   font-size: 14px;
   font-weight: 600;
   color: #333;
   margin-bottom: 0.5rem;
   line-height: 1.3;
}

.etapa-texto p {
   font-size: 12px;
   color: #666;
   margin-bottom: 0;
}

/* Layout responsivo */
@media (max-width: 992px) {
   .processo-autoclave {
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
   }
}

@media (max-width: 768px) {
   .processo-autoclave {
      grid-template-columns: 1fr;
      gap: 1rem;
   }
   
   .seta-conexao {
      display: none;
   }
   
   .etapa-imagem {
      height: 100px;
   }
   
   .autoclave {
      width: 80px;
      height: 60px;
   }
   
   .madeira-inset {
      width: 25px;
      height: 25px;
   }
}

@media (max-width: 576px) {
   .etapa-numero {
      width: 50px;
      height: 50px;
   }
   
   .etapa-numero .numero {
      font-size: 20px;
   }
   
   .etapa-texto h5 {
      font-size: 12px;
   }
   
   .etapa-texto p {
      font-size: 11px;
   }
}
</style>
@endsection
