@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex">

            {{-- link to the edit player view --}}
            <a href="{{route('admin.players.edit', $player)}}" class="btn btn-link ml-auto">Edit Player</a>

            {{-- form designed to delete a note --}}
            <form action="{{ route('admin.players.destroy', $player) }}" method="post" enctype="multipart/form-data">
            {{-- method and csrf from blade functionality --}}
            @method('delete')
            @csrf
            {{-- button to delete with a confirmation button to make sure --}}
            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this player?')">Delete Player</button>
            </form>

            
            
            </div>



                
                {{-- displaying each element of the player --}}
                <h2 class="font-bold text-4xl"> 
                    {{ $player->name }}
                </h2>

                <p class="mt-6 whitespace-pre-wrap">{{ ($player->description) }}</p>
        
    </div>
</div>
@endsection