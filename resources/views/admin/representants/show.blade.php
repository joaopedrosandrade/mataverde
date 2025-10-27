@extends('admin.layout')

@section('title', 'Detalhes da Candidatura')

@section('content')
<div class="card mb-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-user me-2"></i>Detalhes da Candidatura</h5>
        <div>
            @if($representant->is_read)
                <span class="badge bg-success">Lida</span>
            @else
                <span class="badge bg-warning">Nova</span>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-user me-2"></i>Nome Completo:</strong>
                <p class="mt-1">{{ $representant->nome }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-id-card me-2"></i>CPF:</strong>
                <p class="mt-1">{{ $representant->cpf }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-phone me-2"></i>Telefone:</strong>
                <p class="mt-1">{{ $representant->telefone }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-envelope me-2"></i>E-mail:</strong>
                <p class="mt-1">{{ $representant->email }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-map-marker-alt me-2"></i>Cidade:</strong>
                <p class="mt-1">{{ $representant->cidade }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-map me-2"></i>Estado:</strong>
                <p class="mt-1">{{ $representant->estado }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-award me-2"></i>Experiência:</strong>
                <p class="mt-1">{{ ucfirst($representant->experiencia) }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-clock me-2"></i>Disponibilidade:</strong>
                <p class="mt-1">
                    @if($representant->disponibilidade == 'integral')
                        Tempo Integral
                    @elseif($representant->disponibilidade == 'parcial')
                        Tempo Parcial
                    @elseif($representant->disponibilidade == 'fins_semana')
                        Fins de Semana
                    @else
                        {{ ucfirst($representant->disponibilidade) }}
                    @endif
                </p>
            </div>
            @if($representant->motivacao)
            <div class="col-12 mb-3">
                <strong><i class="fas fa-comment me-2"></i>Motivação:</strong>
                <p class="mt-1">{{ $representant->motivacao }}</p>
            </div>
            @endif
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-calendar me-2"></i>Data da Candidatura:</strong>
                <p class="mt-1">{{ $representant->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <a href="{{ route('admin.representants.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Voltar para Lista
    </a>
    <div>
        <a href="mailto:{{ $representant->email }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-envelope me-2"></i>Responder por E-mail
        </a>
        <a href="tel:{{ $representant->telefone }}" class="btn btn-info">
            <i class="fas fa-phone me-2"></i>Ligar
        </a>
        <form action="{{ route('admin.representants.destroy', $representant->id) }}" 
              method="POST" class="d-inline"
              onsubmit="return confirm('Tem certeza que deseja excluir esta candidatura?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash me-2"></i>Excluir
            </button>
        </form>
    </div>
</div>
@endsection

