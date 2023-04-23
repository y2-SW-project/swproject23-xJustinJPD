@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex justify-content-end">

            {{-- link to the edit player view --}}
            <a href="{{route('admin.players.edit', $player)}}" class="btn btn-success me-4">Edit Player</a>

            {{-- form designed to delete a note --}}
            <form action="{{ route('admin.players.destroy', $player) }}" method="post" enctype="multipart/form-data">
            {{-- method and csrf from blade functionality --}}
            @method('delete')
            @csrf
            {{-- button to delete with a confirmation button to make sure --}}
            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this player?')">Delete Player</button>
            </form>

            
            
            </div>


                <img src="{{ asset('storage/images/' . $player->picture) }}" class="border mb-3" width="170" height="170"/> 
                
                {{-- displaying each element of the player --}}
                <div class="row mb-5">
                    <h1 class="font-bold text-4xl"> 
                        {{ $player->name }}
                    </h1>
                </div>
                <div class="row d-flex my-2">
                    <h4 class="col-2" style="font-weight: bold;">
                        Player Info:
                    </h4>
                    <h4 class="col-10 font-bold text-4xl"> 
                        {{ $player->description }}
                    </h4>
                </div>

                <hr>
        
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