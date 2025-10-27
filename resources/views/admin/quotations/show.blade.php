@extends('admin.layout')

@section('title', 'Detalhes do Orçamento')

@section('content')
<div class="card mb-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-file-invoice me-2"></i>Detalhes do Orçamento</h5>
        <div>
            @if($quotation->is_read)
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
                <p class="mt-1">{{ $quotation->nome }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-building me-2"></i>Empresa:</strong>
                <p class="mt-1">{{ $quotation->empresa ?? '-' }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-phone me-2"></i>Telefone:</strong>
                <p class="mt-1">{{ $quotation->telefone }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-envelope me-2"></i>E-mail:</strong>
                <p class="mt-1">{{ $quotation->email }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-box me-2"></i>Tipo de Produto:</strong>
                <p class="mt-1">{{ $quotation->tipo_produto }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-hashtag me-2"></i>Quantidade:</strong>
                <p class="mt-1">{{ $quotation->quantidade ?? '-' }}</p>
            </div>
            @if($quotation->mensagem)
            <div class="col-12 mb-3">
                <strong><i class="fas fa-comment me-2"></i>Mensagem:</strong>
                <p class="mt-1">{{ $quotation->mensagem }}</p>
            </div>
            @endif
            <div class="col-md-6 mb-3">
                <strong><i class="fas fa-calendar me-2"></i>Data do Solicitação:</strong>
                <p class="mt-1">{{ $quotation->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <a href="{{ route('admin.quotations.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Voltar para Lista
    </a>
    <div>
        <a href="mailto:{{ $quotation->email }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-envelope me-2"></i>Responder por E-mail
        </a>
        <a href="tel:{{ $quotation->telefone }}" class="btn btn-info">
            <i class="fas fa-phone me-2"></i>Ligar
        </a>
        <form action="{{ route('admin.quotations.destroy', $quotation->id) }}" 
              method="POST" class="d-inline"
              onsubmit="return confirm('Tem certeza que deseja excluir este orçamento?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash me-2"></i>Excluir
            </button>
        </form>
    </div>
</div>
@endsection

