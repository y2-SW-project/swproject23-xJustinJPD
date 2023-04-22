@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex">

            {{-- link to the edit player view --}}
            <a href="{{route('admin.fixtures.edit', $fixture)}}" class="btn btn-link ml-auto">Edit Fixture</a>

            {{-- form designed to delete a note --}}
            <form action="{{ route('admin.fixtures.destroy', $fixture) }}" method="post" enctype="multipart/form-data">
            {{-- method and csrf from blade functionality --}}
            @method('delete')
            @csrf
            {{-- button to delete with a confirmation button to make sure --}}
            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this fixture?')">Delete Fixture</button>
            </form>

            
            
            </div>



                
                {{-- displaying each element of the player --}}
                <h2 class="font-bold text-4xl"> 
                    {{ $fixture->location }}
                </h2>


                @foreach ($fixture->teams as $team)
                    <h2>{{$team->name}}</h2>
                @endforeach

                
        
    </div>
</div>
@endsection