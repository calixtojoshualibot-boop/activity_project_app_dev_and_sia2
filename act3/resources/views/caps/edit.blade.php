@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-warning">
            <div class="card-header bg-warning text-dark fw-bold">
                EDIT CAP: {{ $cap->name }}
            </div>
            <div class="card-body bg-dark text-white">
                <form action="{{ route('caps.update', $cap->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="mb-3">
                        <label class="form-label">Cap Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $cap->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" value="{{ old('brand', $cap->brand) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Era</label>
                        <input type="text" name="era" class="form-control" value="{{ old('era', $cap->era) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Condition</label>
                        <input type="text" name="condition" class="form-control" value="{{ old('condition', $cap->condition) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="text" name="image_url" class="form-control" value="{{ old('image_url', $cap->image_url) }}">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('caps.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Update Entry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection