@include('frontend.includes.header')

<div class="breadcrumb-area bg-overlay-2" style="background-image:url('{{ asset('') }}assets/frontend/images/breadcrumb-2.jpg')">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="section-title text-center">
                <h2 class="page-title">Get in Touch</h2>
                <ul class="page-list">
                    <li><a href="index.php">Home</a></li>
                    <li> Contact us</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="contact-page-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-details-inner mng-box-shadow">
                        <h4>CONTACT DETAILS</h4>
                        <p>Please find below contact details and contact us today!</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-single-list">
                                    <!-- <h5>India Office</h5> -->
                                    <ul>
                                        <li><img src="assets/images/location2.png" alt="img"> 420 Love Sreet 133/2 Mirpur  Nevis, Caribbean Dhaka</li>
                                        <li><a href="tel:+(066) 19 5017 800 628"><i class="fa-solid fa-phone"></i> +(066) 19 5017 800 628</a></li>
                                        <li><a href="mailto:example@gmail.com"><i class="fa-solid fa-at"></i> example@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="signin-inner" method="post" id="handleContactAjax" action="{{route('do-contact-us')}}" name="postform">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="single-select-inner style-bg-border">
                                    <select class="form-control" name="contact_type_id">
                                        @foreach($contact_type as $value)

                                        <option value="{{ $value->id }}">{{ $value->contact_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Subject" name="subject">
                                    @csrf
                                </label>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Name" name="name">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Email" name="email">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="number" placeholder="Phone" name="phone">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </label>
                            </div>
                            <div class="col-12 mb-4">
                                <button type="submit" class="btn btn-base">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-page-map mg-top-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193526.3099246293!2d-74.07959667726288!3d40.72134945797748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1652188203396!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    
@include('frontend.includes.footer')

<script type="text/javascript">

    $(document).on("submit","#handleContactAjax",function(){
            var e = this;

            UserData = $(this).serialize()
            $(this).find("[type='submit']").html("Processing..");
            $('.alert-danger').remove();
            $.post($(this).attr('action'),UserData,function(data){
              
              $(e).find("[type='submit']").html("Submit Now");
              if(data.status){
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: data.msg,
                  showConfirmButton: false,
                  timer: 1500
                }).then((result) => {
                  window.location = data.redirect_location;
                })
                
              }
              

            }).fail(function(response) {
             
              $(e).find("[type='submit']").html("Submit Now");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);
               for (var err in erroJson) {
            
                $("[name='" + err + "']").after("<div  class='label alert-danger'>" + erroJson[err] + "</div>");
          }

            });
        return false;
      });
</script>