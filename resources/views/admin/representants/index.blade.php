@extends('admin.layout')

@section('title', 'Representantes')

@section('content')
<div class="row mb-3">
    <div class="col-md-12">
        <div class="alert alert-info d-flex justify-content-between align-items-center">
            <span><i class="fas fa-info-circle me-2"></i>Total de candidaturas: {{ $representants->count() }}</span>
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
        <h5 class="mb-0"><i class="fas fa-users me-2"></i>Candidaturas de Representantes</h5>
    </div>
    <div class="card-body">
        @if($representants->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead class="table-light d-none d-md-table-header-group">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Contato</th>
                        <th>Localização</th>
                        <th>Experiência</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($representants as $representant)
                    <tr class="{{ !$representant->is_read ? 'table-warning' : '' }}">
                        <td>
                            <strong>{{ $representant->nome }}</strong>
                        </td>
                        <td>{{ $representant->cpf }}</td>
                        <td>
                            <div><i class="fas fa-phone me-1"></i>{{ $representant->telefone }}</div>
                            <div><i class="fas fa-envelope me-1"></i>{{ $representant->email }}</div>
                        </td>
                        <td>{{ $representant->cidade }}/{{ $representant->estado }}</td>
                        <td>{{ ucfirst($representant->experiencia) }}</td>
                        <td>
                            @if($representant->is_read)
                                <span class="badge bg-success">Lida</span>
                            @else
                                <span class="badge bg-warning">Nova</span>
                            @endif
                        </td>
                        <td>{{ $representant->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.representants.show', $representant->id) }}" 
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            <form action="{{ route('admin.representants.destroy', $representant->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta candidatura?');">
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
            <p class="text-muted">Nenhuma candidatura recebida ainda.</p>
        </div>
        @endif
    </div>
</div>
@endsection

