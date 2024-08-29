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
               
                <div class="col-lg-12 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <!-- <form id="contact" action="" method="post"> -->
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="phone" placeholder="Your Phone*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="pass" pattern="[^ @]*@[^ @]*" placeholder="Your Pass*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button" onclick="addUser()">Register Me ! </button>
                              </fieldset>
                            </div>
                          </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
function addUser() {
  
  var user_name = $('#name').val();
  var useremail = $('#email').val();
  var user_pass= $('#pass').val();
  var user_phone = $('#phone').val();

 

  

  var objArray = new Array();
  var newObj = new Object();
  newObj.name = user_name;
  newObj.email = useremail;
  newObj.phone =user_phone;
  newObj.pass = user_pass;
  

 

  newObj.flag = 0;
  objArray.push(newObj);


  var postdata = JSON.stringify(objArray);
  postBack("welcome/adduser", "postdata=" + postdata, function(response) {
      console.log(response);
      var output = JSON.parse(response);
      formSaved();
      if (output.status == true) {
         alert("Welcome to League of Fitness "+ user_name + "!");
         window.location="welcome/login";
      } else {
          alert("Oops Something went wrong ! ");
      }
  });
}

</script>