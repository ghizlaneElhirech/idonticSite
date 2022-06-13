<footer id="dk-footer" class="dk-footer">
        <div class="container reveal">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="images/logo.png" alt="footer_logo" class="img-fluid">
                            <span class="logo-name">IDON<span  id="cs">TICS</span></span>
                        </a>
                        <p class="footer-info-text">
                         <strong id="p_style">{{ trans('welcome_trans.footer_info')}}</strong>
                        </p>
                         <div class="footer-social-link">
                            <h3 >{{ trans('welcome_trans.follow_us')}}</h3>
                            <ul>
                                <li>
                                    <a href="https://web.facebook.com/3D-Smart-Factory-116477416927577">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i id="wts" class="fa fa-whatsapp" ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i id="google" class="fa fa-google" ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/3dsmartfactory/about/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/3d_smart_factory/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        
                        <p id="pf_style">{{trans('welcome_trans.idontics_alig')}}</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6"  >
                            <div class="contact-us " id="map_me" >
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info " >
                                    <h3 id="visite">{{trans('welcome_trans.visite')}}</h3>
                                    <p id="p_style">{{trans('welcome_trans.address')}}</p>
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.5014122106813!2d-7.386577584794311!3d33.695972180704416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQxJzQ1LjUiTiA3wrAyMycwMy44Ilc!5e0!3m2!1sfr!2sma!4v1605175592994!5m2!1sfr!2sma" width="220" height="120" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info" id="call_me">
                                    <h3>{{trans('welcome_trans.call_us')}}</h3>
                                    <p id="p_style">05 23 30 04 46</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading" id="useful">
                                    <h3>{{trans('welcome_trans.footer_link')}}</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li >
                                        <a id="link_style" href="#video"><strong>{{trans('welcome_trans.about_us')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="https://www.csit.ma/"><strong>{{trans('welcome_trans.services')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="https://www.csit.ma/"><strong>{{trans('welcome_trans.projects')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="https://www.csit.ma/"><strong>{{trans('welcome_trans.team')}}</strong></a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a id="link_style" href="#contact"><strong>{{trans('welcome_trans.contact_us')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="https://www.csit.ma/"><strong>{{trans('welcome_trans.blog')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="https://www.csit.ma/"><strong>{{trans('welcome_trans.testimonials')}}</strong></a>
                                    </li>
                                    <li>
                                        <a id="link_style" href="#why-choose"><strong>{{trans('welcome_trans.faq')}}</strong></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading" >
                                    <h3 id="subscribe_div">{{trans('welcome_trans.subscribe')}}</h3>
                                    <span id="subscribe_div" class="animate-border border-black"></span>
                                </div>
                                <p id="subscribe_miss"><strong>{{trans('welcome_trans.subscribe_description')}}</strong>
                                </p>
                                <form action="#">
                                    <div class="form-row" id="em">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="{{trans('welcome_trans.email_adr')}}">
                                            <button  type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 " >
                        <span id="credit"><strong >IDONTICS © 2022 - <a  id="csit" href="https://www.csit.ma/">CSIT</a></strong></span>
                    </div>
                    <!-- End Col -->
                   
                   
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
       
</footer>