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
                    {{ $player->name }}
                </h2>

                <p class="mt-6 whitespace-pre-wrap">{{ ($player->description) }}</p>
        
    </div>
</div>
@endsection