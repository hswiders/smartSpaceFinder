<footer class="footer-area style-two" style="background: url('{{asset('assets/frontend/images/footer-banner.jpg')}}') no-repeat center/cover;">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_about">
                            <h4 class="widget-title">Smart Space Finder</h4>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur et adipisicing  eiusmod tempor incididunt labore</p>
                                <p><i class="fas fa-map-marker-alt"></i> 420 Love Sreet 133/2 Mirpur City, Dhaka</p>
                                <p><i class="fas fa-phone-volume"></i> +(066) 19 5017 800 628</p>
                                <p><i class="fas fa-envelope"></i> info.contact@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_newsfeed">
                            <h4 class="widget-title">Company</h4>
                            <ul>

                                <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-9">
                        <div class="widget widget_subscribe mb-4">
                            <h4 class="widget-title">Newslatter</h4>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet,</p>
                                <div class="footer-subscribe-inner">
                                    <input type="text" placeholder="Your Mail">
                                    <a class="btn btn-base" href="#">Subscribe</a>
                                </div> 
                            </div>
                        </div>
                        <div class="widget widget-tags pt-2">
                            <h5 class="widget-title mb-3">Get in Touch</h5>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p>© 2022, Copy Right By Smart Space Finder. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets/frontend/js/vendor.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>
</html>