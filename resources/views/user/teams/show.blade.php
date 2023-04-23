@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <img src="{{ asset('storage/images/' . $team->team_image) }}" class="rounded border-1 mb-3" width="170" height="170"/> 
                
                {{-- displaying each element of the team --}}
                <div class="row mb-5">
                    <h1 class="font-bold text-4xl"> 
                        {{ $team->name }}
                    </h1>
                </div>
                <div class="row d-flex mb-4">
                    <h5 class="col-10 font-bold text-4xl"> 
                    {{ ($team->description) }}
                    </h5>
                </div>
                <div class="row d-flex my-2">
                    <h4 class="col-2" style="font-weight: bold;">
                        Location:
                    </h4>
                    <h4 class="col-10 font-bold text-4xl"> 
                        {{ $team->location }}
                    </h4>
                </div>

                <div class="row d-flex">
                    <h4 class="col" style="font-weight: bold;">
                        Wins:
                    </h4>
                    <h4 class="col font-bold text-4xl"> 
                        {{ $team->wins }}
                    </h4>

                    <h4 class="col" style="font-weight: bold;">
                        Losses:
                    </h4>
                    <h4 class="col font-bold text-4xl pe-5"> 
                        {{ $team->losses }}
                    </h4>

                    <h4 class="col" style="font-weight: bold;">
                        Points:
                    </h4>
                    <h4 class="col font-bold text-4xl"> 
                        {{ $team->points }}
                    </h4>
                </div>

                <hr>

                <div class="row d-flex justify-content-center gx-4 mb-5 pt-3">

                <div class="d-flex justify-content-center mt-1 mb-3">
                    <h2>Roster</h2>
                </div>

                @foreach ($team->players as $player)
                <div class="col-md-4 col-lg-3 col-sm-4 mb-3">
                <a href="{{ route('user.players.show', $player->id) }}" style="text-decoration: none; color: black;">
                <div class="card border-0.5">  <img src="{{ asset('storage/images/' . $player->picture) }}" class="rounded-top" width="150" height="190"/> 
                    <div class="card-body d-flex justify-content-center">
                            <h5 class="card-title">{{ $player->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
                @endforeach

            </div>
        
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
@endsection