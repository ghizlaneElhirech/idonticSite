  <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--Start Logo --> 
                            <div class="logo-nav">
                                <a href="#">
                                     <img class="image_logo" src="images/logo.png" alt="Company logo" /><span class ="logo-name"  id="logo_name">IDON<span  id="cs">TICS</span> </p>
                                </a>
                            </div>
                            <!--End Logo -->
                            <div class="clear-toggle"></div>
                            <div id="main-menu" class="collapse scroll navbar-right">
                                <ul class="nav">
                                
                                    <li class="active"> <a href="#home" >{{trans('welcome_trans.home')}}</a> </li>
                                    
                                    <li> <a href="#video" >{{trans('welcome_trans.about')}}</a> </li>
                                    
                                    
                                    <li> <a href="#works" >{{trans('welcome_trans.alignement')}}</a> </li>
                                
                                   
                                    <li> <a href="#why-choose">{{trans('welcome_trans.faq')}}</a> </li>
                           
                                     
                                    <li> <a href="#contact"  >{{trans('welcome_trans.contact')}}</a> </li>
                                    <li> <a href="{{route('login')}}"  >Dashboard</a> </li>
                                    
                               
                                   <div class="btn-group mb-1">
                                   <button id="btn_lang" type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (App::getLocale() == 'ar')
                                   {{ LaravelLocalization::getCurrentLocaleName() }}
                                   <img src="{{ URL::asset('assets/images/flags/SA.png') }}" alt="">
                                    @elseif(App::getLocale() == 'fr')
                                   {{ LaravelLocalization::getCurrentLocaleName() }}
                                   <img src="{{ URL::asset('assets/images/flags/FR.png') }}" alt="">
                                    @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                                    @endif
                                  </button>
                                  <div class="dropdown-menu">
                                   @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                   <li id="li_lang">
                                  <a class="dropdown-item" id="lang_header" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                 {{ $properties['native'] }}
                                  </a>
                              </li>
                                  @endforeach
                                 </div>
                                 </div>

                        
                             
                                        
                                </ul>
                                
                            </div><!-- end main-menu -->
                        </div>
                    </div>
                </div>
            

    </header>