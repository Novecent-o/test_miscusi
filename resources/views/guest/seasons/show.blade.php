@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h2>{{$season->name}}</h2>
                    @foreach ($season->dishes as $dish)
                        <li class="card px-3 bg-danger d-inline">
                            <a href="{{ route('dishes.show', $dish->id) }}">
                                {{$dish->name}}
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="col-12 d-flex justify-content-around">
                <button type="button" class="btn btn-secondary">
                    <a href="{{ route('seasons.index') }}">Indietro</a>
                </button>
                @if (!is_null($user))
                    <button type="button" class="btn btn-secondary">
                        <a href="{{ route('dishes.create') }}">Aggiungi</a>
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection