@extends('layouts.app')

@section('content')
    <div class="grid">
        @foreach($caps as $cap)
            <div class="card">
                <img src="{{ $cap['image'] }}" class="cap-img" alt="NBA Cap">
                <div class="card-body">
                    <h3>{{ $cap['name'] }}</h3>
                    <p style="color: #aaa;">{{ $cap['brand'] }}</p>
                    <a href="{{ url('/' . $cap['id']) }}" class="btn">VIEW DETAILS</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection