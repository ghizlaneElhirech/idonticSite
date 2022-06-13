 
 /*------------------------------*/
/*  Page loader
/*------------------------------*/


 $(window).load(function() {
    $(".loader-item").delay(1500).fadeOut();
    $("#pageloader").delay(500).fadeOut("highp");
    });


 /*------------------------------*/
/*  Slider
/*------------------------------*/

    setTimeout(function(){
        $('.home .flexslider').height($(window).height()).flexslider({
            slideshowSpeed: 6000,
            after : function(slider){
                $('.flexslider .big, .flexslider .middle, .flexslider .small').css('opacity',0);
                var next = $('.flex-active-slide', slider);
                sliderAnimate(next);
            }
        });
        $(window).resize(function(){
            $('.home .flexslider, .home .flexslider .slides img').height($(window).height());
        })
        sliderAnimate($('.flex-active-slide'));
        function sliderAnimate(next){
            if(next.hasClass('first')){
                var time = -200;
                $('.big', next).each(function(){
                    var thiz = $(this);
                    time += 200;
                    setTimeout(function(){                          
                        thiz.addClass('flipInX animated').css('opacity','1');
                        thiz.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            thiz.removeClass('flipInX animated');
                        });
                    }, time);
                });
                setTimeout(function(){
                    $('.middle', next).addClass('bounceIn animated').css('opacity','1');
                    $('.middle', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.middle', next).removeClass('bounceIn animated');
                    });
                    $('.small', next).addClass('fadeIn animated').css('opacity','1');
                    $('.small', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.small', next).removeClass('fadeIn animated');
                    });
                }, 400)
            }else if(next.hasClass('secondary')){

                $('.big', next).addClass('bounceInDown animated');
                $('.big', next).css('opacity','1');
                $('.big', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                    $('.big', next).removeClass('bounceInDown animated');
                });

                setTimeout(function(){
                    $('.middle', next).addClass('bounceInRight animated').css('opacity','1');
                    $('.middle', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.middle', next).removeClass('bounceInRight animated');
                    });
                    $('.small', next).addClass('bounceInLeft animated').css('opacity','1');
                    $('.small', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.small', next).removeClass('bounceInLeft animated');
                    });
                }, 400)
            }else if(next.hasClass('third')){
                var time = -200;
                $('.big', next).each(function(){
                    var thiz = $(this);
                    time += 200;
                    setTimeout(function(){                          
                        thiz.addClass('fadeInDown animated').css('opacity','1');
                        thiz.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            thiz.removeClass('fadeInDown animated');
                        });
                    }, time);
                });
                setTimeout(function(){
                    $('.middle', next).addClass('fadeInRight animated').css('opacity','1');
                    $('.middle', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.middle', next).removeClass('fadeInRight animated');
                    });
                    $('.small', next).addClass('fadeInLeft animated').css('opacity','1');
                    $('.small', next).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $('.small', next).removeClass('fadeInLeft animated');
                    });
                    
                }, 400)
            }
        }

        $('.flex-next').addClass('fa fa-angle-right').text('');
        $('.flex-prev').addClass('fa fa-angle-left').text('');

        $('.home li > img').each(function(){
            $(this).css('background-image', 'url(' + $(this).attr('src') + ')')
                   .attr('src', '../images/1x1-blue.png')
                   .height($(window).height());
        });
    },0)


/*------------------------------*/
/*  related project carousel
/*------------------------------*/


     $('.related-project-carousel').owlCarousel({
     autoPlay:3000,
     slideSpeed: 200,
      items : 4,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [979,3],
      stopOnHover:true,
      pagination:false,
      navigation : true,
       navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ],   

    });
    
    



/*------------------------------*/
/*   Parallax
/*------------------------------*/


    $(window).bind('load', function() {
        if(!onMobile)
        parallaxInit();
    });
    
    function parallaxInit() {
        $('#history').parallax("50%", 0.2);
        $('#facts').parallax("50%", 0.2);
        $('#cta').parallax("50%", 0.2);
        $('#skills').parallax("50%", 0.2);
        $('#video').parallax("50%", 0.2);
        $('#testimonials').parallax("50%", 0.2);
        $('#contact').parallax("50%", 0.2);
        $('#page-header').parallax("50%", 0.2);
        
        /*add as necessary*/
    }
        var onMobile = false;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            onMobile = true;
        }


/*-----------------------------------------------------
    Scroll Menu BG
-------------------------------------------------------*/
  
     $(window).scroll(function () {
         if ($("#header").offset().top > 50) {
             $("#header").addClass("menu-bg");
         } else {
             $("#header").removeClass("menu-bg");
         }
     });




/*------------------------------*/
/* Tab Carousel
/*------------------------------*/


     $(".tab-carousel").owlCarousel({
 
        navigation : false, // Show next and prev buttons
        slideSpeed : 400,
        pagination : false,
        singleItem:true,
        autoPlay: true,
        navigation : true,
         navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ] ,

 
    });




