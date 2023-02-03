@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bonjour {{ Auth::user()->name }}
                    {{ __('vous êtes bien connecté !') }}

                    @foreach ($category as $cate)
                        {{$cate->name}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
