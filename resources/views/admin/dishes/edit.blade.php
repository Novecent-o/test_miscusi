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
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                  <form action="{{ route('admin.dishes.update', $dish->id) }}" enctype="multipart/form-data" method="post">
                      @csrf
                      @method('PUT')
                    
                      <div>
                        <label>Nome piatto: </label>
                        <input type="text" name="name" value="{{ old('name') ? old('name') : $dish->name}}">
                      </div>
                    
                      <div>
                        <label>Menù ID: </label>
                        <input type="number" name="season_id" value="{{ old('season_id') ? old('season_id') : $dish->season_id}}">
                      </div>

                      <div>
                        <label>Tipo: </label>
                        <input type="text" name="type" value="{{ old('type') ? old('type') : $dish->type}}">
                      </div>
                    
                      <div>
                        <label>Prezzo: </label>
                        <input type="number" name="price" value="{{ old('price') ? old('price') : $dish->price}}">
                      </div>
                    
                      <div>
                        <label>Preparazione: </label>
                        <textarea name="method" rows="8" cols="80">{{ old('method') ? old('method') : $dish->method}}</textarea>
                      </div>
                    
                      <div>
                        <label>Immagine: </label>
                        <input type="file" name="image" accept="image/*" value="{{ old('image') ? old('image') : $dish->image}}}">
                      </div>
                    
                      <div>
                        <input type="submit" name="" value="Modifica">
                      </div>
                    
                    </form>

              </div>
            <div class="col-12 d-flex justify-content-around">
                <button type="button" class="btn btn-secondary">
                    <a href="{{ route('admin.dishes.show', $dish->id) }}">Indietro</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection