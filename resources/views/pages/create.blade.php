{{-- collego il file show.scss per l'estetica di show.blade.php --}}
@vite('resources/scss/show.scss')

@extends('layouts.app')
{{-- collego il file header.scss per l'estetica di header.blade.php --}}

@vite('resources/scss/header.scss')
@section('page-title', 'Pokemon Create')

@section('main-content')

    <body>
        <form class="container d-flex justify-content-center align-items-center flex-column py-5" method="POST"
            action="{{ route('pages.store') }}">
            @csrf

            <div class="mb-3">
                <label for="pokemon-nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="pokemon-nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="pokemon-specie" class="form-label">Specie</label>
                <input type="text" class="form-control" id="pokemon-specie" name="specie">
            </div>
            <div class="mb-3">
                <label for="pokemon-abilita" class="form-label">Abilità</label>
                <input type="text" class="form-control" id="pokemon-abilita" name="abilita">
            </div>
            <div class="mb-3">
                <label for="pokemon-elemento" class="form-label">Elemento</label>
                <input type="text" class="form-control" id="pokemon-elemento" name="elemento">
            </div>
            <div class="d-flex  justify-center align-items-center">
                <button type="submit" class="btn btn-primary mx-3">
                    Crea un nuovo pokemon
                </button>
                <button type="reset" class="btn btn-secondary">
                    Pulisci
                </button>
            </div>
        </form>
    </body>
@endsection
