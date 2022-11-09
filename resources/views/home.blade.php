@extends('layout.main')

@section('content')

<!--- start header area --->
    <header class="cover">    
        <div id="content" class="container">
                <div class="row" style="margin-left:5%">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="image/logo f.png" width="100" alt="">
                        </a>
                        
                        <a class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            @include('partial.navbar')
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-top: 10%; margin-left:5%">
                    <div class="container-fluid color-overlay">
                        <div class="row row-cols-1 d-flex align-items-center">
                            <div class="col-12 col-lg-8">
                        <h1 style="font-size: 3rem; ">DELIVERING EXCELLENCE SINCE 1999</h1>
                            </div>
                        </div>
                        <div class="row row-cols-1 d-flex align-items-center text-white">
                            <div class="col-12 col-lg-8">
                            <p style="font-size: 20px; width:60%">Established collaborative network to better serve our customer by ground, air & sea</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-2">
                            <button type="button" class="btn btn-warning btn-lg">Get Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </header>
<!--- end header area --->

    <div class="container-fluid bg-primary align-items-center text-warning p-5">
        <div class="row">
            <div class="col-12 col-lg-4" style="font-size: 10vw">
                <h1>SERVICES WE OFFER</h1>
            </div>
            <div class="col-1">
                <div class="vertikal"></div>
            </div>
            <div class="col-12 col-lg-7">
                <p>At PT. Milenia Armada Ekspres (Also known as MAX), we offer a global coverage for our partners and customers on inbound and outbound traffic, within Indonesia and the world.</p>
            </div>
            
        </div>
    </div>

    <div class="container overflow-hidden text-center" style="position:relative; margin-top:-20px; margin-bottom:20px;">
        <div class="row gy-5">
            <div class="col-6" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 p-2">
                        <div class="col-md-4">
                        <img src="{{ URL::asset('/image/airplane.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning">AIR FREIGHT</h5>
                                <p class="card-text">With or without passengers, planes fly with cargoes. Amongst those cargo we carry your goods to your destination</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6" data-aos="fade-up-left" data-aos-duration="2000">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 p-2">
                        <div class="col-md-4">
                        <img src="{{ URL::asset('/image/ocean.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning">OCEAN FREIGHT</h5>
                                <p class="card-text">Most esteemed and efficient way to get your commodities around Indonesia or the World.</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" data-aos="fade-down-right" data-aos-duration="3000">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 p-2">
                        <div class="col-md-4">
                        <img src="{{ URL::asset('/image/roadway.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning">ROADWAY</h5>
                                <p class="card-text">To allow your goods to be delivered to your door, using the same road that you drive to and from.</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" data-aos="fade-down-left" data-aos-duration="1000">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 p-2">
                        <div class="col-md-4">
                        <img src="{{ URL::asset('/image/railway.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning">RAILWAY</h5>
                                <p class="card-text text-left">Using tracks that has been built by the government to transport your items using a set route.</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            
            </div>
            <div class="col-12 col-lg-9" data-aos="zoom-in-down" data-aos-duration="2000">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 p-2">
                        <div class="col-md-4">
                        <img src="{{ URL::asset('/image/custom.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning">CUSTOM CLEARANCE</h5>
                                <p class="card-text">To be able to connect more dearly with our customer(s), we provide our very own team to assist for documentation</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <h5>Our clients have trusted in our reability, variety of freight
            options, and our best effort in giving good service, as
            an established freight forwarding company.</h5>
        </div>
    </div>

    <div class="cover2">
        <div id="content2" class="container-fluid text-center ">
            <div class="container row p-5">
            <h1>OUR MOTTO</h1>
            </div>
        </div>
        
            <div class="row d-flex justify-content-around p-5 text-center">
                <div class="col-12 col-lg-4" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL::asset('/image/service.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-warning">SERVICE</h5>
                            <p class="card-text text-dark">We create a personal touch to all parties- be it cargo owners, agents, or consignees. We are at your service.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="zoom-in-down" data-aos-duration="2000" >
                    <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/image/sincerity.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-warning">SINCERITY</h5>
                                <p class="card-text text-dark">We do everything from the heart. We want to make things simple and easy for you, and your company.</p>
                                
                            </div>
                        </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="zoom-in-down" data-aos-duration="3000">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL::asset('/image/security.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-warning">SECURITY</h5>
                            <p class="card-text text-dark">We want to make the world a safer place. We want to make sure your shipments are safe; whilst adhering to shipment safety laws, all around the world.</p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-around text-warning p-3">
        <div class="row">
            <div class="col-12 col-lg-4" style="font-size: 10vw">
                <h1>OUR AFFILIATES</h1>
            </div>
            <div class="col-1">
                <div class="vertikal"></div>
            </div>
            <div class="col-12 col-lg-2">
                <img src="{{URL::asset('/image/logo-1-1.png')}}" alt="">
            </div>
            <div class="col-12 col-lg-2">
                <img src="{{URL::asset('/image/logo-2.png')}}" alt="">
            </div>
            <div class="col-12 col-lg-2">
                <img src="{{URL::asset('/image/logo-3-1.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="cover3">
        <div id="content3" class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h1>
                        YOUR VERY OWN DEPENDABLE LOGISTIC PARTNER
                    </h1>
                    <p>
                        Contact us at your own time convenience, to be able to be directed to your designated person-in-charge. With our respected team by your side, we would be sure to accommodate your needs.
                    </p>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up-right" data-aos-duration="1000">
                    <button type="button" class="btn btn-outline-warning btn-lg">
                        Contact Us
                        <i class="fa fa-mobile" aria-hidden="true"></i> 
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
