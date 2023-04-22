

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @forelse ($fixtures as $fixture)
            <div class="">
                <a href="{{ route('user.fixtures.show', $fixture->id) }}">
                    <img src="{{ asset('storage/images/') }}"/>
                
                    @foreach ($fixture->teams as $team)
                            <h2> {{$team->name}} </h2>
                    @endforeach

                <h2 class=""> 
                    <a href="">Fixture</a>
                </h2>
                </a>
            </div>

            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No fixtures to display.</p> 
        @endforelse
        <a href="{{route('user.fixtures.create')}}" class="btn-link ml-auto">Create Fixture</a>
        </div>
    </div>
</div>
@endsection