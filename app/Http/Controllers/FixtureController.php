<?php

namespace App\Http\Controllers;

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

        // returns the index.blade.php view with the teams variables included in the transaction

        return view ('fixtures.index', compact('fixtures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                // returns the create.blade.php view
                $user = Auth::user();
                $teams = Team::all();
        
                return view ('fixtures.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                        // validates each field used by the fixture object, defining parameters for validation is on the right side

                        $request->validate([
                            'date' => 'required|max:120',
                            'location' => 'required|max:400',
        
                        ]);
        
                        // creates the fixture variable as a version of the fixture object and sets the parameters for this object
                
                        $fixture = new Fixture([
                            'date' => $request->date,
                            'location'=> $request->location,
                        ]);
                
                        // saves the fixture
                        $fixture->save();
                
                        $user = Auth::user();
                
                        
                
                        // returns the index.blade.php view
                        return to_route('fixtures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixture $fixture)
    {
        $user = Auth::user();
        $teams = Team::all();


        return view ('fixtures.show')->with('fixture', $fixture)->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkFixtureTeams($id)
    {
        $fixture = Fixture::find($id);
        $teams = $fixture->teams;

        dd($teams);
    }
}
