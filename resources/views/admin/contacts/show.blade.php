@extends('admin.layout')

@section('title', 'Detalhes da Mensagem')

@section('content')
<div class="card mb-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-envelope me-2"></i>Detalhes do Contato</h5>
        <div>
            @if($contact->is_read)
                <span class="badge bg-success">Lido</span>
            @else
                <span class="badge bg-warning">Novo</span>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-user me-2"></i>Nome:</strong>
                <p class="mt-1">{{ $contact->nome }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-map-marker-alt me-2"></i>Cidade:</strong>
                <p class="mt-1">{{ $contact->cidade ?? '-' }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-phone me-2"></i>Telefone:</strong>
                <p class="mt-1">{{ $contact->telefone }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-envelope me-2"></i>E-mail:</strong>
                <p class="mt-1">{{ $contact->email }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-tag me-2"></i>Assunto:</strong>
                <p class="mt-1">{{ ucfirst($contact->assunto) }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-calendar me-2"></i>Data do Contato:</strong>
                <p class="mt-1">{{ $contact->created_at->format('d/m/Y H:i') }}</p>
            </div>
            <div class="col-12 mb-3">
                <strong><i class="fas fa-comment me-2"></i>Mensagem:</strong>
                <p class="mt-1">{{ $contact->mensagem }}</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Voltar para Lista
    </a>
    <div>
        <a href="mailto:{{ $contact->email }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-envelope me-2"></i>Responder por E-mail
        </a>
        <a href="tel:{{ $contact->telefone }}" class="btn btn-info">
            <i class="fas fa-phone me-2"></i>Ligar
        </a>
        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" 
              method="POST" class="d-inline"
              onsubmit="return confirm('Tem certeza que deseja excluir este contato?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash me-2"></i>Excluir
            </button>
        </form>
    </div>
</div>
@endsection

