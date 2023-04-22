@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex">

            </form>

            
            
            </div>



                
                {{-- displaying each element of the team --}}
                <h2 class="font-bold text-4xl"> 
                    {{ $team->name }}
                </h2>

                <h2 class="font-bold text-2xl"> 
                    {{ $team->location }}
                </h2>

                <h2 class="font-bold text-2xl"> 
                    {{ $team->wins }}
                </h2>

                <p class="mt-6 whitespace-pre-wrap">{{ ($team->description) }}</p>

                <hr>

                @foreach ($team->players as $player)
                    <h2>{{$player->name}}</h2>
                @endforeach
        
    </div>
</div>
@endsection