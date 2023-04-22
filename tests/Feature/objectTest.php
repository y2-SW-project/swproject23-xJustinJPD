<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class objectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_Teams_delete(): void

    {
        
        
        $team = Team::create([
        
        'name' => 'FaZe',
        
        'location' => 'Atlanta',
        
        'description' => 'The Winningest CDL Team.',
        
        'wins' => 10,
        
        'losses' => 4,
        
        'points' => 100,
        
        'team_image' => 'Fury.png',
        
        ]);
        
        
        Team::destroy($team->id);
        
        
        
        $this->assertDatabaseMissing('teams', [
        
        'id' => $team->id
        
        ]);
    }

    public function test_Teams_create(): void

    {
        
        
        $team = Team::create([
        
        'name' => 'FaZe',
        
        'location' => 'Atlanta',
        
        'description' => 'The Winningest CDL Team.',
        
        'wins' => 10,
        
        'losses' => 4,
        
        'points' => 100,
        
        'team_image' => 'Fury.png',
        
        ]);
        
        
        
        $this->assertDatabaseHas('teams', [
        
            'name' => 'FaZe',
        
            'location' => 'Atlanta',
            
            'description' => 'The Winningest CDL Team.',
            
            'wins' => 10,
            
            'losses' => 4,
            
            'points' => 100,
            
            'team_image' => 'Fury.png',
        
        ]);
    }

    public function test_Team_showpage()

    {

        $response = $this->get('/teams/1');

        $response->assertStatus(200);

    }

    public function test_login()

    {

        $user = User::create([

            'name' => 'John',

            'email' => 'John@laravel.com',

            'password' => Hash::make('password'),

]);

    $response = $this->post('/login',[

        'email'=>'John@laravel.com',

        'password'=>'password',

]);

$response->assertRedirect('/home');
}

    public function test_Fixtures_showpage()

        {

            $response = $this->get('/fixtures/1');

            $response->assertStatus(200);

        }

    public function test_Fixtures_home()

    {

        $response = $this->get('/fixtures');

        $response->assertStatus(200);

    }

    public function testReadData()
    {
        $data = DB::table('players')->where('id', 1)->first();
        $this->assertEquals($data->team,1);
    }


}
