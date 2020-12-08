@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>ciao sono create</h1>
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
                  <form action="{{ route('admin.seasons.store') }}" enctype="multipart/form-data" method="post">
                      @csrf
                      @method('POST')
                    
                      <div>
                        <label>Nome piatto: </label>
                        <input type="text" name="name" value="{{ old('name') }}">
                      </div>
                    
                      <div>
                        <label>Menù ID: </label>
                        <input type="number" name="season_id" value="{{ old('season_id') }}">
                      </div>

                      <div>
                        <label>Tipo: </label>
                        <input type="text" name="type" value="{{ old('type') }}">
                      </div>
                    
                      <div>
                        <label>Prezzo: </label>
                        <input type="number" name="price" value="{{ old('price') }}">
                      </div>
                    
                      <div>
                        <label>Preparazione: </label>
                        <textarea name="method" rows="8" cols="80">{{ old('method') }}</textarea>
                      </div>
                    
                      <div>
                        <label>Immagine: </label>
                        <input type="file" name="image" accept="image/*" value="{{ old('image') }}">
                      </div>

                      @foreach ($ingredients as $ingredient)
                        <div class="col-4 col-lg-2 text-center">
                          <label title="{{ $ingredient->name }}">
                            {{ $ingredient->name }}
                            <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      @endforeach
                    
                      <div>
                        <input type="submit" name="" value="Salva">
                      </div>
                    
                    </form>
                </div>
                <div class="col-12 d-flex justify-content-around">
                  <button type="button" class="btn btn-secondary">
                      @foreach ($seasons as $season)
                        <a href="{{ route('admin.seasons.show', $season->id) }}">
                      @endforeach
                      Indietro
                    </a>
                  </button>
                </div>
            </div>
        </div>
    </div>
@endsection