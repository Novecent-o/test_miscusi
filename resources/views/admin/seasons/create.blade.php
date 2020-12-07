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
                      
                        <div>
                          <input type="submit" name="" value="Salva">
                        </div>
                      
                      </form>

                </div>
            </div>
        </div>
    </div>
@endsection