@extends('layouts.app')

@section('title')
    {{ $profume->name }}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="card col-8" style="width: 18rem;">
                <img src="{{ asset('storage/'.$profume->image) }}" class="card-img-top" alt="{{ $profume->name }} image">
                <div class="card-body">
                    <h5 class="card-title">{{ $profume->name }}</h5>
                    <h6><em>{{ $profume->brand }}</em></h6>
                    <p class="card-text">{{ $profume->description }}</p>
                    <p><strong>Quantity: {{ $profume->quantity }}</strong></p>
                    <p><strong>Price: {{ $profume->price }} £</strong></p>

                    @if ($profume->sponsored === 1)
                        <span class="badge text-bg-success">Sponsored</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
