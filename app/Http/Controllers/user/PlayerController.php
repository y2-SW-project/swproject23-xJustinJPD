<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teams = Team::all();
        $players = Player::all();

        $user = Auth::user();
        $user->authorizeRoles('user');

        return view ('users.teams.index')->with('teams', $teams)->with('player', $players);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {


        $user = Auth::user();
        $user->authorizeRoles('user');
        $teams = Team::all();


        return view ('users.players.show')->with('player', $player)->with('teams', $teams);
    }

}
