@extends('layouts.app')
@section('content')
    <div class="section-create-game">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="">Inserisci un nuovo gioco</h1>
                    <form method="POST" action="{{ route('games.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nome titolo</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Anno di uscita</label>
                            <input type="text" name="exit_year" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Produttore</label>
                            <input type="text" name="productor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Inserisci un nuovo gioco</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
