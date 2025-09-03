@extends('layouts.templateFront')

@section('content')
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Sobre Nós</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Sobre</li>
            </ul>
         </div>
      </div>

    
   </div>

   <!-- Divider -->
 

   <!-- A Empresa Section -->
   <div class="container">
      <div class="row g-4 mt-5">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>A Empresa</h3>
               <p class="mb-0">Conheça a história e os valores da Madeiras Mata Verde</p>
            </div>
         </div>
         
         <div class="col-12 col-lg-8 mx-auto">
            <div class="feature-card">
               <div class="row g-4">
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-tree text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Tratamento de Eucalipto</h5>
                     <p class="mb-3">Tratamento de eucalipto, utilizando o produto CCA em Autoclave através do processo de vácuo-pressão.</p>
                     <p class="mb-3">Produção de madeira tratada para o meio rural, construção civil, eletrificação e telefonia.</p>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="text-center mb-4">
                        <i class="ti ti-leaf text-success" style="font-size: 4rem;"></i>
                     </div>
                     <h5 class="text-success mb-3">Sustentabilidade</h5>
                     <p class="mb-3">Instalada dentro da área de seu próprio reflorestamento, com aproximadamente 2,5 milhões de árvores plantadas de espécies ideais para o tratamento.</p>
                     <p class="mb-0">Atuação do grupo também nas áreas de pecuária de corte, construção civil e equinocultura.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Missão, Visão e Valores -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Nossa Identidade</h3>
               <p class="mb-0">Os pilares que guiam nossa empresa</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-target text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Missão</h5>
               <p class="mb-0">Fazer com que seus produtos sejam de qualidade, resistência e durabilidade atendendo às necessidades de nossos cliente colaboradores e acionistas com o máximo de respeito, ética e honestidade.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-eye text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Visão</h5>
               <p class="mb-0">Assegurar o crescimento do grupo familiar com solidez, ética e garantia dos seus produtos, buscando sempre reconhecimento como referencia de eucalipto tratado e responsabilidade social e ambiental.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-heart text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Valores</h5>
               <p class="mb-0">Buscar sempre inovações tecnológicas, respeitando as normas vigentes, para crescermos pensando em soluções construtivas de madeira, sem agredir o meio ambiente e com responsabilidade social.</p>
            </div>
         </div>
      </div>
   </div>

   <!-- História Timeline -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Nossa História</h3>
               <p class="mb-0">Conheça um pouco mais a história da <strong>Madeiras Mata Verde</strong></p>
            </div>
         </div>
         
         <div class="col-12">
            <div class="timeline-wrapper">
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">1946</span>
                  </div>
                  <div class="timeline-content">
                     <h5>O Início</h5>
                     <p>O jovem <strong>Luis Ferreira de Moraes</strong> sai da cidade de Penedo, Alagoas, para se instalar na cidade de São Paulo. Funda, com o irmão <strong>Domingos Moraes</strong>, a indústria de alumínios <strong>Penedo</strong>.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">1965</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Expansão para Minas Gerais</h5>
                     <p>Inaugurada uma unidade do grupo em Contagem, <strong>Minas Gerais</strong>; fazendo com que <strong>Luis Moraes</strong>, esposa e os dois filhos mudem para este estado. Neste mesmo ano, adquire a primeira fazenda em Minas.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">1974</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Transição Agropecuária</h5>
                     <p>Afasta-se da indústria e dedica-se ao ramo agropecuário.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">1978</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Formação em Agronomia</h5>
                     <p>O filho mais velho, <strong>Luis Norberto</strong>, forma-se em agronomia e inicia-se no ramo da cafeicultura e pecuária leiteira.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">1988</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Administração de Empresas</h5>
                     <p>O irmão <strong>Paulo Moraes</strong> forma-se em administração de empresas e começa a trabalhar no ramo de pecuária de corte, fazendo recria, engorda e confinamento.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">2002</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Minas Energética</h5>
                     <p>O grupo adquire a empresa <strong>Minas Energética</strong>, que possui fazendas de reflorestamento, mudando então a razão social para <strong>Agropecuária Penedo</strong>. A partir desse ano iniciou-se o plantio de espécies recomendadas para o tratamento.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">2004</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Nascimento da Madeiras Mata Verde</h5>
                     <p>Fundada a <strong>Madeiras Mata Verde</strong> com a finalidade de beneficiar a madeira produzida em suas florestas com o objetivo de atender o mercado regional.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">2012</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Marcenaria</h5>
                     <p>Instalada uma marcenaria com o intuito de produzir moveis rústicos, porteiras e diversos objetos de decoração.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">2013</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Tratamento de Pinus</h5>
                     <p>Início do tratamento de <em>Pinus Elliottii</em> utilizado para decks, assoalhos, forros e outros.</p>
                  </div>
               </div>
               
               <div class="timeline-item">
                  <div class="timeline-marker">
                     <span class="year">Atualmente</span>
                  </div>
                  <div class="timeline-content">
                     <h5>Atuação Nacional</h5>
                     <p>A <strong>Madeiras Mata Verde</strong> atua em todo o território nacional.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Informações de Contato -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Informações de Contato</h3>
               <p class="mb-0">Entre em contato conosco</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-phone text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Telefone Fixo</h5>
               <p class="mb-0">(37) 3212-6962</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-brand-whatsapp text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>WhatsApp / Celular</h5>
               <p class="mb-0">(37) 99803-8863</p>
            </div>
         </div>
         
         <div class="col-12 col-md-4">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-mail text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>E-mail</h5>
               <p class="mb-0">contato@madeirasmataverde.com.br</p>
            </div>
         </div>
         
         <div class="col-12">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-map-pin text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Endereço</h5>
               <p class="mb-0">Estrada Itapecerica/Marilândia<br>
               BR-494 • KM-62 • Zona Rural<br>
               Itapecerica • MG • CEP: 35550-000</p>
            </div>
         </div>
      </div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>
@endsection
