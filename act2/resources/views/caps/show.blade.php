@extends('layouts.app')

@section('content')
    <div class="detail-view">
        <div style="flex: 1;">
            <img src="{{ $cap['image'] }}" style="width: 100%; border-radius: 10px; border: 5px solid white;">
        </div>
        <div style="flex: 1;">
            <h2 style="font-size: 2.5em; margin-top: 0;">{{ $cap['name'] }}</h2>
            <p><strong>OFFICIAL BRAND:</strong> {{ $cap['brand'] }}</p>
            <p><strong>ERA:</strong> {{ $cap['era'] }}</p>
            <p><strong>CONDITION:</strong> <span style="color: #00ff00;">{{ $cap['condition'] }}</span></p>
            <hr>
            <p style="font-family: 'Georgia', serif; font-style: italic; line-height: 1.6;">
                This authentic vintage NBA cap represents a historic era in basketball history. 
                Sourced from the vault, it features original embroidery and material specific to the {{ $cap['era'] }}.
            </p>
            <a href="{{ url('/') }}" class="btn" style="background: #444;">← RETURN TO CATALOG</a>
        </div>
    </div>
@endsection