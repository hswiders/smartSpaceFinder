@include('frontend.includes.header')

<div class="breadcrumb-area bg-overlay-2" style="background-image:url('{{ asset('') }}assets/frontend/images/breadcrumb-2.jpg')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title text-center">
                    <h2 class="page-title">Explore Property</h2>
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li> Property</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-page-area pd-top-120 pd-bottom-120 body-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-12">
                    <div class="product-search-inner ">
                        <div class="row custom-gutters-20">
                            <div class="col-md-9 align-self-center">
                                <h5>21 Properties</h5>
                            </div>
                            <div class="col-md-3 mt-2 mt-md-0 align-self-center">
                                <div class="single-select-inner">
                                    <select style="display: none;">
                                        <option value="1">Sort By</option>
                                        <option value="2">Popular</option>
                                        <option value="3">Low to High</option>
                                        <option value="4">High to Low</option>
                                    </select>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Sort By</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Sort By</li>
                                            <li data-value="2" class="option">Popular</li>
                                            <li data-value="3" class="option">Low to High</li>
                                            <li data-value="4" class="option">High to Low</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/cat-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Daily Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  constetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/product-1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-2.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Family House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  conseetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/cat-2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-3.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Beach House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  consectur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/product-2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Hotel Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  conctetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/cat-3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-2.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Daily Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  conctetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/product-3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-3.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Villa House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  constetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/cat-4.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-1.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Sunshine Place</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  consetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-wrap style-2">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets/frontend/images/cat-5.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="{{ asset('') }}assets/frontend/images/author-2.png" alt="img">           
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="{{ asset('') }}assets/frontend/images/location.png" alt="img">New York real estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i class="far fa-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="product-details-inner">
                                    <h4><a href="single-property.php">Sunny Place</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="{{ asset('') }}assets/frontend/images/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor  consetur </p>
                                    <span class="price">$ 80,650.00</span>
                                </div>
                                <div class="product-meta-bottom style-2">
                                    <span>3 <span>Bedroom</span></span>
                                    <span class="border-none">2 <span>Bathroom</span></span>
                                    <span>1026 <span>sqft</span></span>
                                </div>         
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area text-center mt-4">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="la la-angle-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="la la-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <aside class="sidebar-area">
                        <div class="widget-search mb-4">
                            <div class="single-search-inner">
                                <input type="text" placeholder="Search your keyword">
                                <button><i class="la la-search"></i></button>
                            </div>
                        </div>

                        <div class="widget widget-place widget-filter">
                            <h5 class="widget-title">Find your house</h5>
                            
                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1"><i class="fa-solid fa-location-dot"></i> Location</option>
                                    <option value="2">Los Angeles</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Houston</option>
                                    <option value="5">Miami</option>
                                    <option value="6">New york</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-location-dot"></i> Location</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Location</li>
                                        <li data-value="2" class="option">Chicago</li>
                                        <li data-value="3" class="option">Los Angeles</li>
                                        <li data-value="4" class="option">Miami</li>
                                        <li data-value="5" class="option">Houston</li>
                                        <li data-value="6" class="option">New york</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">Property Type</option>
                                    <option value="2">House</option>
                                    <option value="3">Apartment</option>
                                    <option value="4">Office</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-house-chimney"></i> Property Type</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Property Type</li>
                                        <li data-value="2" class="option">House</li>
                                        <li data-value="3" class="option">Apartment</li>
                                        <li data-value="4" class="option">Office</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">Property Status</option>
                                    <option value="2">Rent</option>
                                    <option value="3">Sale</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-house-chimney"></i> Property Status</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Property Status</li>
                                        <li data-value="2" class="option">Rent</li>
                                        <li data-value="3" class="option">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">Bedrooms</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-bed"></i> Bedrooms</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Bedrooms</li>
                                        <li data-value="2" class="option">1</li>
                                        <li data-value="3" class="option">2</li>
                                        <li data-value="4" class="option">3</li>
                                        <li data-value="5" class="option">4</li>
                                        <li data-value="6" class="option">5</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">Bathrooms</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-toilet-paper"></i> Bathrooms</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Bathrooms</li>
                                        <li data-value="2" class="option">1</li>
                                        <li data-value="3" class="option">2</li>
                                        <li data-value="4" class="option">3</li>
                                        <li data-value="5" class="option">4</li>
                                        <li data-value="6" class="option">5</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">City</option>
                                    <option value="2">New York</option>
                                    <option value="3">Houston</option>
                                    <option value="4">Chicago</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-city"></i> City</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">City</li>
                                        <li data-value="2" class="option">New York</li>
                                        <li data-value="3" class="option">Houston</li>
                                        <li data-value="4" class="option">Chicago</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="single-select-inner">
                                <select style="display: none;">
                                    <option value="1">State</option>
                                    <option value="2">New York</option>
                                    <option value="3">Houston</option>
                                    <option value="4">Chicago</option>
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current"><i class="fa-solid fa-map-pin"></i> State</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">State</li>
                                        <li data-value="2" class="option">New York</li>
                                        <li data-value="3" class="option">Houston</li>
                                        <li data-value="4" class="option">Chicago</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="single-select-inner">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Search By Zip Code">
                                </label>
                            </div>

                            <div class="single-select-inner">
                                <h5>Amenities</h5>

                                <div class="amenities-col" style="column-count: 2;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Parking</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                        <label class="form-check-label" for="flexCheckDefault1">Refrigerator</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">Laundry</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">Window Coverings</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                        <label class="form-check-label" for="flexCheckDefault4">Barbeque</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                        <label class="form-check-label" for="flexCheckDefault5">Grage</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                        <label class="form-check-label" for="flexCheckDefault6">Swimming Pool</label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                        <label class="form-check-label" for="flexCheckDefault7">Fitness Gym</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                        <label class="form-check-label" for="flexCheckDefault8">Fireplace</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                        <label class="form-check-label" for="flexCheckDefault9">Security Garage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                                        <label class="form-check-label" for="flexCheckDefault10">Basement</label>
                                    </div>
                                </div>
                            </div>

                            <div class="single-select-inner mt-4">
                                <h5>Search by Stars: </h5>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                    <label class="form-check-label" for="flexCheckDefault11"><i class="fa-solid fa-star"></i></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
                                    <label class="form-check-label" for="flexCheckDefault13"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
                                    <label class="form-check-label" for="flexCheckDefault14"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
                                    <label class="form-check-label" for="flexCheckDefault15"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></label>
                                </div>
                            </div>

                        </div>

                        <div class="widget widget-place">
                            <h5 class="widget-title">Categories</h5>
                            <ul>
                                <li><a href="#">Furnished - Full House <span>26</span></a></li>
                                <li><a href="#">Unfurnished - Full House <span>20</span></a></li>
                                <li><a href="#">Furnished - Shared House <span>21</span></a></li>
                                <li><a href="#">Unfurnished - Shared House <span>31</span></a></li>
                            </ul>
                        </div>




                    </aside>
                </div>
            </div>
        </div>
    </div>
    
@include('frontend.includes.footer')
 