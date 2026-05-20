@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-lg border-0">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ $cap->image_url ?? 'https://via.placeholder.com/400x500?text=NBA+Vault' }}" 
                         class="img-fluid rounded-start h-100" 
                         style="object-fit: cover;" 
                         alt="{{ $cap->name }}">
                </div>
                
                <div class="col-md-7">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <h2 class="fw-bold text-uppercase" style="color: var(--nba-red);">{{ $cap->name }}</h2>
                            <span class="badge bg-secondary">ID: #{{ str_pad($cap->id, 4, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <hr>
                        
                        <div class="mb-4">
                            <p class="mb-1 text-muted small uppercase fw-bold">Manufacturer</p>
                            <h5 class="fw-bold">{{ $cap->brand }}</h5>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <p class="mb-1 text-muted small uppercase fw-bold">Release Era</p>
                                <h5>{{ $cap->era }}</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-1 text-muted small uppercase fw-bold">Vault Condition</p>
                                <h5 class="text-success">{{ $cap->condition }}</h5>
                            </div>
                        </div>

                        <p class="text-secondary italic">
                            Authenticity Guaranteed. This piece is a verified part of the Vintage NBA collection.
                        </p>

                        <div class="mt-5 d-flex gap-2">
                            <a href="{{ route('caps.index') }}" class="btn btn-outline-light px-4">← Back to Vault</a>
                            <a href="{{ route('caps.edit', $cap->id) }}" class="btn btn-warning px-4">Edit Entry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection