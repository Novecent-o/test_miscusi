@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>Scegli il menù stagionale</h1>
                    </div>
                </div>

                <div class="col-12 py-5">
                    <ul class="d-flex pl-0 mb-0 justify-content-around">
                        @foreach ($seasons as $season)
                            <li class="card px-3 bg-danger d-inline">
                                <a href="{{ (Auth::check()) ? route('admin.seasons.show', $season->id) : route('seasons.show', $season->id) }}">
                                    {{$season->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection