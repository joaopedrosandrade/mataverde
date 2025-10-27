@extends('admin.layout')

@section('title', 'Novo Depoimento')

@section('content')
<div class="card">
    <div class="card-header bg-white">
        <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Novo Depoimento</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nome *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="position" class="form-label">Cargo</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" 
                           id="position" name="position" value="{{ old('position') }}">
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Depoimento *</label>
                <textarea class="form-control @error('content') is-invalid @enderror" 
                          id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="photo" class="form-label">Foto</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" 
                           id="photo" name="photo" accept="image/*">
                    <small class="text-muted">Formatos aceitos: JPG, PNG, GIF. Tamanho máximo: 2MB</small>
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Ordem de Exibição</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" 
                           id="order" name="order" value="{{ old('order', 0) }}" min="0">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" 
                           {{ old('is_active') ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">
                        Depoimento Ativo
                    </label>
                </div>
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Cancelar
                </a>
                <button type="submit" class="btn text-white" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                    <i class="fas fa-save me-2"></i>Salvar Depoimento
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

