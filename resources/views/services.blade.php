@extends('layout.main')

@section('content')
<!--- start header area --->
    <header class="cover-services">    
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
@endsection