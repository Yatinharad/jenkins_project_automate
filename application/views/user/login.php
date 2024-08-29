    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-contact-video">
            <source src="assets/images/gym.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <!-- <h6>Join the League of Fitness: Empowering Young Adults through Holistic Health</h6> -->
                <h2></h2>
            </div>
        </div>
    </div>

<section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-xs-12">

                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    
                    <div class="contact-form">
                        <!-- <form id="contact" action="" method="post"> -->
                          <div class="row">
                            
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                           
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                              <input name="passwd" type="password" id="pass"  placeholder="Your Pass*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button" onclick="dologin()">Login</button>
                                <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <br>
        <p>
            New User  ? <a href="welcome/register"> click here </a> to register !
        </p>

            </div>
                              </fieldset>
                            </div>
                          </div>
                        <!-- </form> -->
                    </div>
                </div>
            
              </div>
           
            </div>
        </div>
    </section>

    <script type="text/javascript">
function dologin() {
  
  var user = $('#email').val();
  var pass = $('#pass').val();

 

  

  var objArray = new Array();
  var newObj = new Object();
  newObj.name = user;
  newObj.pass = pass;
  objArray.push(newObj);


  var postdata = JSON.stringify(objArray);
  postBack("welcome/doLogin", "postdata=" + postdata, function(response) {
      console.log(response);
      var output = JSON.parse(response);
      formSaved();
      if (output.status == true) {
         alert("Welcome to League of Fitness "+ user + "!");
         window.location="user";
      } else {
          alert("Oops Something went wrong ! ");
      }
  });
}

</script>