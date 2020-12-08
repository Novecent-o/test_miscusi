@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h2>{{$season->name}}</h2>
                </div>
            </div>
            <div class="col-12 py-5">
                @foreach ($season->dishes as $dish)
                    <li class="card m-3 px-3 bg-danger">
                        <a href="{{ (Auth::check()) ? route('admin.dishes.show', $dish->id) : route('dishes.show', $dish->id) }}">
                            {{$dish->name}}
                        </a>
                    </li>
                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-around">
                <button type="button" class="btn btn-secondary my-3">
                    <a href="{{ (Auth::check()) ? route('admin.seasons.index') : route('seasons.index') }}">Indietro</a>
                </button>
                <button type="button" class="btn btn-secondary my-3">
                    <a href="{{ route('admin.seasons.create') }}">Aggiungi</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection