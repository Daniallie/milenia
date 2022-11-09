@extends('layout.main')

@section('content')

<!--- start header area --->
    <header class="cover-about">    
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
                
        </div>
    </header>
<!--- end header area --->
<div class="container">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-4">
            <h1>WHAT WE DO</h1>
        </div>
        
        <div class="col-12 col-lg-8">
            <blockquote class="blockquote border-3 border-start border-warning p-3">
            <p>We coordinate your shipment(s) according to your needs, acting as an intermediary between the manufacturer and buyer. Allowing The shipment to be moved through a single channel, instead of having multiple vendors to deal with, we can deal with them in your place, whether the inquiries would either need to be using single or multiple carriers via air, ocean, or land.</p>
            </blockquote>
        </div>
    </div>
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-8">
            <blockquote class="blockquote border-3 border-end border-warning p-3">
            <p>Teams that are designed to assist to your logistic needs, made of experienced individuals in their own fields. We attend to people’s logistic needs daily, which brings us to a well-informed do’s and don’ts.</p>
            </blockquote>
        </div>
        <div class="col-12 col-lg-4">
            <h1>WHO WE ARE</h1>
        </div>
    </div>
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-4">
            <h1>WHY US</h1>
        </div>
        
        <div class="col-12 col-lg-8">
            <blockquote class="blockquote border-3 border-start border-warning p-3">
            <p>By attending to each and everyone’s inquiry daily, our teams are specifically updated about the norms that are passing by in the department. We are able to give solutions or even help you for your cargoes to reach their destination.</p>
            </blockquote>
        </div>
    </div>
    
</div>
<div class="container">
    <div class="row">
        <img src="{{ URL::asset('/image/homepage.png') }}" alt="">
    </div>
</div>
<div class="container">
    <div class="row p-4">
        <h4>
            PT. Milenia Armada Ekspres is an internasional air and sea
            freight forwarding agency, that was established in 1999.
            Our company has been trusted by national and
            international clients, from regions of Asia Pacific, Europe,
            United States, and Africa.

        </h4>
    </div>
    <div class="row p-4">
        <h4>
            Our clients have trusted in our reability, variety of freight
            options, and our best effort in giving good service, as
            an established freight forwarding company.
        </h4>
    </div>
    <div class="row p-4">
        <h4>
            PT. Milenia Armada Ekspres quarantees the best quality
            in service and delivery at the best conditions
        </h4>
    </div>
    
    
</div>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-5">
            <img src="/image/chairman-1.jpeg" alt="">
        </div>
        <div class="col-12 col-lg-7">
            <div class="row">
                <blockquote class="blockquote border-3 border-bottom border-warning p-3">
                <p>With our teams led by experienced leaders in each division from air and sea modes, for both international and domestic journeys, the young ones will be able to assist as well. Since they are well instructed to meet customers expectations better by their leaders. Pushing the new generations to be able to get out of our comfort zone, our team leaders have instructed us to explore new horizons for our customers to reach further from where we stand. With incoming inquiries being very broad, we are open to suggestions. Being that it would be something we are strong at or not, we always do our best to come up with new solutions to serve the challenges that may arise.</p>
                </blockquote>
            </div>
            
            <div class="row">
                <h3>Lio Kurniawan</h3>
                <br>
                <h5>Chairman</h5>
            </div>
            <div class="row"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-4">
            <h1>WHO WE WORK CLOSE WITH</h1>
        </div>
        
        <div class="col-12 col-lg-8">
            <button class="prev" type="button" onclick="prevSlide(this)">➤</button>   
                <div class="slider">
                    <div class="item">
                        <img src="/image/1-1.png" />
                    </div>

                    <div class="item">
                    <img src="/image/2-1.png" />
                    
                    </div>

                    <div class="item">
                    <img src="/image/3-1.png" />
                    
                    </div>

                    
                </div>
            <button class="next" type="button" onclick="nextSlide(this)">➤</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <img src="/image/about-image.jpg" alt="">
    </div>
</div>
<div class="container d-flex justify-content-center align-items-center text-center p-5">
    <h5>
        Being consistent in our services, we are still doing what we are strong at. Our services still remain with International and Domestic services, both FCL and LCL movements, project cargo, break bulk handling and shipping, custom clearance for sea services. With air services to remain as air-air cargo movement, project cargo handling, aquatics, perishables, door to door delivery with customs services as well.
    </h5>
</div>
@endsection
