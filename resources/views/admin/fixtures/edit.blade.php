@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <!-- CHECKOUT TAG -->
        <div class="container d-flex justify-content-center mt-1">
            <h2>Edit Fixture</h2>
        </div>
        <!-- CHECKOUT TAG END -->

        <!-- CHECKOUT CONTENT -->
        <form action="{{ route('fixtures.update', $fixture) }}" method="post">
            @method('put')
            @csrf
        <div class="container ps-0 pe-5">
            <div class="row d-sm-block d-lg-flex ">
                <div class="col">

                    <!-- EMAIL -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Date & Location:</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="date" name="date" class="form-control" autocomplete="off" id="floatingInput" placeholder="March 13th 2023" value="{{ $fixture->date }}">
                                <label for="floatingInput">Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="location" name="location" class="form-control" autocomplete="off" id="floatingInput" placeholder="March 13th 2023" value="{{ $fixture->location }}">
                                <label for="floatingInput">Location</label>
                            </div>
                        </div>
                    </div>

                    <!-- EMAIL END -->

                </div>
                <!-- CHECKOUT CONTENT -->
                <div class="col">
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3 sticky-top added">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">New Fixture:</h4>
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
                                    <h4 class="m-0 fw-normal text-white">Create</h4>
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