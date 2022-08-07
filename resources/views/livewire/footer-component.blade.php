<div style="background:#f5ebff;">
    <hr style="height: 1px; background-color: #4c1775;">
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">
            <div class="main-footer-content" style="padding-bottom: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="col-md-6 text-center">
                                    <h3>Contact Details</h3>
                                    <p><i class="fa fa-map-marker" style="margin-right: 10px; margin-left:0 px;"
                                            aria-hidden="true"></i>{{$setting->address}}</p>
                                    <p><i class="fa fa-phone" style="margin-right: 10px;" aria-hidden="true"></i>
                                        {{$setting->phone}}</p>
                                    <p><i class="fa fa-envelope" style="margin-right: 10px;"
                                            aria-hidden="true"></i>{{$setting->email}}</p>
                                
                            </div>
                            <div class="col-md-6 text-center">
                                <h3>Follow Us</h3>
                                    <a style="margin: 5px;font-size:32px;" href="{{$setting->twiter}}" title="twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i>
                                        <a style="margin: 5px;font-size:32px;" href="{{$setting->facebook}}" title="facebook"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a style="margin: 5px;font-size:32px;" href="{{$setting->pinterest}}" title="pinterest"><i class="fa fa-pinterest"
                                            aria-hidden="true"></i></a>
                                    <a style="margin: 5px;font-size:32px;" href="{{$setting->instagram}}" title="instagram"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                    <a style="margin: 5px;font-size:32px;" href="{{$setting->youtube}}" title="youtube"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6 text-center">
                                <h3>Hot Line</h3>
                                <span class="desc">Call Us Any Time</span>
                                <br>
                                <b class="phone-number">{{$setting->phone2}}</b>
                            </div>
                            <div class="col-md-6 text-center">
                                <h3>Leave A Message</h3>
                                <a href="/contact-us"><i class="fa fa-envelope" style="font-size: 32px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="coppy-right-box">
    <div class="container">
        <div class="coppy-right-item item-left">
            <p class="coppy-right-text">Copyright © 2021 Maruf Nishan. All rights reserved</p>
        </div>
        <div class="coppy-right-item item-right">
            <div class="wrap-nav horizontal-nav">
                <ul>
                    <li class="menu-item"> <img src="{{asset ('assets/images/payment.png')}}" style="max-width: 260px;">
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
</footer>
</div>
