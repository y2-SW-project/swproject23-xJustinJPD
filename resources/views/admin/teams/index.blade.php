

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="d-flex justify-content-center mb-4">
        <img src="{{ asset('storage/images/CDLLOGO.png') }}" width="250" />
        </div>

            @forelse ($teams as $team)

            <div class="row d-flex justify-content-center gx-4">

            <div class="col-md-4 col-lg-3 col-sm-4">
                <div class="card border-0.5"> <a href="{{ route('admin.teams.show', $team->id) }}"> <img src="{{ asset('storage/images/' . $team->team_image) }}" width="150" height="150"/> </a>
                    <div class="card-body">
                        <a href="{{ route('admin.teams.show', $team->id) }}">
                            <h5 class="card-title">{{ $team->name }}</h5>
                        </a>

                    </div>
                </div>
            </div>
            </div>
            
            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No teams to display.</p> 
        @endforelse
        <a href="{{route('admin.teams.create')}}" class="btn-link ml-auto">Create Team</a>
        <a href="{{route('admin.players.create')}}" class="btn-link ml-auto">Create Player</a>
        <a href="{{route('admin.fixtures.index')}}" class="btn-link ml-auto">Fixtures</a>
        </div>

        @forelse ($teams->sortByDesc('points') as $team)
            <div class="">
                <a href="{{ route('admin.teams.show', $team->id) }}">
                    <img src="{{ asset('storage/images' . $team->team_image) }}" width="200" height="200"/>
                
                
                <h2 class=""> 
                    <a href="">{{ $team->name }}</a>
                </h2>
                </a>
            </div>

            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No teams to display.</p> 
        @endforelse
        </div>      
    </div>
</div>
@endsection