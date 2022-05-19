@include('frontend.includes.header')

<div class="breadcrumb-area bg-overlay-2" style="background-image:url('{{ asset('') }}assets/frontend/images/breadcrumb.jpg')">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="section-title text-center">
                <h2 class="page-title">Create Property</h2>
                <ul class="page-list">
                    <li><a href="index.html">Home</a></li>
                    <li> Create Property</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="add-property-area pd-top-120 body-bg">
    <div class="container">
        <form>
            <div class="btn btn-base hover-none">Basic Information</div>
            <div class="property-form-grid">
                <div class="row">
                    <div class="col-12">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">Property Title</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">Property Type</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">Property Status</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <div class="single-select-inner style-bg-border">
                            <span class="label">Beds</span>
                            <select style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">1</span><ul class="list"><li data-value="1" class="option selected">1</li><li data-value="2" class="option">2</li><li data-value="3" class="option">3</li></ul></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-select-inner style-bg-border">
                            <span class="label">Baths</span>
                            <select style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">1</span><ul class="list"><li data-value="1" class="option selected">1</li><li data-value="2" class="option">2</li><li data-value="3" class="option">3</li></ul></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="avatar-upload-input text-center">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            <h2>Upload your photo</h2>
                            <p>Its must be a clean photo</p>
                            <div class="avatar-edit-input">
                                <input class="btn btn-base" type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                <label class="btn btn-base" for="imageUpload">Click here to Upload</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">Address</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">City</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">State</span>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="single-input-inner style-bg-border">
                            <span class="label">Zip Code</span>
                            <input type="text">
                        </label>
                    </div>
                </div>
            </div>
            <div class="btn btn-base hover-none">Contact Details</div>
            <div class="property-form-grid">
                <div class="row">
                    <div class="col-md-4">
                        <label class="single-input-inner style-bg-border">
                            <input type="text" placeholder="Name">
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="single-input-inner style-bg-border">
                            <input type="text" placeholder="Email">
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="single-input-inner style-bg-border">
                            <input type="text" placeholder="Phone">
                        </label>
                    </div>
                    <div class="col-12">
                        <label class="single-input-inner style-bg-border">
                            <textarea placeholder="Description"></textarea>
                        </label>
                    </div>
                    <div class="col-12 text-center mb-4">
                        <button class="btn btn-base">Submit Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
    
@include('frontend.includes.footer')
 