/*------------------------------*/
/* products Carousel
/*------------------------------*/


     $('.clients-carousel').owlCarousel({
     autoPlay:3000,
     slideSpeed: 200,
      items : 6,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [979,3],
      stopOnHover:true,
      pagination:false,
    });



/*------------------------------*/
/*  Smooth scroll
/*------------------------------*/


      (function($) { "use strict";
        $(".scroll a[href^='#']").on('click', function(e) {
           e.preventDefault();
           var hash = this.hash;
           $('html, body').stop().animate({
               scrollTop: $(hash).offset().top}, 2000, 'easeOutExpo');
        });
         })(jQuery);

        $('.collapse ul li a').click(function(){ 
        $('.navbar-toggle:visible').click();
       });  



/*------------------------------*/
/* Pie Chart
/*------------------------------*/

$('.pie-chart').appear();
jQuery(document).on('appear', '.pie-chart',  function()  {
    $('.pie-chart').easyPieChart({
        easing: 'easeOutBounce',
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        },

        trackColor: '#FFF',
        barColor: '#25d6eb',
        scaleColor: '',
        lineWidth:10,
        lineCap:'circle',
        animate: 2000
    });
    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function() {
        chart.update(Math.random()*200-100);
    });
});


/*------------------------------*/
/*  Scroll to top
/*------------------------------*/
     
    $(window).scroll(function(){
                    if ($(this).scrollTop() > 100) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                }); 
         
                $('.scrollup').click(function(){
                    $("html, body").animate({ scrollTop: 0 }, 2000);
                    return false;
                });
/*------------------------------*/
/*  Scroll and fade
/*------------------------------*/

       window.addEventListener('scroll', reveal );
       function reveal() {
        var reveals = document.querySelectorAll('.reveal');
        
        for(var i = 0; i < reveals.length; i++) {
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;
            
            if(revealtop < windowheight - revealpoint) {
                reveals[i].classList.add('active');
            }
             else {
                reveals[i].classList.remove('active');
             }
        }
       }
      
       
 /*------------------------------*/
/*  3D animation firs image class dent1
/*------------------------------*/
function showdent1(){
/*const scene = new THREE.Scene();
                                    
 //load in texture 
 const layer0 = new THREE.TextureLoader().load('images/demo/Protrusion.png');
                                    
  //bind to texture materiel 
  const layer0_material = new THREE.MeshBasicMaterial({
  map: layer0,
  transparent: true,
            opacity: 1
                                        
                                 });
                                    
  //create geometry
   const layer0_plane = new THREE.PlaneGeometry(1,1);
                                    
   // bind the material and geometry into a mesh
    let img_width  = 250;
    let img_height = 120;
                                    
    const layer0_mesh = new THREE.Mesh(layer0_plane,layer0_material);
    layer0_mesh.position.set(0,0,0);
    layer0_mesh.scale.set(img_width , img_height , 0);
    //add mesh to scene
    scene.add(layer0_mesh);
                                    
    //create a camera
    let aspect_ratio = window.innerWidth / window.innerHeight;
    const camera = new THREE.PerspectiveCamera(75,aspect_ratio,0.1,10000);
    camera.position.z = 100;
                                    
    //create renderer
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(500 , 300);
    renderer.setClearColor( 0xffffff, 0);
                                    
    document.querySelector('.dent1').appendChild(renderer.domElement);
    let mouse_pos = 0;
                                    
   function animate() {
    requestAnimationFrame(animate);
    camera.position.x = mouse_pos * 0.07 ;
    camera.position.y = mouse_pos * 0.07 ;
                                          
    camera.lookAt(scene.position);
    renderer.render(scene,camera);
                                        
    };
    animate();
    document.addEventListener('mousemove',event => {
    mouse_pos = event.pageX - (window.innerWidth / 2);
    });*/
    
    
    // Get the modal
var modal = document.getElementById('videoun');

// Get the button that opens the modal
var btn = document.getElementById("watchbutton");

var trailer = document.getElementById('videounun');

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  trailer.setAttribute('src', trailer.getAttribute('data-src'));
}

var trailerbox = document.getElementById("close");

trailerbox.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
                                   
}


 /*------------------------------*/
/*  3D animation firs image class dent2
/*------------------------------*/
function showdent2(){
    
        // Get the modal
var modal = document.getElementById('videodeux');

// Get the button that opens the modal
var btn = document.getElementById("watchbuttontwo");

var trailer = document.getElementById('videodeuxdeux');

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  trailer.setAttribute('src', trailer.getAttribute('data-src'));
}

var trailerbox = document.getElementById("close");

trailerbox.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

}
 /*------------------------------*/
