@extends('layouts.templateFront')

@section('content')
   <!-- Breadcrumb Section -->
   <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
      style="background-image: url('{{asset('assets/img/bg-img/97.jpg')}}');">
      <div class="container">
         <!-- Breadcrumb Content -->
         <div class="breadcrumb-content">
            <div class="divider"></div>
            <h2>Seja um Representante</h2>
            <ul class="list-unstyled">
               <li><a href="{{route('front.index')}}">Início</a></li>
               <li>Seja um Representante</li>
            </ul>
         </div>
      </div>

      <!-- Divider -->
      <div class="divider"></div>
   </div>

   <!-- Divider -->
   <div class="divider"></div>

   <!-- Representante Page Section -->
   <div class="contact-page-section">
      <div class="container d-flex justify-content-center">
         <!-- Representante Form -->
         <div class="contact-form-wrapper bg-secondary">
            <!-- Section Heading -->
            <div class="section-heading text-center">
               <h2>Junte-se à Nossa Equipe</h2>
               <p class="mb-0">Torne-se um representante da Madeiras Mata Verde e conquiste sua independência financeira. Preencha o formulário abaixo e nossa equipe entrará em contato.</p>
            </div>

            <div class="divider-sm"></div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sucesso!</strong> {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <!-- Representante Form -->
            <form action="{{ route('front.representante.store') }}" method="POST">
               @csrf
               <div class="row g-4">
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo*" required>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF*" required>
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
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade*" required>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <select class="form-control" name="estado" required>
                           <option value="">Estado*</option>
                           <option value="AC">Acre</option>
                           <option value="AL">Alagoas</option>
                           <option value="AP">Amapá</option>
                           <option value="AM">Amazonas</option>
                           <option value="BA">Bahia</option>
                           <option value="CE">Ceará</option>
                           <option value="DF">Distrito Federal</option>
                           <option value="ES">Espírito Santo</option>
                           <option value="GO">Goiás</option>
                           <option value="MA">Maranhão</option>
                           <option value="MT">Mato Grosso</option>
                           <option value="MS">Mato Grosso do Sul</option>
                           <option value="MG">Minas Gerais</option>
                           <option value="PA">Pará</option>
                           <option value="PB">Paraíba</option>
                           <option value="PR">Paraná</option>
                           <option value="PE">Pernambuco</option>
                           <option value="PI">Piauí</option>
                           <option value="RJ">Rio de Janeiro</option>
                           <option value="RN">Rio Grande do Norte</option>
                           <option value="RS">Rio Grande do Sul</option>
                           <option value="RO">Rondônia</option>
                           <option value="RR">Roraima</option>
                           <option value="SC">Santa Catarina</option>
                           <option value="SP">São Paulo</option>
                           <option value="SE">Sergipe</option>
                           <option value="TO">Tocantins</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <select class="form-control" name="experiencia" required>
                           <option value="">Experiência na Área*</option>
                           <option value="nenhuma">Nenhuma</option>
                           <option value="basica">Básica</option>
                           <option value="intermediaria">Intermediária</option>
                           <option value="avancada">Avançada</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <select class="form-control" name="disponibilidade" required>
                           <option value="">Disponibilidade*</option>
                           <option value="integral">Tempo Integral</option>
                           <option value="parcial">Tempo Parcial</option>
                           <option value="fins_semana">Fins de Semana</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control" name="motivacao" placeholder="Conte-nos por que você quer ser um representante da Madeiras Mata Verde e quais são seus objetivos" rows="4"></textarea>
                     </div>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-success w-100 mt-3">Enviar Candidatura <i class="ti ti-arrow-right"></i></button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <!-- Divider -->
      <div class="divider"></div>
   </div>

   <!-- Benefícios do Programa -->
   <div class="container">
      <div class="row g-4 mt-5">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Benefícios de Ser um Representante</h3>
               <p class="mb-0">Descubra as vantagens exclusivas de fazer parte da nossa equipe de representantes</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-currency-dollar text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Comissões Atraentes</h5>
               <p class="mb-0">Ganhe comissões competitivas sobre cada venda realizada.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-chart-line text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Crescimento Profissional</h5>
               <p class="mb-0">Desenvolva suas habilidades comerciais e cresça na carreira.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-users text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Suporte Completo</h5>
               <p class="mb-0">Receba treinamento e suporte técnico para suas vendas.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <i class="ti ti-trophy text-success" style="font-size: 3rem;"></i>
               </div>
               <h5>Reconhecimento</h5>
               <p class="mb-0">Participe de programas de incentivo e premiações.</p>
            </div>
         </div>
      </div>
   </div>

   <!-- Como Funciona -->
   <div class="container mt-5">
      <div class="row g-4">
         <div class="col-12">
            <div class="section-heading text-center">
               <h3>Como Funciona o Programa</h3>
               <p class="mb-0">Entenda o processo para se tornar um representante da Madeiras Mata Verde</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <span class="badge bg-success" style="font-size: 2rem; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">1</span>
               </div>
               <h5>Cadastro</h5>
               <p class="mb-0">Preencha o formulário de candidatura com seus dados.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <span class="badge bg-success" style="font-size: 2rem; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">2</span>
               </div>
               <h5>Análise</h5>
               <p class="mb-0">Nossa equipe analisa seu perfil e experiência.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <span class="badge bg-success" style="font-size: 2rem; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">3</span>
               </div>
               <h5>Treinamento</h5>
               <p class="mb-0">Receba treinamento sobre produtos e técnicas de venda.</p>
            </div>
         </div>
         
         <div class="col-12 col-md-6 col-lg-3">
            <div class="feature-card text-center">
               <div class="icon mb-3">
                  <span class="badge bg-success" style="font-size: 2rem; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">4</span>
               </div>
               <h5>Ativação</h5>
               <p class="mb-0">Comece a vender e ganhar comissões imediatamente.</p>
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
        
        // Máscara para CPF
        const cpfInput = document.getElementById('cpf');
        
        if (cpfInput) {
            cpfInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                
                // Limita a 11 dígitos
                if (value.length > 11) {
                    value = value.substring(0, 11);
                }
                
                if (value.length <= 11) {
                    value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{0,2})/, '$1.$2.$3-$4');
                }
                
                e.target.value = value;
            });
        }
    });
</script>
