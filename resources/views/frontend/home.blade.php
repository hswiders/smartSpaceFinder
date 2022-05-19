@include('frontend.includes.header')


    <div class="banner-area banner-area-2 banner-area-bg" style="background: url('{{asset('/assets/frontend/images/banner-main.jpg')}}'); background-attachment: fixed;">
        <div class="main-search-area">
            <div class="container">
                <form class="main-search-inner pl-0 pr-0">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-4">
                            <div class="single-check-inner text-lg-center">
                                <label>
                                    <input name="cl-one" type="radio">
                                    <span>Rent</span>
                                </label>
                                <label>
                                    <input name="cl-one" type="radio">
                                    <span>Buy</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <div class="single-input-inner">
                                <input type="text" placeholder="Enter Keyword">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-select-inner">
                                <select>
                                    <option>Office</option>
                                    <option value="1">Office 1</option>
                                    <option value="2">Office 2</option>
                                    <option value="3">Office 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-base w-md-auto w-100" href="#">Search</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="banner-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-inner text-center">
                            <p>Lorem ipsum dolor sit amet, consecteLorem ipsum dolor sit amet,</p>
                            <div class="line"></div>
                            <h2>The Best Way To Find Your Perfect Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="product-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>We are offering the best real estate</h6>
                <h2>Best House For You</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/product-1.png') }}" alt="img">
                            <div class="btn-area">
                                <a class="btn btn-base btn-sm" href="#">BUY</a>
                                <a class="btn btn-blue btn-sm" href="#">RENT</a>
                            </div>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="{{asset('/assets/frontend/images/author-1.png')}}" alt="img">                                    
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="{{asset('/assets/frontend/images/location.png')}}" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/product-2.png')}}" alt="img">
                            <div class="btn-area">
                                <a class="btn btn-base btn-sm" href="#">BUY</a>
                                <a class="btn btn-blue btn-sm" href="#">RENT</a>
                            </div>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="{{asset('/assets/frontend/images/author-2.png')}}" alt="img">                                    
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="{{asset('/assets/frontend/images/location.png')}}" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/product-3.png')}}" alt="img">
                            <div class="btn-area">
                                <a class="btn btn-base btn-sm" href="#">BUY</a>
                                <a class="btn btn-blue btn-sm" href="#">RENT</a>
                            </div>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="{{asset('/assets/frontend/images/author-3.png'); }}" alt="img">                                    
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="{{asset('/assets/frontend/images/location.png')}}" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>          
                    </div>
                </div>     
            </div>
        </div>
    </div>
    


    <div class="service-area bg-gray py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-wrap style-2" style="background-image: url(assets/frontend/images/service-big-1.png);">
                        <div class="thumb">
                            <img src="assets/frontend/images/service-small-1.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="#">Sell Property</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-wrap style-2" style="background-image: url(assets/frontend/images/service-big-2.png">
                        <div class="thumb">
                            <img src="assets/frontend/images/service-small-2.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="#">Daily Property</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-wrap style-2 mb-0" style="background-image: url(assets/frontend/images/service-big-3.png);">
                        <div class="thumb">
                            <img src="assets/frontend/images/service-small-3.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="#">Sold Best</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="propartes-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>Our Properties</h6>
                <h2>Our Properties </h2>
            </div>
            <div class="mgd-tab-inner text-center"> 
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="rent1-tab" data-toggle="tab" href="#rent1" role="tab" aria-controls="rent1" aria-selected="true">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sell1-tab" data-toggle="tab" href="#sell1" role="tab" aria-controls="sell1" aria-selected="false">Sell</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="rent1" role="tabpanel" aria-labelledby="rent1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Daily Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-2.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Hotel Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-3.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Reached Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Farm House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sell1" role="tabpanel" aria-labelledby="sell1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Daily Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-2.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Hotel Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-3.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Reached Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/frontend/images/project-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Farm House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{asset('/assets/frontend/images/location2.png')}}" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="{{asset('/assets/frontend/images/project-1.png')}}" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{asset('/assets/frontend/images/author-1.png') }}" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{asset('/assets/frontend/images/location.png')}}" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="#">Farm House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{asset('/assets/frontend/images/location2.png')}}" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet, costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="testimonial-area pd-top-118 pd-bottom-120 bg-overlay" style="background: url('{{asset('/assets/frontend/images/testimonial-bg.png')}}');">
        <div class="bg-overlay-wrap">
            <div class="container">
                <div class="section-title style-white text-center">
                    <h6>Our Testimonial </h6>
                    <h2>What Client Say</h2>
                    <p>Lorem ipsum dolor  amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-slider-1 owl-carousel">
                            <div class="item">
                                <div class="single-testimonial-inner pl-lg-5 pr-lg-5 text-center">
                                    <div class="thumb">
                                        <img src="{{asset('/assets/frontend/images/quote.png')}}" alt="img">
                                    </div>
                                    <div class="details">
                                        <p>“consecte Lorem ipsum dolor sit amet, Lorem ipsum dolor amet, consecte Lorem ipsum dolor sit adipisicing amet, consectetur sed do eiusmod tempor dolore magna consecrem adipisicing ipsum dolor sit amet, incididunt sed do eiusmod tempor incididunt consectetur elit,’’ </p>
                                        <h6 class="name">Sarif Jaya Miprut</h6>
                                        <span class="designation">Profile Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial-inner pl-lg-5 pr-lg-5 text-center">
                                    <div class="thumb">
                                        <img src="{{asset('/assets/frontend/images/quote.png')}}" alt="img">
                                    </div>
                                    <div class="details">
                                        <p>“consecte Lorem ipsum dolor sit amet, Lorem ipsum dolor amet, consecte Lorem ipsum dolor sit adipisicing amet, consectetur sed do eiusmod tempor dolore magna consecrem adipisicing ipsum dolor sit amet, incididunt sed do eiusmod tempor incididunt consectetur elit,’’ </p>
                                        <h6 class="name">Sarif Jaya Miprut</h6>
                                        <span class="designation">Profile Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="categores-area bg-gray pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>We are offering the best real estate</h6>
                <h2>Popular Categories</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-category-product-wrap style-two text-center">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/cat-1.png')}}" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="#">Full House - Furnished</a></h4>
                            <a class="btn btn-base" href="#">3 Properties</a>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-6 col-sm-6">
                    <div class="single-category-product-wrap style-two text-center">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/cat-2.png')}}" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="#">Full House - Unfurnished</a></h4>
                            <a class="btn btn-base" href="#">6 Properties</a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-sm-6">
                    <div class="single-category-product-wrap style-two text-center">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/cat-3.png')}}" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="#">Shared House - Furnished</a></h4>
                            <a class="btn btn-base" href="#">2 Properties</a>
                        </div>
                    </div>
                </div>   
                <div class="col-lg-6 col-sm-6">
                    <div class="single-category-product-wrap style-two text-center">
                        <div class="thumb">
                            <img src="{{asset('/assets/frontend/images/cat-3.png')}}" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="#">Shared House - Unfurnished</a></h4>
                            <a class="btn btn-base" href="#">1 Properties</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    
    
@include('frontend.includes.footer')
