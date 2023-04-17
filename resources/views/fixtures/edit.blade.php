@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <!-- CHECKOUT TAG -->
        <div class="container d-flex justify-content-center mt-1">
            <h2>Edit Player</h2>
        </div>
        <!-- CHECKOUT TAG END -->

        <!-- CHECKOUT CONTENT -->
        <form action="{{ route('players.update', $player) }}" method="post">
            @method('put')
            @csrf
        <div class="container ps-0 pe-5">
            <div class="row d-sm-block d-lg-flex ">
                <div class="col">

                    <!-- EMAIL -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Player Naming:</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="name" name="name" class="form-control" autocomplete="off" id="floatingInput" placeholder="name@example.com" value="{{ $player->name }}">
                                <label for="floatingInput">Player Name</label>
                            </div>
                        </div>
                    </div>

                    <!-- EMAIL END -->

                    <!-- ADDRESS -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Player Information:</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="description" name="description" class="form-control" autocomplete="off" id="floatingInput" placeholder="name@example.com" value="{{ $player->description }}">
                                <label for="floatingInput">Description</label>
                            </div>

                            <div class="form-group">
                                <label for="team">Team</label>
                                <select name="team_id">
                                    @foreach ($teams as $team)
                                        <option value="{{$team->id}}">
                                            {{$team->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- ADDRESS END -->
                </div>
                <!-- CHECKOUT CONTENT -->
                <div class="col">
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3 sticky-top added">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Update Player:</h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex justify-content-end">
                                <img src="images/EZAF.jpg" alt="" style="aspect-ratio: 16x9; max-height: 5rem; max-width: 6rem;" class="rounded-3 picel m-0 bigshadow">
                            </div>
                            <div class="col">
                                <div class="container d-flex justify-content-start mb-1">
                                    <h6>Call Of Duty League</h6>
                                </div>
                                <div class="container d-flex justify-content-start mb-1">
                                    <h6 class="me-1">Season:</h6> <h6 style="font-weight: bold;">2023</h6>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-3">

                        <div class="container mb-3">
                            <hr>
                        </div>

                        <div class="container mb-3 d-flex justify-content-center">
                            <a href="" style="text-decoration: none; color: rgb(0, 0, 0);">
                                <button class="check rounded-3 btn d-block justify-content-center bg-success" style="width: 20rem;">
                                    <h4 class="m-0 fw-normal text-white">Update</h4>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- CHECKOUT CONTENT END -->
        </div>
    </div>
</div>
@endsection