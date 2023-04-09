@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teams') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                @forelse ($cars as $car)
            <div class="">
                <a href="{{ route('teams.show', $team->id) }}">{{ $team->name }}
                    <img src="{{asset('storage/images/' . $team->team_image) }}" width="150" />
                
                

                <h2 class=""> 
                    <a href="{{ route('user.cars.show', $car->id) }}">{{ $team->name }}</a>
                </h2>
                </a>
            </div>

            {{-- empty function incase of user having no notes --}}
            @empty
            <p class="font-bold text-5xl">No cars to display.</p> 
        @endforelse

            </div>
        </div>
    </div>
</div>
@endsection