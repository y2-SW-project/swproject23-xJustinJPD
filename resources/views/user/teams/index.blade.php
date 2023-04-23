

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="d-flex justify-content-center mb-5 mt-3">
        <img src="{{ asset('storage/images/CDLLOGO.png') }}" width="250" />
        </div>

        <div class="row d-flex justify-content-center gx-4 mb-5">

            @forelse ($teams as $team)
            <div class="col-md-4 col-lg-3 col-sm-4 mb-3">
            <a href="{{ route('user.teams.show', $team->id) }}" style="text-decoration: none; color: black;">
                <div class="card border-0.5">  <img src="{{ asset('storage/images/' . $team->team_image) }}" class="rounded-top" width="150" height="190"/> 
                    <div class="card-body d-flex justify-content-center">
                            <h5 class="card-title">{{ $team->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            
            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No teams to display.</p> 
        @endforelse

        
            </div>
        

        <div class="d-flex justify-content-center mt-5">
            <h2>Standings</h2>
        </div>

        <div class="row gx-4 mb-3 mt-2">
        <div class="noHover mb-2" style="max-width: 1000px; max-height: 70px; pointer-events: none;">
                    <div class="row g-0 noHover">
                        <div class="col-md-1 noHover">
                        </div>
                        <div class="col-md-3 noHover">
                            <div class=" d-flex noHover">
                                <h5 class="card-title ps-3">TEAM</h5>
                        </div>
                        </div>
                        <div class="col-md-6 noHover">
                            <div class="d-flex justify-content-around noHover">
                                    <p class="ps-3">MW</p>
                                    <p class="pe-3">ML</p>
                                    <p class="pe-3">PTS</p>
                        </div>
                        </div>
                </div>
            </div>

        @forelse ($teams->sortByDesc('points') as $team)
                <a href="{{ route('user.teams.show', $team->id) }}" class="noHover" style="text-decoration: none; color: black;">
                <div class="card noHover mb-1" style="max-width: 1000px; max-height: 70px; pointer-events: none;">
                    <div class="row g-0 noHover">
                        <div class="col-md-1 noHover">
                            <img src="{{ asset('storage/images/' . $team->team_image) }}" class="img-fluid noHover mt-2 pt-1 ms-2" style="max-width: 40px; max-height: 40px;" alt="..." width="50" height="50">
                        </div>
                        <div class="col-md-3 noHover">
                            <div class="card-body d-flex noHover">
                                <h5 class="card-title">{{ $team->name }}</h5>
                        </div>
                        </div>
                        <div class="col-md-6 noHover">
                            <div class="card-body d-flex justify-content-around noHover">
                                    <p class="card-text">{{ $team->wins }}</p>
                                    <p class="card-text">{{ $team->losses }}</p>
                                    <p class="card-text">{{ $team->points }}</p>
                        </div>
                        </div>
                </div>
            </div>
            </a>

            {{-- empty function incase of user having no teams --}}
            @empty
            <p class="font-bold text-5xl">No teams to display.</p> 
        @endforelse

        
        </div>
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
</div>
@endsection