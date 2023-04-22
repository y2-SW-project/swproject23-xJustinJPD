@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex">

            {{-- link to the edit team view --}}
            <a href="{{route('admin.teams.edit', $team)}}" class="btn btn-link ml-auto">Edit team</a>

            {{-- form designed to delete a note --}}
            <form action="{{ route('admin.teams.destroy', $team) }}" method="post" enctype="multipart/form-data">
            {{-- method and csrf from blade functionality --}}
            @method('delete')
            @csrf
            {{-- button to delete with a confirmation button to make sure --}}
            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this team?')">Delete Car</button>
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