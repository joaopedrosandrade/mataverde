@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

@php
    $unreadQuotations = \App\Quotation::where('is_read', false)->count();
    $unreadRepresentants = \App\Representant::where('is_read', false)->count();
@endphp

@if($unreadQuotations > 0 || $unreadRepresentants > 0)
<div class="row g-3">
    @if($unreadQuotations > 0)
    <div class="col-12 {{ $unreadRepresentants > 0 ? 'col-md-6' : '' }} mb-3">
        <div class="card" style="background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Orçamentos</h6>
                        <h2 class="mt-2 mb-0">{{ $unreadQuotations }}</h2>
                        <small class="badge bg-danger">Não lidos</small>
                    </div>
                    <i class="fas fa-file-invoice fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    @if($unreadRepresentants > 0)
    <div class="col-12 {{ $unreadQuotations > 0 ? 'col-md-6' : '' }} mb-3">
        <div class="card" style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); color: white;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Representantes</h6>
                        <h2 class="mt-2 mb-0">{{ $unreadRepresentants }}</h2>
                        <small class="badge bg-danger">Não lidos</small>
                    </div>
                    <i class="fas fa-users fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@if($unreadQuotations > 0 || $unreadRepresentants > 0)
<div class="mb-4"></div>
@endif

@endif

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
        <div class="d-flex gap-2 flex-wrap flex-column flex-md-row">
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