/*  3D animation firs image class dent3
/*------------------------------*/
function showdent3(){
    // Get the modal
var modal = document.getElementById('videotrois');

// Get the button that opens the modal
var btn = document.getElementById("watchbuttonthree");

var trailer = document.getElementById('videotroistrois');

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  trailer.setAttribute('src', trailer.getAttribute('data-src'));
}

var trailerbox = document.getElementById("close");

trailerbox.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
                                   
}


 /*------------------------------*/
/*  3D animation firs image class dent4
/*------------------------------*/
function showdent4(){
    // Get the modal
var modal = document.getElementById('videoquatre');

// Get the button that opens the modal
var btn = document.getElementById("watchbuttonfour");

var trailer = document.getElementById('videoquatrequatre');

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  trailer.setAttribute('src', trailer.getAttribute('data-src'));
}

var trailerbox = document.getElementById("close");

trailerbox.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
                                   
}

 /*------------------------------*/
/*  3D animation firs image class dent4
/*------------------------------*/
function showdent5(){

    // Get the modal
var modal = document.getElementById('videocinq');

// Get the button that opens the modal
var btn = document.getElementById("watchbuttonfive");

var trailer = document.getElementById('videocinqcinq');

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  trailer.setAttribute('src', trailer.getAttribute('data-src'));
}

var trailerbox = document.getElementById("close");

trailerbox.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}                                   
}


//plyloader
function plyDent(){
    var renderer;
    function initRender() {
        renderer = new THREE.WebGLRenderer({antialias:true});
        renderer.setSize(window.innerWidth, window.innerHeight);
        //Tell the renderer you need shadow effects
        renderer.setClearColor(0xffffff);
        document.querySelector('.dentt').appendChild(renderer.domElement);
    }

    var camera;
    function initCamera() {
        camera = new THREE.PerspectiveCamera(45, window.innerWidth/window.innerHeight, 0.1, 1000);
        camera.position.set(0, 40, 50);
        camera.lookAt(new THREE.Vector3(0,0,0));
    }

    var scene;
    function initScene() {
        scene = new THREE.Scene();
    }

    //Initialize dat.GUI to simplify the test process
    var gui;
    function initGui() {
        //Declare an object to save the relevant data of the requirement modification
        gui = {
        };
        var datGui = new dat.GUI();
        //Add the setting attribute to the GUI, gui.add (object, attribute, min, max)
    }

    var light;
    function initLight() {
        scene.add(new THREE.AmbientLight(0x444444));

        light = new THREE.PointLight(0xffffff);
        light.position.set(0,50,50);

        //Tell directional light to turn on shadow casting
        light.castShadow = true;

        scene.add(light);
    }

    function initModel() {

        //Auxiliary tools
        var helper = new THREE.AxesHelper(50);
        scene.add(helper);

        var loader = new THREE.PLYLoader();
        loader.load("images/teeth.ply", function (geometry) {

            //Update normal vector of vertex
            geometry.computeVertexNormals();

            //Create a texture and add the model to the scene channel
            var material = new THREE.MeshStandardMaterial( { color: 0x0055ff, flatShading: true } );
            var mesh = new THREE.Mesh( geometry, material );
            mesh.rotation.y = Math.PI;
            mesh.scale.set(0.05, 0.05, 0.05);
            scene.add( mesh );
        });
    }

    //Initialize performance plug-ins
    var stats;
    function initStats() {
        stats = new Stats();
        document.querySelector('.dentt').appendChild(stats.dom);
    }

    //User interaction plug in left mouse button press and hold rotation, right mouse button press and hold translation, scroll wheel zoom
    var controls;
    function initControls() {

        controls = new THREE.OrbitControls( camera, renderer.domElement );

        // If you use the animate method, delete this function
        //controls.addEventListener( 'change', render );
        // Whether there is inertia in the meaning of damping or rotation when the animation is recycled
        controls.enableDamping = true;
        //Dynamic damping coefficient is the mouse drag rotation sensitivity
        //controls.dampingFactor = 0.25;
        //Can I zoom
        controls.enableZoom = true;
        //Auto rotate or not
        controls.autoRotate = true;
        controls.autoRotateSpeed = 0.5;
        //Set the maximum distance between the camera and the origin
        controls.minDistance  = 1;
        //Set the maximum distance between the camera and the origin
        controls.maxDistance  = 200;
        //Enable right drag
        controls.enablePan = true;
    }

    function render() {

        renderer.render( scene, camera );
    }

    //Function triggered by window change
    function onWindowResize() {

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        render();
        renderer.setSize( window.innerWidth, window.innerHeight );

    }

    function animate() {
        //Update controller
        render();

        //Update performance plug-ins
        stats.update();

        controls.update();

        requestAnimationFrame(animate);
    }

    function draw() {
        initGui();
        initRender();
        initScene();
        initCamera();
        initLight();
        initModel();
        initControls();
        initStats();

        animate();
        window.onresize = onWindowResize;
    }
}