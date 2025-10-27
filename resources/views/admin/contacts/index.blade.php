@extends('admin.layout')

@section('title', 'Mensagens de Contato')

@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        <div class="alert alert-info d-flex justify-content-between align-items-center">
            <span><i class="fas fa-info-circle me-2"></i>Total de mensagens: {{ $contacts->count() }}</span>
            @if($unreadCount > 0)
            <span class="badge bg-danger"><i class="fas fa-bell me-1"></i>{{ $unreadCount }} não lidas</span>
            @else
            <span class="badge bg-success">Todas lidas</span>
            @endif
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="mb-0"><i class="fas fa-envelope me-2"></i>Contatos</h5>
    </div>
    <div class="card-body">
        @if($contacts->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead class="table-light d-none d-md-table-header-group">
                    <tr>
                        <th>Nome</th>
                        <th>Contato</th>
                        <th>Assunto</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr class="{{ !$contact->is_read ? 'table-warning' : '' }}">
                        <td>
                            <strong>{{ $contact->nome }}</strong>
                        </td>
                        <td>
                            <div><i class="fas fa-phone me-1"></i>{{ $contact->telefone }}</div>
                            <div><i class="fas fa-envelope me-1"></i>{{ $contact->email }}</div>
                        </td>
                        <td>{{ ucfirst($contact->assunto) }}</td>
                        <td>
                            @if($contact->is_read)
                                <span class="badge bg-success">Lido</span>
                            @else
                                <span class="badge bg-warning">Novo</span>
                            @endif
                        </td>
                        <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" 
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este contato?');">
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
            <p class="text-muted">Nenhum contato recebido ainda.</p>
        </div>
        @endif
    </div>
</div>
@endsection

