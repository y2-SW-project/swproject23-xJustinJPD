<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\Player;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // authenticates that this team is owned by the user using the software
        
                $teams = Team::all();
                $players = Player::all();

                $user = Auth::user();
                $user->authorizeRoles('user');
        
                // $teams = team::paginate(5);
        
                // $teams = team::with('manufacturer')->get();
        
                // returns the index.blade.php view with the teams variables included in the transaction
        
                return view ('users.teams.index')->with('teams', $teams)->with('player', $players);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {   
        $players= Player::all();
        $user = Auth::user();
        $user->authorizeRoles('user');

        if(!Auth::id()) {
            return abort(403);
        }

        return view ('users.teams.show')->with('team',$team)->with('players', $players);
    }

}
