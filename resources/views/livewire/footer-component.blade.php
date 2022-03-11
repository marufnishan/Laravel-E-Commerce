<div style="background:#f5ebff;">
    <hr style="height: 1px; background-color: #4c1775;">
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">
            <div class="main-footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">{{$setting->address}}</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">{{$setting->phone}}</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">{{$setting->email}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">FOLLOW US</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item social-network">
                                            <ul>
                                                <li><a href="{{$setting->twiter}}" class="link-to-item"
                                                        title="twitter"><i class="fa fa-twitter"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->facebook}}" class="link-to-item"
                                                        title="facebook"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->pinterest}}" class="link-to-item"
                                                        title="pinterest"><i class="fa fa-pinterest"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->instagram}}" class="link-to-item"
                                                        title="instagram"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->youtube}}" class="link-to-item"
                                                        title="youtube"><i class="fa fa-youtube"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Hot Line</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Call Us toll Free</span>
                                            <b class="phone-number">{{$setting->phone2}}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item twin-item">
                            <a  href="/contact-us"><h1 class="item-header">LEAVE A Message</h1>
                                <i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coppy-right-box" style="margin-top:20px; ">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2021 Maruf Nishan. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"> <img src="{{asset ('assets/images/payment.png')}}"
                                        style="max-width: 260px;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
</div>
