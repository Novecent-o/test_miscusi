@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>{{$dish->season->name}}</h1>
                        <h3>{{$dish->name}}</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <ul>
                            <li>{{$dish->type}}</li>
                            <li>{{$dish->method}}</li>
                            <li>€{{$dish->price}}</li>
                            <li><img src="{{$dish->image}}" alt="{{$dish->name}}"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-around">
                    <button type="button" class="btn btn-secondary">
                        <a href="{{ route('seasons.show', $dish->season->id) }}">Indietro</a>
                    </button>
                    @if (!is_null($user))
                        <button type="button" class="btn btn-secondary">
                            <a href="{{ route('dishes.edit', $dish->id) }}">Modifica</a>
                        </button>
                        <form action="{{ route('dishes.destroy', $dish->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger left m-1" type="submit" value="Elimina">
                          </form>
                        {{-- <button type="button" class="btn btn-secondary">
                            <a href="{{ route('seasons.show', $dish->id) }}">Elimina</a>
                        </button> --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection