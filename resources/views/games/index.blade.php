@extends('layouts.app')

@section('content')
    <div class="section-table-games">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-games">Lista Giochi</h1>
                    <div class="create-game">
                        <a href="{{ route('games.create') }}"
                            class="btn btn-info">
                            Inserisci un nuovo gioco
                        </a>
                    </div>
                    <table class="table-games">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Anno di uscita</th>
                                <th scope="col">Produttore</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Dettagli</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($games as $game)
                                <tr>
                                    <td>
                                        {{ $game->id }}
                                    </td>
                                    <td>
                                        {{ $game->name }}
                                    </td>
                                    <td>
                                        {{ $game->exit_year }}
                                    </td>
                                    <td>
                                        {{ $game->productor }}
                                    </td>
                                    <td>
                                        {{ $game->price . '$' }}
                                    </td>
                                    <td>
                                       <a href="{{ route('games.show', ['game' => $game->id]) }}"
                                           class="btn btn-info">
                                           Dettagli
                                       </a>
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
