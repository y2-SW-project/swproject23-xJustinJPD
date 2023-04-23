@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <!-- CHECKOUT TAG -->
        <div class="container d-flex justify-content-center mt-1">
            <h2>Create Team</h2>
        </div>
        <!-- CHECKOUT TAG END -->

        <!-- CHECKOUT CONTENT -->
        <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="container ps-0 pe-5">
            <div class="row d-sm-block d-lg-flex ">
                <div class="col">

                    <!-- EMAIL -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Team Naming:</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="name" name="name" class="form-control" autocomplete="off" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Team Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="location" name="location" class="form-control" autocomplete="off" id="input" placeholder="email">
                                <label for="input">Location</label>
                            </div>
                        </div>
                    </div>

                    <!-- EMAIL END -->

                    <!-- ADDRESS -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Information:</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="description" name="description" class="form-control" autocomplete="off" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="wins" class="form-control" autocomplete="off" id="input" placeholder="1">
                                <label class="d-flex" for="input">Wins</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="losses" class="form-control" autocomplete="off" id="input" placeholder="email">
                                <label class="d-flex" for="input">Losses</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="points" class="form-control" autocomplete="off" id="input" placeholder="email">
                                <label class="d-flex" for="input">Points</label>
                            </div>
                        </div>
                    </div>
                    <!-- ADDRESS END -->

                    <!-- PAYMENT + CONTACT -->
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">Team Images:</h4>
                        </div>
                        <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="file" name="team_image" class="form-control" id="image" placeholder="image">
                                    <label class="" for="image">Team Image</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-floating mb-3">
                        </div> -->
                    </div>

                    </div>
                    <!-- PAYMENT + CONTACT END -->
                </div>
                <!-- CHECKOUT CONTENT -->
                <div class="col">
                    <div class="container border border-1 border-dark-subtle rounded-2 mx-4 mt-3 sticky-top added">
                        <div class="container d-flex justify content start mb-1 mt-3">
                            <h4 style="font-weight: 500;">New Team:</h4>
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

                                    <!-- FOOTER -->
                    
                                    <footer class="text-center text-lg-start bg-light text-muted bg-dark-subtle">

<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
<!-- Left -->
<!-- Left -->

<!-- Right -->
<div>
<a href="" class="me-4 text-reset">
<i class="fab fa-facebook-f"></i>
</a>
<a href="" class="me-4 text-reset">
<i class="fab fa-twitter"></i>
</a>
<a href="" class="me-4 text-reset">
<i class="fab fa-google"></i>
</a>
<a href="" class="me-4 text-reset">
<i class="fab fa-instagram"></i>
</a>
<a href="" class="me-4 text-reset">
<i class="fab fa-linkedin"></i>
</a>
<a href="" class="me-4 text-reset">
<i class="fab fa-github"></i>
</a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->
<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h4 class="text-uppercase fw-bold mb-4 gradient-text">
        League Sense
        </h4>
        <p>
        League Sense is a public website, here to provide you with viewing needs for your favorite eSports & local sports needs.
        </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
        Products
        </h6>
        <p>
        <a href="#!" class="text-reset">Angular</a>
        </p>
        <p>
        <a href="#!" class="text-reset">React</a>
        </p>
        <p>
        <a href="#!" class="text-reset">Vue</a>
        </p>
        <p>
        <a href="#!" class="text-reset">Laravel</a>
        </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
        Useful links
        </h6>
        <p>
        <a href="#!" class="text-reset">Pricing</a>
        </p>
        <p>
        <a href="#!" class="text-reset">Settings</a>
        </p>
        <p>
        <a href="#!" class="text-reset">Orders</a>
        </p>
        <p>
        <a href="#!" class="text-reset">Help</a>
        </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
        <p><i class="fas fa-home me-3"></i>Dublin, Ireland</p>
        <p>
        <i class="fas fa-envelope me-3"></i>
        justinperrydoyle@gmail.com
        </p>
        <p><i class="fas fa-phone me-3"></i> + 83 474 8031</p>
        <p><i class="fas fa-print me-3"></i> + 83 474 8031</p>
    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

</footer>
<!-- FOOTER END -->
    </div>
</div>
@endsection