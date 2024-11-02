    {{-- collego il file home.scss per l'estetica di home.blade.php --}}
    @vite('resources/scss/home.scss')

    {{-- nascondo il partial header.blade.php --}}
    @php
        $hideHeader = true;
    @endphp
    @extends('layouts.app')

    @section('page-title', 'Pokemon')

    @section('main-content')

        <body>
            <div class="container-fluid py-5">
                <h2 class="text-center mb-4">Elenco Pokemon</h2>

                {{-- Bottone che rimanda alla vista CREATE --}}
                <button class="btn btn-primary" onclick="window.location.href='{{ route('pages.create') }}'">Aggiungi un
                    Pokemon</button>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Specie</th>
                            <th>Abilità</th>
                            <th>Elemento</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pokemon as $pokemonItem)
                            <tr class="table-secondary">
                                <td>{{ $pokemonItem->nome }}</td>
                                <td>{{ $pokemonItem->specie }}</td>
                                <td>{{ $pokemonItem->abilita }}</td>
                                <td>{{ $pokemonItem->elemento }}</td>
                                {{-- SHOW --}}
                                <td><a href="{{ route('pages.show', $pokemonItem['id']) }}" class="btn btn-primary">Mostra</a>
                                    {{-- EDIT --}}
                                    <a href="{{ route('pages.edit', $pokemonItem['id']) }}"
                                        class="btn btn-warning mx-2">Modifica</a>
                                    {{-- DELETE --}}
                                    <form class="d-inline" action="{{ route('pages.delete', $pokemonItem['id']) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type='submit' class="btn btn-danger">Elimina</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </body>
    @endsection
