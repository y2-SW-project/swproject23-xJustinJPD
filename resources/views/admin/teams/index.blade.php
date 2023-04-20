

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @forelse ($teams as $team)
            <div class="">
                <a href="{{ route('teams.show', $team->id) }}">
                    <img src="{{ asset('storage/images/' . $team->team_image) }}"/>
                
                

                <h2 class=""> 
                    <a href="">{{ $team->name }}</a>
                </h2>
                </a>
            </div>

            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No teams to display.</p> 
        @endforelse
        <a href="{{route('teams.create')}}" class="btn-link ml-auto">Create Team</a>
        <a href="{{route('players.create')}}" class="btn-link ml-auto">Create Player</a>
        <a href="{{route('fixtures.index')}}" class="btn-link ml-auto">Fixtures</a>
        </div>
    </div>
</div>
@endsection