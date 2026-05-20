@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-uppercase">Vault <span style="color: var(--nba-red);">Inventory</span></h2>
    <div class="text-secondary small">Showing {{ $caps->count() }} of {{ $caps->total() }} pieces</div>
</div>

<div class="row mb-4">
    <div class="col-md-6">
        <form action="{{ route('caps.index') }}" method="GET" class="d-flex shadow-sm">
            <input type="text" name="search" class="form-control" placeholder="Search by team or brand..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-nba ms-2 px-4">SEARCH</button>
            @if(request('search'))
                <a href="{{ route('caps.index') }}" class="btn btn-secondary ms-1">Reset</a>
            @endif
        </form>
    </div>
</div>

<div class="row">
    @forelse($caps as $cap)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="position-relative">
                    <img src="{{ $cap->image_url ?? 'https://via.placeholder.com/400x300?text=No+Image' }}" class="card-img-top" style="height: 220px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-dark opacity-75">{{ $cap->era }}</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-1">{{ $cap->name }}</h5>
                    <p class="text-secondary small mb-3">{{ $cap->brand }}</p>
                    
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('caps.show', $cap->id) }}" class="btn btn-sm btn-info px-3">View</a>
                        <a href="{{ route('caps.edit', $cap->id) }}" class="btn btn-sm btn-warning px-3">Edit</a>
                        
                        <form action="{{ route('caps.destroy', $cap->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirmDelete()">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <h4 class="text-secondary">No caps found in the vault matching that search.</h4>
            <a href="{{ route('caps.create') }}" class="btn btn-nba mt-3">Add First Cap</a>
        </div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $caps->appends(request()->query())->links('pagination::bootstrap-5') }}
</div>
@endsection