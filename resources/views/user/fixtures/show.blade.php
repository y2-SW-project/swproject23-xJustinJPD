@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex">

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