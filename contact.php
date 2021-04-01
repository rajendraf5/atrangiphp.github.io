<?php include("header.php");?>
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('assets/images/slider2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Contact</h1>
        </div>
      </div>
    </div>
</div>

<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3668.248080794841!2d79.92661211495904!3d23.16114406694688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3981ae1b22d034f9%3A0xd91d9d76aef3198a!2sRebanta%20Academy%20of%20Design%20-%20Fashion%20%7C%20Interior%20%7C%20Photography%20%7C%20NID%20%2C%20NIFT%20%2C%20UCEED%20Institute%20%7C%20Classes%20%7C%20Franchise%20-%20Jabalpur(Madhya%20Pradesh)%2C%20Ground%20floor%2C%20Nahta%20Tower%2C%20Near%20Aditya%20Hospital%20MLB%20school%2C%20Road%2C%20Napier%20Town%2C%20Jabalpur%2C%20Madhya%20Pradesh%20482002!3m2!1d23.1610504!2d79.92876919999999!4m5!1s0x3981af0017c45061%3A0xe79395cdb8dcc17b!2sRuff%20and%20Tuff%20India%2C%20Ground%20Floor%20%2CNahta%20tower%20Near%20Aditya%20hospital%2C%20Napier%20Town%2C%20Jabalpur%2C%20Madhya%20Pradesh%20482001!3m2!1d23.1612375!2d79.9287188!5e0!3m2!1sen!2sin!4v1616219553107!5m2!1sen!2sin" width="100%" height="600" style="border:0;display: block" allowfullscreen="" loading="lazy"></iframe>
      <div class="contactformbg" data-aos="fade-up">
        <form method="post" id="contactForm" class="contact mb-0" action="contact_process.php">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-12 contact-form" data-aos="fade-left">
                <div class="title-header">
                  <h3 class="title-medium pull-left ml-0">Send us a message</h3>
                  <div class="icon pull-right"><i class="fa fa-envelope-o"></i></div>
                </div>
                 <div class="form-group">
                  <label for="name" class="bmd-label-floating">Your name</label>
                  <input type="text" class="form-control" id="name" name="first_name">
                </div><!--./form-group-->
                <div class="form-group">
                  <label for="email" class="bmd-label-floating">Your email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div><!--./form-group-->
                <div class="form-group">
                  <label for="mobile" class="bmd-label-floating">Your mobile</label>
                  <input type="text" class="form-control" id="mobile" name="contact">
                </div><!--./form-group-->
                <div class="form-group label-floating">
                  <label class="form-control-label bmd-label-floating" for="exampleInputTextarea"> You can write your text here...</label>
                  <textarea class="form-control" rows="5" name="message" id="comment"></textarea>
                </div><!--./form-group-->
                <div class="form-group">
                   <button class="btn btn-rose" type="submit" name="submit">Submit</button>
                </div><!--./form-group-->
              </div><!--./col-lg-8-->
              <div class="col-lg-4 col-md-12 col-12 information" data-aos="fade-right">
                <div class="title-header">
                  <h3 class="title-medium">Contact Information</h3>
                </div>
                <div class="contact-datails">
                  <div class="icon"><i class="fa fa-map-marker"></i></div>
                  <div class="info2">
                    <span class="detail">Ground Floor, Nahta Tower, Near Aditya Hospital, Napier Town, Jabalpur (M.P.)</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon"><i class="fa fa-phone"></i></div>
                  <div class="info2"><span class="detail">+91-9111163666</span></div>
                </div>
                <div class="contact-datails">
                   <div class="icon"><i class="fa fa-envelope"></i></div>
                   <div class="info2"><span class="detail">theatrangifest@gmail.com</span></div>
                </div>
                <div class="social text-center">
                <a type="button" class="btn btn-social btn-just-icon btn-round btn-facebook"><i class="fa fa-facebook"></i></a>
                <a type="button" class="btn btn-social btn-just-icon btn-round btn-google"><i class="fa fa-instagram"></i></a>
                <a type="button" class="btn btn-social btn-just-icon btn-round btn-youtube"><i class="fa fa-youtube"> </i></a>
                </div>
              </div><!--./col-lg-4-->
            </div><!--./row-->
          </div><!--./container-->
        </form><!--./contact--> 

      </div><!--./contactformbg-->
    </section>
<?php include("footer.php");?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
    
                  $('#contactForm').validate({ 
                      rules: {
                          first_name: {
                              required: true,
                              
                          },
                          last_name: {
                              required: true,
                              
                          },
                          email: {
                              required: true,
                              email: true
                              
                          },
                          contact: {
                              required: true,
                              number: true,
                          },
                          message: {
                              required: true,
                          }
                          
                          
    
                      },
                  });
    
              });
  </script>