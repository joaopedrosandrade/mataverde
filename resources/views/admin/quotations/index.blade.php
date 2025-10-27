@extends('admin.layout')

@section('title', 'Orçamentos')

@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        <div class="alert alert-info d-flex justify-content-between align-items-center">
            <span><i class="fas fa-info-circle me-2"></i>Total de orçamentos: {{ $quotations->count() }}</span>
            @if($unreadCount > 0)
            <span class="badge bg-danger"><i class="fas fa-bell me-1"></i>{{ $unreadCount }} não lidos</span>
            @else
            <span class="badge bg-success">Todos lidos</span>
            @endif
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="mb-0"><i class="fas fa-file-invoice me-2"></i>Solicitações de Orçamento</h5>
    </div>
    <div class="card-body">
        @if($quotations->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Empresa</th>
                        <th>Contato</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quotations as $quotation)
                    <tr class="{{ !$quotation->is_read ? 'table-warning' : '' }}">
                        <td>
                            <strong>{{ $quotation->nome }}</strong>
                        </td>
                        <td>{{ $quotation->empresa ?? '-' }}</td>
                        <td>
                            <div><i class="fas fa-phone me-1"></i>{{ $quotation->telefone }}</div>
                            <div><i class="fas fa-envelope me-1"></i>{{ $quotation->email }}</div>
                        </td>
                        <td>{{ $quotation->tipo_produto }}</td>
                        <td>{{ $quotation->quantidade ?? '-' }}</td>
                        <td>
                            @if($quotation->is_read)
                                <span class="badge bg-success">Lido</span>
                            @else
                                <span class="badge bg-warning">Novo</span>
                            @endif
                        </td>
                        <td>{{ $quotation->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.quotations.show', $quotation->id) }}" 
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            <form action="{{ route('admin.quotations.destroy', $quotation->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este orçamento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
            <p class="text-muted">Nenhum orçamento recebido ainda.</p>
        </div>
        @endif
    </div>
</div>
@endsection

