<?php

namespace App\Http\Controllers\admin;

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
        $user->authorizeRoles('admin');

        return view ('admin.teams.index')->with('teams', $teams)->with('player', $players);
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
        $user->authorizeRoles('admin');

        $players = Player::all();
        $teams = Team::all();

        return view ('admin.players.create')->with('players', $players)->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validates each field used by the player object, defining parameters for validation is on the right side

        $request->validate([
            'name' => 'required|max:120',
            'description' => 'required|max:120',
            'picture' => 'file|image',
            'team_id'=> 'required'
        ]);

        // stores the player image file inside the $picture variable

        $picture = $request->file('picture');
        $extension = $picture->getClientOriginalExtension();

        // creates a filename for the image that is unique based on the name input field and the date of creation
        $filename = date('Y-m-d-His') . '_' . $request->input('name') . '.' . $extension;

        // stores the player image inside the public/images folder to be accessed later
        $path = $picture->storeAs('public/images', $filename);



        // creates the player variable as a version of the player object and sets the parameters for this object

        $player = new Player([
            'name' => $request->name,
            'description'=> $request->description,
            'picture'=> $filename,
            'team_id'=> $request->team_id,
        ]);

        // saves the player
        $player->save();

        $user = Auth::user();
        $user->authorizeRoles('admin');

        

        // returns the index.blade.php view
        return to_route('admin.teams.index');
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
        $user->authorizeRoles('admin');
        $teams = Team::all();


        return view ('admin.players.show')->with('player', $player)->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = Team::all();
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view ('admin.players.edit')->with('player', $player)->with('teams', $teams);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {

        // validating each field
        $request->validate([
            'name' => 'required|max:120',
            'description' => 'required|max:120',
            'team_id'=> 'required'
        ]);

        // defining that inputting each of these values will update its specified value in the database/object
        $player->update([
            'name' => $request->name,
            'description'=> $request->description,
            'team_id'=> $request->team_id,
        ]);

        $user = Auth::user();
        $user->authorizeRoles('admin');

        //  giving us the show.blade.php view along with a success tag saying that the update was completed
        return to_route('admin.players.show', $player)->with('success', 'player updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {

        // validation of user and playe

        // deleting the player object specified
        $player->delete();

        $user = Auth::user();
        $user->authorizeRoles('admin');

        // returning the index view with a successful delete messge
        return to_route('admin.players.index')->with('success', 'player deleted successfully.');
    }
}
