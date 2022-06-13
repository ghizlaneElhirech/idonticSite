<!DOCTYPE html>
<html> 
  <head>
    <meta charset="UTF-8" />
    <title>Page Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
   
  
    <script src="js/three.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link class="icon" rel="icon" href="{{URL::asset('../images/logo.png')}}">
    <script src="js/postprocessing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <body>
     <form method="POST" action="{{ route('login') }}">
       @csrf
     <div class="login-div">
      <div class="row">
        <div class="logo"></div>
      </div>
      <div class="row center-align">
        <h5>Log in</h5>
        <h6>Adminstrator </h6>
      </div>
  

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="validate">
          <label for="email_input">Email</label>
                                   @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="validate">
          <label for="password_input">Password</label>
          
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
          <div><a href="{{ route('password.request') }}"><b>Forgot password?</b></a></div>
          
        </div>
      </div>
      <div class="row">
        <div class="col s12">Not your computer? Use a Private Window to sign in. <a href="#"><b>Learn more</b></a></div>
      </div>
      <div class="row"></div>
      <div class="row">
        <div class="col s6"><a href="#"></a></div>
       <button id="btn_log"> <div  class="col s6 right-align"><a class="waves-effect waves-light btn">Login</a></div></button>
      </div>
 
    </div>
     </form>
   
    <script>
      let scene, camera, cloudParticles = [],composer;

      function init() {
        scene = new THREE.Scene();
        camera = new THREE.PerspectiveCamera(60,window.innerWidth / window.innerHeight,1,1000);
        camera.position.z = 1;
        camera.rotation.x = 1.16;
        camera.rotation.y = -0.12;
        camera.rotation.z = 0.27;

        let ambient = new THREE.AmbientLight(0x555555);
        scene.add(ambient);

        let directionalLight = new THREE.DirectionalLight(0xff8c19);
        directionalLight.position.set(0,0,1);
        scene.add(directionalLight);

        let orangeLight = new THREE.PointLight(0xcc6600,50,450,1.7);
        orangeLight.position.set(200,300,100);
        scene.add(orangeLight);
        let redLight = new THREE.PointLight(0xd8547e,50,450,1.7);
        redLight.position.set(100,300,100);
        scene.add(redLight);
        let blueLight = new THREE.PointLight(0x3677ac,50,450,1.7);
        blueLight.position.set(300,300,200);
        scene.add(blueLight);

        renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth,window.innerHeight);
        scene.fog = new THREE.FogExp2(0x03544e, 0.001);
        renderer.setClearColor(scene.fog.color);
        document.body.appendChild(renderer.domElement);

        let loader = new THREE.TextureLoader();
        loader.load("images/smoke.png", function(texture){
          cloudGeo = new THREE.PlaneBufferGeometry(500,500);
          cloudMaterial = new THREE.MeshLambertMaterial({
            map:texture,
            transparent: true
          });

          for(let p=0; p<50; p++) {
            let cloud = new THREE.Mesh(cloudGeo, cloudMaterial);
            cloud.position.set(
              Math.random()*800 -400,
              500,
              Math.random()*500-500
            );
            cloud.rotation.x = 1.16;
            cloud.rotation.y = -0.12;
            cloud.rotation.z = Math.random()*2*Math.PI;
            cloud.material.opacity = 0.55;
            cloudParticles.push(cloud);
            scene.add(cloud);
          }
        });
        loader.load("images/stars.jpg", function(texture){

          const textureEffect = new POSTPROCESSING.TextureEffect({
            blendFunction: POSTPROCESSING.BlendFunction.COLOR_DODGE,
            texture: texture
          });
          textureEffect.blendMode.opacity.value = 0.2;

          const bloomEffect = new POSTPROCESSING.BloomEffect({
                blendFunction: POSTPROCESSING.BlendFunction.COLOR_DODGE,
                kernelSize: POSTPROCESSING.KernelSize.SMALL,
                useLuminanceFilter: true,
                luminanceThreshold: 0.3,
                luminanceSmoothing: 0.75
              });
          bloomEffect.blendMode.opacity.value = 1.5;

          let effectPass = new POSTPROCESSING.EffectPass(
            camera,
            bloomEffect,
            textureEffect
          );
          effectPass.renderToScreen = true;

          composer = new POSTPROCESSING.EffectComposer(renderer);
          composer.addPass(new POSTPROCESSING.RenderPass(scene, camera));
          composer.addPass(effectPass);
          
          window.addEventListener("resize", onWindowResize, false);
          render();
        });
      }
      function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
      }
      function render() {
        cloudParticles.forEach(p => {
          p.rotation.z -=0.001;
        });
        composer.render(0.1);
        requestAnimationFrame(render);
      }
      init();
    </script>
  </body>
</html>
