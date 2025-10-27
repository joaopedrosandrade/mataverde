@extends('admin.layout')

@section('title', 'Produtos')

@section('content')
<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-box me-2"></i>Gerenciar Produtos</h5>
        <a href="{{ route('admin.products.create') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <i class="fas fa-plus me-2"></i>Novo Produto
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description ?? 'Sem descrição', 100) }}</p>
                        <div class="mb-3">
                            @if($product->is_active)
                                <span class="badge bg-success">Ativo</span>
                            @else
                                <span class="badge bg-secondary">Inativo</span>
                            @endif
                            <span class="badge bg-info ms-2">Ordem: {{ $product->order }}</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="btn-group w-100">
                            <a href="{{ route('admin.products.edit', $product->id) }}" 
                               class="btn btn-sm text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-box-open fa-4x text-muted mb-3"></i>
                    <p class="text-muted mb-4">Nenhum produto encontrado.</p>
                    <a href="{{ route('admin.products.create') }}" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                        <i class="fas fa-plus me-2"></i>Criar Primeiro Produto
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

