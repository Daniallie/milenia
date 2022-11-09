@extends('layout.main')

@section('content')
<!--- start header area --->
    <header class="cover-services">    
        <div id="content" class="container">
                <div class="row" style="margin-left:5%">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="{{ URL::asset('image/logo f.png') }}/" width="100" alt="">
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
                        <h1 style="font-size: 3rem; ">UNLIMITED DELIVERY</h1>
                            </div>
                        </div>
                        <div class="row row-cols-1 d-flex align-items-center text-white">
                            <div class="col-12 col-lg-8">
                            <p style="font-size: 20px; width:60%">We give solutions, offer time to save yours,
exercising communication to handle your
goods with human touch.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>  
    </header>
<!--- end header area --->
    <div class="container">
        <div class="row text-center p-2">
            <div class="col"></div>
            <div class="col-12 col-lg-5 border-3 border-bottom border-warning">
                <h1 class="">WHAT WE DO BEST</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row text-center p-3">
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-lg-2 p-1">
                        <i class="fa-solid fa-users fa-2x fa-border fa-duotone" style="--fa-border-radius: 100%; --fa-border-color: orange; --fa-primary-color: orange;" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <h3>PERSONAL TOUCH</h3>
                        </div>
                        <div class="row">
                            <p>
                                We handle your shipments personally. We want you and your company to succeed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-lg-2 p-1">
                        <i class="fa-sharp fa-solid fa-truck-plane fa-2x fa-border" style="--fa-border-radius: 100%; --fa-border-color: orange; " aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <h3>INDUSTRY KNOWLEDGE</h3>
                        </div>
                        <div class="row">
                            <p>
                                We provide, or will search for information locally, to make your business better.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-lg-2 p-1">
                        <i class="fa-brands fa-unity fa-2x fa-border" style="--fa-border-radius: 100%; --fa-border-color: orange; " aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <h3>INTEGRATION</h3>
                        </div>
                        <div class="row">
                            <p>
                                We are able to accommodate any type of logistics service- be it air, sea, road, or rail.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center p-3">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-lg-2 p-1">
                        <i class="fa-solid fa-file-contract fa-2x fa-border" style="--fa-border-radius: 100%; --fa-border-color: orange;" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <h3>CUSTOMS & DUTY</h3>
                        </div>
                        <div class="row">
                            <p>
                                We have familiarized ourselves with Indonesian customs and duty, and are willing to share our knowledge.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-lg-2 p-1">
                        <i class="fa-solid fa-headset fa-2x fa-border" style="--fa-border-radius: 100%; --fa-border-color: orange; " aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <h3>SUPPORT</h3>
                        </div>
                        <div class="row">
                            <p>
                                We work closely with our clients and will never abandon our clients whenever they experience difficulties with their shipments. We offer understanding and solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container-fluid bg-warning p-3">
        <div class="row text-center">
            <h2>OUR SHIPMENTS</h2>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-3">
                <img src="{{ URL::asset('/image/icon-truck.png') }}" alt="">
                <div class="content">
                    <div class="value" akhi="1455654">0</div>
                    
                </div>
                <h5>TRIPS(TRUCK)</h5>
            </div>
            <div class="col-12 col-lg-3">
                
                <img src="{{ URL::asset('/image/icon-plane.png') }}" alt="">
                <div class="content">
                    <div class="value" akhi="89000000">0</div>
                    
                </div>
                <h5>TONS(PLANE)</h5>
            
            </div>
            <div class="col-12 col-lg-3">
                <img src="{{ URL::asset('/image/icon-ship.png') }}" alt="">
                <div class="content">
                    <div class="value" akhi="257000">0</div>
                    
                </div>
                <h5>TEUs(SHIP)</h5>
            </div>
            <div class="col-12 col-lg-3">
                <img src="{{ URL::asset('/image/icon-people.png') }}" alt="">
                <div class="content">
                    <div class="value" akhi="85">0</div>
                    
                </div>
                <h5>EMPLOYEE(PERSON)</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <h1>OCEAN</h1>
                <h5>
                    Intercontinental sea freight constitutes our core business.
                    Whether LCL or FCL, we provide our customers with
                    reliable, economical and professional order processing from
                    end to end with brief processing time. We have been
                    cooperating with various shipping lines and worldwide
                    agents for years. Our customers the best quality in the best
                    conditions.
                </h5>

            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ URL::asset('/image/service-ocean.jpg') }}" style="width:75vh;" alt="">
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <img src="{{ URL::asset('/image/service-air.jpg') }}" style="width:75vh;" alt="">
            </div>
            <div class="col-12 col-lg-6">
                
                <h1>AIR FREIGHT</h1>
                <h5>
                    For being a fast, safe and reliable transport method, airfreight has achieved
                    enormous growth rates.
                    Tranport by air is particulary suitable for shipments of extreme urgency from
                    fast transit time, speed and flexibility, allowing goods to reach world markets
                    on time
                </h5>

            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <h1>TRUCK</h1>
                <h5>
                    Our Domestic agent network is very competent and
                    experienced in helping customers deliver goods from/to all
                    corners of Indonesia with an effective and efficient time
                    and cost analysis as well as ensuring that shipments can
                    proceed safely to their destination.
                </h5>

            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ URL::asset('/image/service-truck.jpg') }}" style="width:75vh;" alt="">
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <img src="{{ URL::asset('/image/service-rail.jpg') }}" style="width:75vh;" alt="">
            </div>
            <div class="col-12 col-lg-6">
                
                <h1>SPECIAL EQUIPMENT SHIPMENT</h1>
                <h5>
                    Allows you to ship goods that require
                    containers with special features such as flat
                    racks and open top containers for out-of-size
                    loads and reefer containers for goods that need
                    to be transported within the required
                    temperature control
                </h5>

            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <h1>CUSTOMS CLEARANCE</h1>
                <h5>
                    The team is also ready and able to assist you in
                    customs clearance, export & import
                    licensing/licensing facilities, PPJK activity services(PEB
                    -PIB issuance), COO, processing of other supporting
                    certificates needed on time according to your needs.
                </h5>

            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ URL::asset('/image/service-custom.jpg') }}" style="width:75vh;" alt="">
            </div>
        </div>
        <br>
    </div>
@endsection