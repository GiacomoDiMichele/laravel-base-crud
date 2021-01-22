@extends('layouts.app')
@section('content')
<div class="section-details-game">
    <div class="container">
        <div class="title-game-selected">
            <h2>{{ $game->name }}</h2>
        </div>
        <ul>
            <li>{{ $game->productor }}</li>
            <li>{{ $game->exit_year }}</li>
            <li>{{ $game->price . '$' }}</li>
        </ul>
    </div>
</div>
@endsection
