@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Usuários</h6>
                        <h2 class="mt-2 mb-0">{{ \App\User::count() }}</h2>
                    </div>
                    <i class="fas fa-users fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Produtos</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Product::count() }}</h2>
                    </div>
                    <i class="fas fa-box fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Depoimentos</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Testimonial::count() }}</h2>
                    </div>
                    <i class="fas fa-comments fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Orçamentos</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Quotation::count() }}</h2>
                        @if(\App\Quotation::where('is_read', false)->count() > 0)
                            <small class="badge bg-danger">{{ \App\Quotation::where('is_read', false)->count() }} não lidos</small>
                        @endif
                    </div>
                    <i class="fas fa-file-invoice fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Representantes</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Representant::count() }}</h2>
                        @if(\App\Representant::where('is_read', false)->count() > 0)
                            <small class="badge bg-danger">{{ \App\Representant::where('is_read', false)->count() }} não lidos</small>
                        @endif
                    </div>
                    <i class="fas fa-users fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Ativos</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Testimonial::where('is_active', true)->count() }}</h2>
                    </div>
                    <i class="fas fa-check-circle fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Visão Geral</h5>
    </div>
    <div class="card-body">
        <p>Bem-vindo ao painel administrativo da Mata Verde!</p>
        <p>Aqui você pode gerenciar:</p>
        <ul>
            <li>Orçamentos recebidos</li>
            <li>Candidaturas de representantes</li>
            <li>Produtos</li>
            <li>Depoimentos de clientes</li>
            <li>Conteúdo do site</li>
            <li>Configurações gerais</li>
        </ul>
        <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('admin.quotations.index') }}" class="btn text-white" style="background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%);">
                <i class="fas fa-file-invoice me-2"></i>Ver Orçamentos
                @if(\App\Quotation::where('is_read', false)->count() > 0)
                    <span class="badge bg-danger">{{ \App\Quotation::where('is_read', false)->count() }}</span>
                @endif
            </a>
            <a href="{{ route('admin.representants.index') }}" class="btn text-white" style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);">
                <i class="fas fa-users me-2"></i>Ver Representantes
                @if(\App\Representant::where('is_read', false)->count() > 0)
                    <span class="badge bg-danger">{{ \App\Representant::where('is_read', false)->count() }}</span>
                @endif
            </a>
            <a href="{{ route('admin.products.index') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                <i class="fas fa-box me-2"></i>Gerenciar Produtos
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                <i class="fas fa-comments me-2"></i>Gerenciar Depoimentos
            </a>
        </div>
    </div>
</div>
@endsection

