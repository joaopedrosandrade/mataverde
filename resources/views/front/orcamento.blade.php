@extends('layouts.templateFront')

@section('content')
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Solicitar Orçamento</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Solicitar Orçamento</li>
            </ul>
         </div>
      </div>

      <!-- Divider -->
      <div class="divider"></div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>

   <!-- Contact Page Section -->
   <div class="contact-page-section">
      <div class="container d-flex justify-content-center">
         <!-- Contact Form -->
         <div class="contact-form-wrapper bg-secondary">
            <!-- Section Heading -->
            <div class="section-heading text-center">
               <h2>Orçamento</h2>
               <p class="mb-0">Preencha o formulário abaixo e nossa equipe entrará em contato para fornecer um orçamento personalizado para suas necessidades.</p>
            </div>

            <div class="divider-sm"></div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sucesso!</strong> {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <!-- Contact Form -->
            <form action="{{ route('front.orcamento.store') }}" method="POST">
               @csrf
               <div class="row g-4">
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo*" required>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="empresa" placeholder="Empresa">
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone*" required>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email*" required>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <select class="form-control" name="tipo_produto" required>
                           <option value="">Tipo de Produto*</option>
                           <option value="eucalipto">Eucalipto Tratado</option>
                           <option value="poste">Poste de Eucalipto</option>
                           <option value="dormente">Dormente de Eucalipto</option>
                           <option value="pontalete">Pontalete</option>
                           <option value="outros">Outros Produtos</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="quantidade" placeholder="Quantidade Aproximada">
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control" name="mensagem" placeholder="Descreva sua necessidade ou projeto" rows="4"></textarea>
                     </div>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-success w-100 mt-3">Enviar Solicitação <i class="ti ti-arrow-right"></i></button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <!-- Divider -->
      <div class="divider"></div>
   </div>

   <!-- Informações Adicionais -->
   <div class="container">
      <div class="row g-4 mt-5">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Por que escolher a Madeiras Mata Verde?</h3>
               <p class="mb-0">Conheça os diferenciais que fazem da nossa empresa a melhor escolha para suas necessidades</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-shield-check text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Qualidade Garantida</h5>
               <p class="mb-0">Madeiras tratadas com tecnologia avançada e certificação de qualidade.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-truck text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Entrega Rápida</h5>
               <p class="mb-0">Logística eficiente para entregar seus produtos no prazo combinado.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-currency-dollar text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Melhor Preço</h5>
               <p class="mb-0">Preços competitivos e condições especiais para grandes volumes.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-headset text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Suporte Técnico</h5>
               <p class="mb-0">Equipe especializada para orientar na escolha dos melhores produtos.</p>
            </div>
         </div>
      </div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>
@endsection

<style>
    /* Corrige o problema do placeholder sendo cortado */
    .contact-form-wrapper .form-control {
        line-height: 1.5 !important;
        padding: 12px 15px !important;
        font-size: 14px !important;
        height: auto !important;
    }
    
    /* Garante que o placeholder apareça completamente */
    .contact-form-wrapper .form-control::placeholder {
        line-height: 1.5 !important;
        overflow: visible !important;
        white-space: normal !important;
    }
</style>

<script>
    // Máscara para telefone
    document.addEventListener('DOMContentLoaded', function() {
        const telefoneInput = document.getElementById('telefone');
        
        if (telefoneInput) {
            telefoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                
                // Limita a 11 dígitos (celular)
                if (value.length > 11) {
                    value = value.substring(0, 11);
                }
                
                if (value.length <= 11) {
                    if (value.length <= 10) {
                        // Telefone fixo: (99) 9999-9999
                        value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
                    } else {
                        // Celular: (99) 99999-9999
                        value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
                    }
                }
                
                e.target.value = value;
            });
        }
    });
</script>
