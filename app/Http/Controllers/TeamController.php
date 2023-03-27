<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                // authenticates that this team is owned by the user using the software

        

                $teams = Team::where('user_id',Auth::id())->latest('updated_at')->paginate(5);
                $teams->each(function($team){
        
                });
        
                $user = Auth::user();
        
                // $teams = team::paginate(5);
        
                // $teams = team::with('manufacturer')->get();
        
                // returns the index.blade.php view with the teams variables included in the transaction
        
                return view ('teams.index')->with('teams', $teams);
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

        return view ('teams.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                        // validates each field used by the team object, defining parameters for validation is on the right side

                        $request->validate([
                            'name' => 'required|max:120',
                            'address' => 'required|max:400',
        
                        ]);
        
                        // creates the team variable as a version of the team object and sets the parameters for this object
                
                        $team = new Team([
                            'name' => $request->name,
                            'address'=> $request->address,
        
                        ]);
                
                        // saves the team
                        $team->save();
                
                        $user = Auth::user();
                
                        
                
                        // returns the index.blade.php view
                        return to_route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $user = Auth::user();

        if(!Auth::id()) {
            return abort(403);
        }

        return view ('teams.show')->with('team',$team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $user = Auth::user();

        return view ('teams.edit')->with('team', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
                        // validating each field
                        $request->validate([
                            'name' => 'required|max:120',
                            'address' => 'required|max:400',
                        ]);
                
                        // defining that inputting each of these values will update its specified value in the database/object
                        $team->update([
                            'name'=> $request -> name,
                            'address' => $request -> address,
                        
                        ]);
                
                        $user = Auth::user();
                
                        //  giving us the show.blade.php view along with a success tag saying that the update was completed
                        return to_route('teams.show', $team)->with('success', 'Team updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
                        // deleting the team object specified
                        $team->delete();
        
                        $user = Auth::user();
                
                        // returning the index view with a successful delete messge
                        return to_route('teams.index')->with('success', 'team deleted successfully.');
    }
}
