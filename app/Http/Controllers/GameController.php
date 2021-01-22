<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
          'games' => game::all()
      ];
      return view('games.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_game = new game();
        // $new_dress->name = $data['name'];
        // $new_dress->description = $data['description'];
        // $new_dress->price = $data['price'];
        // $new_dress->season = $data['season'];
        // $new_dress->size = $data['size'];
        // $new_dress->color = $data['color'];
        $new_game->fill($data);
        $new_game->save();

        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {

        if ($game) {
            $data = [
              'game' => $game
          ];
           return view('games.show', $data);
        }
        else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
