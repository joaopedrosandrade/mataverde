@extends('admin.layout')

@section('title', 'Depoimentos')

@section('content')
<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-comments me-2"></i>Gerenciar Depoimentos</h5>
        <a href="{{ route('admin.testimonials.create') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-plus me-2"></i>Novo Depoimento
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead class="table-light d-none d-md-table-header-group">
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Status</th>
                        <th>Ordem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $testimonial)
                    <tr>
                        <td>
                            @if($testimonial->photo)
                                <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }}" 
                                     style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            @else
                                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                            @endif
                        </td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->position ?? '-' }}</td>
                        <td>
                            @if($testimonial->is_active)
                                <span class="badge bg-success">Ativo</span>
                            @else
                                <span class="badge bg-secondary">Inativo</span>
                            @endif
                        </td>
                        <td>{{ $testimonial->order }}</td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" 
                               class="btn btn-sm text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" 
                                  method="POST" class="d-inline" 
                                  onsubmit="return confirm('Tem certeza que deseja excluir este depoimento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            <p class="text-muted mb-0">Nenhum depoimento encontrado.</p>
                            <a href="{{ route('admin.testimonials.create') }}" class="btn mt-3 text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                                <i class="fas fa-plus me-2"></i>Criar Primeiro Depoimento
                            </a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

