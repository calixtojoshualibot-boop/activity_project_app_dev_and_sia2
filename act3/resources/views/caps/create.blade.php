@extends('layouts.app')
@section('content')
<div class="card p-4 mx-auto" style="max-width: 500px;">
    <h3>Add Cap</h3>
    <form action="{{ route('caps.store') }}" method="POST">
        @csrf
        <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
        <div class="mb-3"><input type="text" name="brand" class="form-control" placeholder="Brand" required></div>
        <div class="mb-3"><input type="text" name="era" class="form-control" placeholder="Era" required></div>
        <div class="mb-3"><input type="text" name="condition" class="form-control" placeholder="Condition" required></div>
        <div class="mb-3"><input type="text" name="image_url" class="form-control" placeholder="Image URL"></div>
        <button type="submit" class="btn btn-nba w-100">Save</button>
    </form>
</div>
@endsection