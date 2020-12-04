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

            <div class="card bg-danger">
                <ul class="d-flex pl-0 mb-0 justify-content-around">
                    @foreach ($seasons as $season)
                        <li class="d-inline">
                            <a href="{{ route('seasons.show', $season->id) }}">
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