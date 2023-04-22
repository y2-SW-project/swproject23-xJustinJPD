<?php

namespace App\Http\Controllers\admin;

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
        $user->authorizeRoles('admin');

        // returns the index.blade.php view with the teams variables included in the transaction

        return view ('admin.fixtures.index', compact('fixtures'));
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
                $user->authorizeRoles('admin');
        
                return view ('admin.fixtures.create')->with('teams', $teams);
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
                        $user->authorizeRoles('admin');
                
                        $fixture->teams()->attach($request->teams);
                
                        // returns the index.blade.php view
                        return to_route('admin.fixtures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixture $fixture)
    {
        $user = Auth::user();
        $teams = Team::all();
        $user->authorizeRoles('admin');


        return view ('admin.fixtures.show')->with('fixture', $fixture)->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fixture $fixture)
    {
        $user = Auth::user();
        $teams = Team::all();
        $user->authorizeRoles('admin');

        return view ('admin.fixtures.edit')->with('fixture', $fixture)->with('teams', $teams);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fixture $fixture)
    {
                                // validating each field
                                $request->validate([
                                    'date' => 'required|max:120',
                                    'location' => 'required|max:400',
                                ]);
                        
                                // defining that inputting each of these values will update its specified value in the database/object
                                $fixture->update([
                                    'date' => $request->date,
                                    'location'=> $request->location,
                                
                                ]);
                        
                                $user = Auth::user();
                                $user->authorizeRoles('admin');

                                $fixture->teams()->attach($request->teams);
                        
                                //  giving us the show.blade.php view along with a success tag saying that the update was completed
                                return to_route('admin.fixtures.show', $fixture)->with('success', 'fixture updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fixture $fixture)
    {

        // deleting the player object specified
        $fixture->teams()->detach();
        $fixture->delete();

        $user = Auth::user();
        $user->authorizeRoles('admin');

        // returning the index view with a successful delete messge
        return to_route('admin.fixtures.index')->with('success', 'fixture deleted successfully.');
    }

    public function checkFixtureTeams($id)
    {
        $fixture = Fixture::find($id);
        $teams = $fixture->teams;

        dd($teams);
    }
}
