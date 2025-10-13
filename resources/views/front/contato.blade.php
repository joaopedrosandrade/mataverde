@extends('layouts.templateFront')

@section('content')
<div class="contato-page">
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Contato</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Contato</li>
            </ul>
         </div>
      </div>
   </div>

   <!-- Contact Form Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Entre em Contato</h3>
               <p class="mb-0">Estamos prontos para atender você e esclarecer suas dúvidas</p>
            </div>
         </div>
         
         <div class="col-12 col-lg-8 mx-auto">
            <div class="feature-card">
               <form class="contact-form" method="POST" action="#">
                  <div class="row g-3">
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                           <label for="nome" class="form-label">Nome Completo *</label>
                           <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                           <label for="telefone" class="form-label">Telefone/WhatsApp *</label>
                           <input type="tel" class="form-control" id="telefone" name="telefone" required>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                           <label for="email" class="form-label">E-mail *</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                           <label for="cidade" class="form-label">Cidade</label>
                           <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <label for="assunto" class="form-label">Assunto *</label>
                           <select class="form-control" id="assunto" name="assunto" required>
                              <option value="">Selecione um assunto</option>
                              <option value="orcamento">Solicitação de Orçamento</option>
                              <option value="produtos">Informações sobre Produtos</option>
                              <option value="qualidade">Informações sobre Qualidade</option>
                              <option value="representante">Tornar-se Representante</option>
                              <option value="duvidas">Dúvidas Gerais</option>
                              <option value="outros">Outros</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <label for="mensagem" class="form-label">Mensagem *</label>
                           <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required placeholder="Descreva sua necessidade ou dúvida..."></textarea>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-success btn-lg w-100">
                              <i class="ti ti-send me-2"></i>Enviar Mensagem
                           </button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- Contact Information Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Nossos Contatos</h3>
               <p class="mb-0">Escolha a forma mais conveniente para falar conosco</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-phone text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Telefone Fixo</h5>
               <p class="mb-3">Para ligações comerciais</p>
               <a href="tel:+553732126962" class="btn btn-outline-success">
                  (37) 3212-6962
               </a>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-brand-whatsapp text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>WhatsApp</h5>
               <p class="mb-3">Atendimento rápido e direto</p>
               <a href="https://wa.me/5537998038863" target="_blank" class="btn btn-outline-success">
                  (37) 99803-8863
               </a>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-mail text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>E-mail</h5>
               <p class="mb-3">Para solicitações detalhadas</p>
               <a href="mailto:contato@madeirasmataverde.com.br" class="btn btn-outline-success">
                  Enviar E-mail
               </a>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center h-100">
               <div class="icon mb-3">
                  <i class="ti ti-map-pin text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Localização</h5>
               <p class="mb-3">Nossa sede em Itapecerica-MG</p>
               <button class="btn btn-outline-success" onclick="abrirMapa()">
                  Ver no Mapa
               </button>
            </div>
         </div>
      </div>
   </div>

   <!-- Address Details -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12 col-lg-8 mx-auto">
            <div class="feature-card">
               <div class="text-center">
                  <h4 class="text-success mb-3">Madeiras Mata Verde</h4>
                  <p class="mb-2">
                     <i class="ti ti-map-pin text-success me-2"></i>
                     <strong>Endereço:</strong> Estrada Itapecerica/Marilândia, BR-494, KM-62
                  </p>
                  <p class="mb-2">
                     <i class="ti ti-map-pin text-success me-2"></i>
                     Zona Rural • Itapecerica • MG • CEP: 35550-000
                  </p>
                  <p class="mb-2">
                     <i class="ti ti-clock text-success me-2"></i>
                     <strong>Horário de Funcionamento:</strong> Segunda a Sexta, 7h às 17h
                  </p>
                  <p class="mb-0">
                     <i class="ti ti-clock text-success me-2"></i>
                     Sábado, 7h às 12h
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- FAQ Section -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Perguntas Frequentes</h3>
               <p class="mb-0">Tire suas dúvidas mais comuns</p>
            </div>
         </div>
         
         <div class="col-12 col-lg-10 mx-auto">
            <div class="accordion" id="faqAccordion">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq1">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Quais tipos de madeira tratada vocês oferecem?
                     </button>
                  </h2>
                  <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                     <div class="accordion-body">
                        Oferecemos eucalipto tratado com CCA em autoclave através do processo de vácuo-pressão, para decks, assoalhos e forros. Todos os produtos passam por rigoroso controle de qualidade.
                     </div>
                  </div>
               </div>
               
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq2">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Como solicitar um orçamento?
                     </button>
                  </h2>
                  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                     <div class="accordion-body">
                        Você pode solicitar um orçamento através do formulário de contato, por WhatsApp, telefone ou e-mail. Informe o tipo e quantidade de madeira necessária, e nossa equipe enviará uma proposta personalizada.
                     </div>
                  </div>
               </div>
               
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq3">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Vocês fazem entrega em todo o Brasil?
                     </button>
                  </h2>
                  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                     <div class="accordion-body">
                        Sim, atendemos todo o território nacional. Nossa logística permite entregas em todas as regiões do Brasil, com prazo e custo calculados conforme a localização e quantidade solicitada.
                     </div>
                  </div>
               </div>
               
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq4">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Qual é a garantia dos produtos?
                     </button>
                  </h2>
                  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                     <div class="accordion-body">
                        Nossos produtos têm garantia de qualidade e durabilidade. A madeira tratada com CCA oferece proteção contra cupins, fungos e intempéries por décadas, quando instalada corretamente.
                     </div>
                  </div>
               </div>
               
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq5">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Como posso me tornar um representante?
                     </button>
                  </h2>
                  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                     <div class="accordion-body">
                        Entre em contato conosco através do formulário ou WhatsApp selecionando "Tornar-se Representante" no assunto. Nossa equipe comercial entrará em contato para apresentar as condições e benefícios do programa.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>
</div>

   <script>
   function abrirMapa() {
      // Coordenadas aproximadas de Itapecerica-MG
      var lat = -20.4725;
      var lng = -45.1258;
      var url = `https://www.google.com/maps?q=${lat},${lng}&z=15&t=m`;
      window.open(url, '_blank');
   }

   // Máscara para telefone
   document.getElementById('telefone').addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length <= 11) {
         value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
         if (value.length < 14) {
            value = value.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
         }
      }
      e.target.value = value;
   });
   </script>
@endsection
