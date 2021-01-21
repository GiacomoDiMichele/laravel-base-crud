@extends('layouts.app')

@section('content')
    <div class="section-table-games">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-games">Lista Giochi</h1>
                    <table class="table-games">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Anno di uscita</th>
                                <th scope="col">Produttore</th>
                                <th scope="col">Prezzo</th>
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
                                        {{ $game->price }}
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
