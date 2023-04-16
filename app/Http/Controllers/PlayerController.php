<?php

namespace App\Http\Controllers;

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

        // authenticates that this car is owned by the user using the software

        $user = Auth::user();

        // returns the index.blade.php view with the players variables included in the transaction

        return view ('players.index');
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

        $players = Player::all();

        return view ('players.create')->with('player', $players);
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
            'make' => 'required|max:120',
            'model' => 'required|max:120',
            'colour' => 'required|max:120',
            'desc' => 'required|max:500',
            'player_image' => 'file|image',
            'manufacturer_id'=> 'required'
        ]);

        // stores the player image file inside the $player_image variable

        $player_image = $request->file('player_image');
        $extension = $player_image->getClientOriginalExtension();

        // creates a filename for the image that is unique based on the make input field and the date of creation
        $filename = date('Y-m-d-His') . '_' . $request->input('make') . '.' . $extension;

        // stores the player image inside the public/images folder to be accessed later
        $path = $player_image->storeAs('public/images', $filename);



        // creates the player variable as a version of the player object and sets the parameters for this object

        $player = new Player([
            'user_id' => Auth::id(),
            'name' => $request->make,
            'model'=> $request->model,
            'colour'=> $request->colour,
            'player_image' => $filename,
            'desc'=> $request->desc,
            'team_id'=> $request->team_id,
        ]);

        // saves the player
        $player->save();

        $user = Auth::user();

        

        // returns the index.blade.php view
        return to_route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // verifies the player is of the user and then returns the show.blde.php view bringing the player object clicked on by the user
        $player = player::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $user = Auth::user();
        $teams = Team::all();


        return view ('players.show')->with('player', $player)->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // same thing as show but this time the edit.blade.php view
        $player = Player::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $user = Auth::user();

        return view ('players.edit')->with('player', $player);
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
        // verification of user and player
        $player = Player::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // validating each field
        $request->validate([
            'make' => 'required|max:120',
            'model' => 'required|max:120',
            'colour' => 'required|max:120',
            'desc' => 'required|max:500',
        ]);

        // defining that inputting each of these values will update its specified value in the database/object
        $player->update([
            'name'=> $request -> make,
            'model' => $request -> model,
            'colour' => $request -> colour,
            'desc' => $request -> desc,
        ]);

        $user = Auth::user();

        //  giving us the show.blade.php view along with a success tag saying that the update was completed
        return to_route('players.show', $player)->with('success', 'player updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // validation of user and player
        $player = Player::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // deleting the player object specified
        $player->delete();

        $user = Auth::user();

        // returning the index view with a successful delete messge
        return to_route('players.index')->with('success', 'player deleted successfully.');
    }
}
