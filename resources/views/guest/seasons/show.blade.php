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
                                <a href="">
                                    {{$dish->name}}
                                </a>
                            </li>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection