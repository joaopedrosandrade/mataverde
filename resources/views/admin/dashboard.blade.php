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
                        <h6 class="mb-0">Depoimentos</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Testimonial::count() }}</h2>
                    </div>
                    <i class="fas fa-comments fa-2x opacity-75"></i>
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
    <div class="col-md-3 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Pendentes</h6>
                        <h2 class="mt-2 mb-0">{{ \App\Testimonial::where('is_active', false)->count() }}</h2>
                    </div>
                    <i class="fas fa-clock fa-2x opacity-75"></i>
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
            <li>Depoimentos de clientes</li>
            <li>Conteúdo do site</li>
            <li>Configurações gerais</li>
        </ul>
        <a href="{{ route('admin.testimonials.index') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-comments me-2"></i>Gerenciar Depoimentos
        </a>
    </div>
</div>
@endsection

