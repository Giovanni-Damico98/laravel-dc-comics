{{-- collego il file show.scss per l'estetica di show.blade.php --}}
@vite('resources/scss/show.scss')

@extends('layouts.app')
{{-- collego il file header.scss per l'estetica di header.blade.php --}}

@vite('resources/scss/header.scss')
@section('page-title', 'Pokemon Show')

@section('main-content')

    <body>
        <div class="container d-flex justify-content-center align-content-center gap-5 flex-wrap py-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $pokemon['nome'] }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Specie: {{ $pokemon['specie'] }}</li>
                        <li class="list-group-item">Abilità: {{ $pokemon['abilita'] }}</li>
                        <li class="list-group-item">Elemento: {{ $pokemon['elemento'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
@endsection
