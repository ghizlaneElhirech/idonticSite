<!doctype html>


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>IDONTICS | Site</title>
    
    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">        
        
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
   
     <!--styles --> 
     @include('Welcomes.styles') 
     
     <!--endStyle-->


    
    <body  data-spy="scroll" data-target="#main-menu" >
 
  <!--Start Page loader -->
<!--  <div id="pageloader" >   
        <div class="loader">
           <img src="images/progress.gif" alt='loader' />
         
        </div> 
        
   </div> -->
   <!--End Page loader -->
 
      
   <!--Start Navigation-->
      @include('Welcomes.header')
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div id="link_style" class="big">{{trans('welcome_trans.site')}} IDONTICS </div>          
                                <div id="link_style"   class="small">{{trans('welcome_trans.moderne')}}</div>
                                <a id="link_style"  href="#services" class="middle btn btn-white" >{{trans('welcome_trans.prof')}}</a>
                                <a id="link_style"  href="#about" class="middle btn btn-white">{{trans('welcome_trans.particular')}}</a>
                            </div>       
                        </div>
                        <img src="images/slider/smile.png" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div id="link_style"  class="big">{{trans('welcome_trans.site')}} IDONTICS </div>          
                                <div id="link_style"  class="small">{{trans('welcome_trans.moderne')}}</div>
                                <a  id="link_style" href="#services" class=" middle btn btn-white">{{trans('welcome_trans.prof')}}</a>
                                 <a  id="link_style" href="#about" class="middle btn btn-white">{{trans('welcome_trans.particular')}}</a>
                            </div>
                         </div>
                        <img src="images/slider/slider2.jpg" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                              
                                <div id="link_style" class="big">{{trans('welcome_trans.site')}} IDONTICS </div>          
                                <div  id="link_style" class="small">{{trans('welcome_trans.moderne')}}</div>
                                <a id="link_style"  href="#services" class="middle btn btn-white">{{trans('welcome_trans.prof')}}</a>
                                 <a id="link_style"  href="#about" class="middle btn btn-white">{{trans('welcome_trans.particular')}}</a>
                             </div>
                        </div>
                        <img src="images/slider/slider3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->
          
        <section id="video" class="section parallax">
          <div class="overlay"></div>
       <div class="container reveal">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title" >{{trans('welcome_trans.about_us')}}</h2>
                 </div>
             
             <div class="col-md-6">
                 <div class="video-caption-main">
                      <!--Video caption #1-->
                      <div class="video-caption">
                          <div class="video-icon">
                            <img src="../images/logo.png">
                          </div>
                          <div class="video-caption-info">
                              <h4 id="vidCaption1">{{trans('welcome_trans.video_caption')}}</h4>
                              <p  class="more_info">{{trans('welcome_trans.video_caption_info')}}</p>
                          </div>
                      </div>
                      
                       <!--Video caption #2-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <img src="../images/logo.png">
                          </div>
                          <div class="video-caption-info">
                              <h4 id="vidCaption2">{{trans('welcome_trans.video_caption_2')}}</h4>
                              <p  class="more_info">{{trans('welcome_trans.video_caption_info_2')}}</p>
                          </div>
                      </div>

                 
                      
                 </div>
             </div>
         </div>
         </div>
    


            <!-- End Video caption-->
             
            <div class="col-md-6">
                <!-- <div class="play-video">
                  <iframe src="../images/videodemo.mp4" allowfullscreen autostart="false" preload="none"></iframe>
                </div> -->
            </div> 
               
           </div> <!-- /.row-->
       </div> <!-- /.container-->
        </section>
       



  <!--Start Features-->
  <section  id="about" class="section">
       <div class="container reveal">
           <div class="row">
            <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.strong_points')}}</h2>
                 </div>
                 <br><br>
              
              
            <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                       <img src="../images/icon/ribbon.png"/>
                      </div> 
                      
                      <div class="features-info">
                         <h4>{{trans('welcome_trans.comfortable')}}</h4>
                         <p  id="p_style">{{trans('welcome_trans.comfortable_info')}}</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
               <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                       <img src="../images/icon/rechercher.png"/>
                      </div>
                      
                      <div class="features-info">
                         <h4>{{trans('welcome_trans.transparents')}}</h4>
                         <p id="p_style">{{trans('welcome_trans.transparents_info')}}</p>
                      </div>
                  </div>
              </div> 

               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <img src="../images/icon/random.png"/>
                      </div>
                      
                      <div class="features-info">
                         <h4>{{trans('welcome_trans.Removable')}}</h4>
                         <p id="p_style">{{trans('welcome_trans.Removable_info')}}</p>
                      </div>
                  </div>
              </div> 
 
             

              
          </div> <!-- /.row-->
       </div>  <!-- /.container-->
  </section> 
  <!--End Features-->


 
  <!--Start Services-->
   <section id="services" class="section">
        <div class="container reveal ">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.section4_title')}}</h2>
                 </div>
                <p id="service_title">{{trans('welcome_trans.section4_title_info')}}</p>
               <!--Services Item-->
                <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon"><img src="../images/Artboard1 – 1.png" class="img_services" /> </div> 
                       <div class="services-desc">
                          <h4>1.{{trans('welcome_trans.footprint')}}</h4>
                          <p id="p_style">{{trans('welcome_trans.footprint_info')}}</p>
                       </div>
                   </div>
               </div> 
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon"> <img src="../images/slider/2.jpg" class="img_services" />  </div> 
                       <div class="services-desc">
                          <h4>2. {{trans('welcome_trans.consultation')}}</h4>
                          <p id="p_style">{{trans('welcome_trans.consultation_info')}}</p>
                       </div>
                   </div>
               </div> 
               
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon"> <img src="../images/slider/3.jpg" class="img_services" />  </div> 
                       <div class="services-desc">
                          <h4>3. {{trans('welcome_trans.treatment')}}</h4>
                          <p id="p_style">{{trans('welcome_trans.treatment_info')}}

                          </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
               <!--Services Item -->
              <div class="col-md-6" >
                   <div class="services-box">
                       <div class="services-icon"> <img src="../images/slider/1.jpg" class="img_services" />  </div> 
                       <div class="services-desc">
                          <h4>4. {{trans('welcome_trans.finish')}}</h4>
                          <p id="p_style">{{trans('welcome_trans.finish_info')}}</p>
                       </div>
                   </div>
               </div> 
               <!--End services Item-->

              
             </div>  <!--/.row-->
         </div>  <!--/.container-->
   </section>  
  <!--End Services-->
  
  
 <!--Start Services-->
   <section id="services" class="section">
        <div class="container reveal ">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.section5_title')}}</h2>
                 </div>
                <p id="service_title">{{trans('welcome_trans.section5_title_info')}}</p>
               <!--Services Item-->
                <div class="col-md-4 services-box-all">
                   <div class="services-box" id="service_age1">
                       <div class="services-icon" ><img id="young" src="../images/Enfants.png"/> </div> 
                       <div class="services-desc">
                          <h4><strong>{{trans('welcome_trans.young')}}</strong></h4>
                          
                       </div>
                   </div>
               </div> 
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4 services-box-all">
                   <div class="services-box" id="service_age2">
                       <div class="services-icon"> <img id="adulte"src="../images/Adulte.jpeg"/>  </div> 
                       <div class="services-desc">
                          <h4><strong>{{trans('welcome_trans.adulte')}}</strong></h4>
                          
                       </div>
                   </div>
               </div> 
               
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4 services-box-all">
                   <div class="services-box" id="service_age3">
                       <div class="services-icon"> <img id="old"src="../images/Age.jpeg"/>  </div> 
                       <div class="services-desc">
                          <h4><strong>{{trans('welcome_trans.old')}}</strong></h4>
                        
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
            

              
             </div>  <!--/.row-->
         </div>  <!--/.container-->
   </section>  
  <!--End Services-->


 <!--Start Services-->
   <section id="services" class="section">
        <div class="container reveal ">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.section6_title')}}</h2>
                 </div>
                
               <!--Services Item-->
                <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement1">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.visible_evolution')}}</h4>
                          <p id="p_style" class="p_style">{{trans('welcome_trans.visible_evolution_info')}}</p>
                       </div>
                   </div>
               </div> 
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement2">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.dieting')}}</h4>
                          <p id="p_style" class="p_style">{{trans('welcome_trans.dieting_info')}}</p>
                       </div>
                   </div>
               </div> 
               
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement3">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.perfect_dental')}}</h4>
                          <p id="p_style" class="p_style">{{trans('welcome_trans.perfect_dental_info')}}
                          </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                <!--Services Item-->
                <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement4">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.no_pain')}}</h4>
                          <p id="p_style" class="p_style">{{trans('welcome_trans.no_pain_info')}}</p>
                       </div>
                   </div>
               </div> 
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement5">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.urgence')}}</h4>
                          <p id="p_style" class="p_style"> {{trans('welcome_trans.urgence_info')}}</p>
                       </div>
                   </div>
               </div> 
               
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4 services-box-all-two">
                   <div class="services-box services-box-grey" id="serviceTreatement6">
                       
                       <div class="services-desc">
                          <h4>{{trans('welcome_trans.flexible')}}</h4>
                          <p id="p_style" class="p_style">{{trans('welcome_trans.flexible_info')}}
                          </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
           

              
             </div>  <!--/.row-->
         </div>  <!--/.container-->
   </section>  
  <!--End Services-->
  
   <section  id="about" class="section">
       <div class="container reveal ">
           <div class="row">
            <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.section7_title')}}</h2>
                 </div>
                 <br><br>
              
              
            <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                       <img src="../images/icon/arrow.png"/>
                      </div> 
                      
                      <div class="features-info">
                         
                         <p id="p_style">{{trans('welcome_trans.section7_info')}}</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
               <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                       <img src="../images/icon/arrow.png"/>
                      </div>
                      
                      <div class="features-info">
                         
                         <p id="p_style">{{trans('welcome_trans.section7_info')}}</p>
                      </div>
                  </div>
              </div> 

               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <img src="../images/icon/arrow.png"/>
                      </div>
                      
                      <div class="features-info">
                         
                         <p id="p_style">{{trans('welcome_trans.section7_info')}}</p>
                      </div>
                  </div>
              </div> 
 
             

              
          </div> <!-- /.row-->
       </div>  <!-- /.container-->
  </section> 
  <!--End Features-->




 
     <!--Start Why Choose us-->

   <section id="why-choose" class="section">
       <div class="container reveal ">
           <div class="row">
           
                 <div class="title-box text-center">
                    <h2 class="title">{{trans('welcome_trans.faq_8')}}</h2>
                 </div>
              
          
           
        <div class="col-md-12 accordion_one">
            <div class="panel-group">
              @foreach($questions as $question)
                    <div class="panel panel-default">
 
                        <!-- button to show the question -->
                        <div class="panel-heading" style="background-color:transparent;">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-{{$question->id}}" aria-expanded="false" class="collapsed" >
                                    {{$question->question}}
                                </a>
                            </h4>
                        </div>
 
                        <!-- accordion for answer -->
                        <div id="faq-{{$question->id}}" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body">
                                <div class="text-accordion">
                                    {{$question->reply}}
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>




              
           </div> 
       </div> 
  </section>
  <!--End Why Choose us-->
  
  
  
 
    <!--Start clients-->
    
     <section id="clients" class="section">
           <div class="container reveal ">
               <div class="row">
               
            <div class="title-box text-center">
                <h2 class="title">{{trans('welcome_trans.our_products')}}</h2>
             </div>
             
                
                   <div class="clients-carousel"> 
                   
                       <!-- Clients Logo Item-->
                           @foreach ($products as $product)
                        <div class="item">
                            
                                <figure>
                                   
                                 <img src="{{asset('/storage/images/products/'.$product->image)}}">
                                  
                                  
                                </figure>
                            
                        </div>
                        @endforeach
                      
                   </div>
                   
               </div>  <!--/.row-->
         </div>  <!--/.container-->
    </section> 
   
   <!--End clients-->
   
   
   
   
  <!--faq--------------------->
  
  
   <section class="section-padding exp-pricing-plans " id="works">
        <div class="container reveal ">
            <div class="tab-content clearfix">

                <div class="row ">
                     <div class="title-box text-center">
                      <h2 class="title">{{trans('welcome_trans.alignement')}}</h2>
                     </div>

                    <div class="col-lg-4 col-md-8 mx-auto" id="close">

                        <div class="exp-pricing-plans-inner shadow-hover before-none">
                            <div class="exp-pricing-plans-top " id="videoun">
                                
                               <!--  <h6 class="dent1 dent"></h6> -->
                                <h6 class=" dentt"></h6>
                                  

                                  
                               
                               
                               <div class="sketchfab-embed-wrapper"> <iframe id="videounun" title="Teeth" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="200" data-src="https://sketchfab.com/models/443a9a2d7ecc4f37b7f5ba6b9ec34812/embed?autospin=1&autostart=1&preload=1&dnt=1"> </iframe> </div>
                               

                            </div>


                        </div>

                    </div>

                    <div class=" col-md-6 mx-auto animate__animated animate__fadeInLeft">


                        <div class=" exp-pricing-plans-top animate__animated animate__fadeInLeft reveal" id="videodeux">
                            <br>
                            <h4 class="heading reveal">{{trans('welcome_trans.dental')}}</h4>
                            <p id="p_style" class="text_alignement reveal">
                               {{trans('welcome_trans.dental_info')}}
                            </p>
                            <button id="watchbutton" onclick="showdent1()" class=" btn btnStory">{{trans('welcome_trans.show_mouth')}} </button>
                        </div>

                    </div>
                </div>

                <div class="row ">

                    <div class=" col-md-6 mx-auto animate__animated animate__fadeInLeft">


                        <div class=" exp-pricing-plans-top animate__animated animate__fadeInLeft">
                            <br>
                            <h4 class="heading">{{trans('welcome_trans.minor_open')}}</h4>
                            <p id="p_style" class="text_alignement reveal">
                                {{trans('welcome_trans.minor_open_info')}}

                            </p>
                            <br><br><br><br><br>
                            <button  id="watchbuttontwo" onclick="showdent2()" class="btn btnStory">{{trans('welcome_trans.show_mouth')}} </button>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-8 mx-auto" id="close">

                        <div class="exp-pricing-plans-inner shadow-hover before-none" id="videodeux">
                            <div  class="exp-pricing-plans-top">
                                <h6 class="dent2 dent"></h6>
                                   <div class="sketchfab-embed-wrapper"> <iframe id="videodeuxdeux" title="07 03 2022-A F-lowerjaw" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share data-src="https://sketchfab.com/models/57d419ad0adb48fc982de548c7632182/embed?autospin=1&autostart=1&preload=1" width="300" height="200"> </iframe> 

                            </div>


                        </div>

                    </div>


                </div>

                <div class="row ">

                    <div class="col-lg-4 col-md-8 mx-auto" id="close">

                        <div class="exp-pricing-plans-inner shadow-hover before-none">
                            <div class="exp-pricing-plans-top " id="videotrois">
                                <h6 class="dent3 dent"></h6>
                                <div class="sketchfab-embed-wrapper"> 
                                    <iframe  id="videotroistrois" title="Teeth" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="200" data-src="https://sketchfab.com/models/443a9a2d7ecc4f37b7f5ba6b9ec34812/embed?autospin=1&autostart=1&preload=1&dnt=1"> </iframe> 
                              
                                
                             
                             
                             
                             </div>
                             

                            </div>


                        </div>

                    </div>

                    <div class=" col-md-6 mx-auto animate__animated animate__fadeInLeft">


                        <div class=" exp-pricing-plans-top animate__animated animate__fadeInLeft">
                            <br>
                            <h4 class="heading">{{trans('welcome_trans.congestion')}}</h4>
                            <p id="p_style" class="text_alignement reveal">
                                {{trans('welcome_trans.congestion_info')}}

                            </p>
                            <button id="watchbuttonthree" onclick="showdent3()" class="btn btnStory">{{trans('welcome_trans.show_mouth')}} </button>
                        </div>

                    </div>
                </div>

                <div class="row ">

                    <div class=" col-md-6 mx-auto animate__animated animate__fadeInLeft">


                        <div class=" exp-pricing-plans-top animate__animated animate__fadeInLeft">
                            <br> <br> <br>
                            <h4 class="heading">{{trans('welcome_trans.cross')}} </h4>
                            <p id="p_style" class="text_alignement reveal">
                             {{trans('welcome_trans.cross_info')}} 
                            </p>
                            <button id="watchbuttonfour" onclick="showdent4()" class="btn btnStory">{{trans('welcome_trans.show_mouth')}} </button>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-8 mx-auto " id="close">

                        <div class="exp-pricing-plans-inner shadow-hover before-none">
                            <div class="exp-pricing-plans-top" id="videoquatre">
                                <h6 class="dent4 dent"></h6>
                                <div class="sketchfab-embed-wrapper"> <iframe id="videoquatrequatre" title="Teeth" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="200" data-src="https://sketchfab.com/models/443a9a2d7ecc4f37b7f5ba6b9ec34812/embed?autospin=1&autostart=1&preload=1&dnt=1"> </iframe> </div>

                            </div>


                        </div>

                    </div>


                </div>

                <div class="row ">

                    <div class="col-lg-4 col-md-8 mx-auto" id="close">

                        <div class="exp-pricing-plans-inner shadow-hover before-none">
                            <div class="exp-pricing-plans-top" id="videocinq">
                                <h6 class="dent5 dent"></h6>
                                <div class="sketchfab-embed-wrapper"> <iframe id="videocinqcinq"  title="Teeth" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="200" data-src="https://sketchfab.com/models/443a9a2d7ecc4f37b7f5ba6b9ec34812/embed?autospin=1&autostart=1&preload=1&dnt=1"> </iframe> </div>

                            </div>


                        </div>

                    </div>

                    <div class=" col-md-6 mx-auto animate__animated animate__fadeInLeft">


                        <div class=" exp-pricing-plans-top animate__animated animate__fadeInLeft">
                            <br> <br>
                            <h4 class="heading">{{trans('welcome_trans.recurrent')}}  </h4>
                            <p  id="p_style" class="text_alignement reveal">
                             {{trans('welcome_trans.recurrent_info')}} 
                            </p>
                            <button id="watchbuttonfive" onclick="showdent5()" class="btn btnStory">{{trans('welcome_trans.show_mouth')}} </button>
                        </div>

                    </div>
                </div>

                <div class="row ">

                   

                </div>
                <div class="row ">

                    
                </div>

               

              

            </div>
            <!-- PROFFEssionneel -->



        </div>

    </section>
    <br>
   
   
   
   
   
   <!--Start Contact-->
   <section id="contact" class="section parallax">
      <div class="overlay"></div>
       <div class="container reveal ">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">{{trans('welcome_trans.contact')}}</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
              
                    <div class="contact-info text-center">
                   
                    </div>
                     
                     <form method="post" action="{{ route('visitors.store') }}">
                        @csrf
                        <cdcddiv class="row">
                            <div class="col-md-4">
                                <input class="form-control" id="full_name" placeholder="{{trans('welcome_trans.full_name')}}" name="full_name" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="email" name="email" placeholder="{{trans('welcome_trans.email')}}" type="email">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="sujet" name="sujet" placeholder="{{trans('welcome_trans.subject')}}" type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="message" rows="7" placeholder="{{trans('welcome_trans.message')}}"></textarea>
                            </div>
                            <div class="col-md-4">
                                  <select class="form-control form-control-lg"
                                                            id="exampleFormControlSelect1" name="type_id">
                                                       
                                                        @foreach ($types as $type)
                                                            <option id="option_client" value="{{ $type->id }}">
                                                                {{ $type->type_visitor }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                             
                                
                                
                            </div>
                            <div class="col-md-12 text-right">
                                <button id="btnSubmit" type="submit" class="btn e-primary" > {{trans('welcome_trans.send_message')}}</button>
                            </div>
                        </div>
                    </form>
               </div>
              <!--End contact form-->

              
       </div> <!-- /.container-->
   </section>
   <!--End Contact-->
   
   
   <!--Start Footer-->
   
    @include('Welcomes.footer')
    
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
    @include('Welcomes.scripts')
 </div>
 
 </body>
</html>

