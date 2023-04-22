<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use App\Models\Fixture;


class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fixtures = Fixture::with('teams')->get();

        $user = Auth::user();
        $user->authorizeRoles('user');

        // returns the index.blade.php view with the teams variables included in the transaction

        return view ('users.fixtures.index', compact('fixtures'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixture $fixture)
    {
        $user = Auth::user();
        $user->authorizeRoles('user');
        $teams = Team::all();


        return view ('users.fixtures.show')->with('fixture', $fixture)->with('teams', $teams);
    }

    public function checkFixtureTeams($id)
    {
        $fixture = Fixture::find($id);
        $teams = $fixture->teams;

        dd($teams);
    }
}
