<?php include("header.php");?>
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('assets/images/slider2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Registration</h1>
        </div>
      </div>
    </div>
</div>

<section class="section">
 <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="section-wrap" data-aos="fade-up">
            <div class="subtitle">Atrangi Register</div>
            <h2 class="section-title">Pre <b>Registration Form</b></h2>
            <div class=bar></div>
            <div class="bg-title lax" data-lax-preset="driftRight">Register</div>
          </div><!--./section-wrap-->
        </div><!--./col-lg-12-->
       </div><!--./row-->
  <form name="frmInquiries" id="frmInquiries" class="mform registerform"  method="post" enctype="multipart/form-data" >
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Your First Name<span>*</span></label>
            <input type="text" class="form-control" name="contact_firstname" id="contact_firstname">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Your Last Name<span>*</span></label>
            <input type="text" class="form-control" name="contact_lastname" id="contact_lastname">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Brand Name<span>*</span></label>
            <input type="text" class="form-control" name="brand_name" id="brand_name">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Email<span>*</span></label>
            <input type="text" class="form-control" name="contact_email" id="contact_email">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Phone Number<span>*</span></label>
            <input type="text" class="form-control" id="phone_no" name="phone_no">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-6 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Which City Are You From<span>*</span></label>
            <input type="text" class="form-control" id="city" name="city">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <div>Your Brand's Facebook Link (If Any):</div>
          <div class="form-group">
            <label>(Please Provide Your Official Page Link Or A Page Which Has Your Brand Pictures Because This Will Help Us To Know Your Brand Better)</label>
            <input type="text" class="form-control" name="facebook_link" id="facebook_link">
             <div class="form-check mt-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" name="no_facebook_link" id="no_facebook_link">
                  We Do Not Have Facebook Presence For Our Brand
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <div>Your Brand's Instagram Link (If Any):</div>
          <div class="form-group">
            <label>(Please Provide Your Official Page Link Or A Page Which Has Your Brand Pictures Because This Will Help Us To Know Your Brand Better)</label>
            <input type="text" class="form-control" name="instagram_link" id="instagram_link">
             <div class="form-check mt-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" name="no_instagram_link" id="no_instagram_link">
                  We Do Not Have Instagram Presence For Our Brand
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <label>Your Brand's Website Link (If Any):</label>
          <div class="form-group">
            <label>(Please Provide Your Official Page Link Or A Page Which Has Your Brand Pictures Because This Will Help Us To Know Your Brand Better)</label>
            <input type="text" class="form-control" name="website_link" id="website_link">
             <div class="form-check mt-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" name="no_website_link" id="no_website_link">
                  We Do Not Have Website Presence For Our Brand
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <label>Select Your Category<span>*</span></label>
          <div class="form-group">
            <label>(Note- If you don't have your brand's Facebook, Instagram or Website links then please send us your product images [Minimum 10 - Maximum 20] at theatrangifest@gmail.com to help us curate your brand)</label>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="radio" name="thing" data-id="mechandise" value="valuable" class="form-check-input">
                   Merchandise
                  <span class="circle"><span class="check"></span></span>
                </label>
              </div>
              <div class="form-check form-check-inline">
                 <label class="form-check-label">
                  <input type="radio" name="thing" data-id="food" value="valuable"  class="form-check-input">
                   Food
                  <span class="circle"><span class="check"></span></span>
                </label>
              </div>
          </div><!--./form-group-->
          <div id="food" class="hide ml-4">
            <label class="mb-3">Select Your Sub Category:</label>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Apparel Women" value="Apparel Women">Apparel Women
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Men's Products" value="Men's Products">Men's Products
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Kids products" value="Kids products">Kids products
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Bags" value="Bags">Bags
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Shoes" value="Shoes">Shoes
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Jewelry" value="Jewelry">Jewelry
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Accessories" value="Accessories">Accessories
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Collectibles" value="Collectibles">Collectibles
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Home & Living (Includes Décor and Furniture)" value="Home & Living (Includes Decor and Furniture)">Home & Living (Includes Decor and Furniture)
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" ame="stall_for[]" id="Stationery" value="Stationery">Stationery
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

             <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Art" value="Art">Art
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" class="redio_button" id="other" value="other">Other
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
          </div><!--.#/food-->
          <div id="mechandise" class="hide ml-4">
            <label class="mb-3">Select Your Sub Category:</label>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Live food" value="Live food">Live food
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Packaged foods" value="Packaged foods">Packaged foods
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="stall_for[]" id="Desserts" value="Desserts">Desserts
                <span class="form-check-sign"><span class="check"></span></span>
              </label>
            </div><!--./form-check"-->
          </div><!--.#/mechandise-->
          <!-- <hr /> -->
        </div><!--./col-lg-12-->


        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <label>Please Indicate The Price Range Of Your Products<span>*</span></label>
          <div class="form-group">
            <label class="displaylock">You Can Choose Multiple Options)</label>
             <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="Less than 200">
                 Less Than 200
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="200-500">
                 200 - 500
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->

              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="500-1000">
                 500 - 1000
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->

               <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="1000-2500">
                 1000 - 2500
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->

              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="2500-5000">
                 2500 - 5000
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->

              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="price_range[]" value="5000 & more">
                 5000 & More
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div><!--./form-check-->

          </div><!--./form-group-->
          <!-- <hr /> -->
        </div><!--./col-lg-12-->

        <div class="col-lg-12 col-md-12 col-12 mt-3">
          <div class="form-group">
            <label>Have You Participated With The Lil Flea Before?<span>*</span></label>
            <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input participated" id="yes" value="Yes" type="radio" name="exampleRadios" id="exampleRadios1">
                   Yes
                  <span class="circle"><span class="check"></span></span>
                </label>
              </div>
              <div class="form-check">
                 <label class="form-check-label">
                  <input class="form-check-input participated" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                   No
                  <span class="circle"><span class="check"></span></span>
                </label>
              </div>
          </div><!--./form-group--> <!-- <hr /> -->
          <div class="row hide" id="many_times">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="form-group">
                <label for="name" class="bmd-label-floating">If Yes, How Many Times?</label>
                <input type="text" class="form-control numeric" name="total_time" id="total_time"  value="">
              </div><!--./form-group-->
            </div><!--./col-lg-12-->
          </div><!--./row-->
         
        </div><!--./col-lg-12-->

        <!-- <div class="col-lg-12 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">If Yes, How Many Times?<span>*</span></label>
            <input type="text" class="form-control" id="">
          </div>
        </div> -->

        <div class="col-lg-12 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Please Provide Us With A Brief Description About Your Brand?</label>
              <textarea class="form-control" rows="5" name="participate_details" id="participate_details"></textarea>
            </div>
          </div><!--./form-group-->
        
         <div class="col-lg-4 col-md-12 col-12 mt-4">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Verification Code</label>
            <img src="http://thelilflea.in/bookings/captcha.php?rand=1715671823" alt="" id="captchaimg"><a href="javascript: refreshCaptcha();"><img src="assets/images/refresh.gif" class="regenerate_captcha" alt="Refresh Verification code" title="Refresh Verification code" style="width:30px; cursor:pointer;"></a>
          </div><!--./form-group-->
        </div><!--./col-lg-6-->

        <div class="col-lg-8 col-md-12 col-12">
          <div class="form-group">
            <label for="name" class="bmd-label-floating">Please Enter Above Verification Code</label>
            <input type="text" class="form-control" name="verification_code" id="verification_code">
          </div><!--./form-group-->
        </div><!--./col-lg-6-->
      </div><!--./row-->
       <div class="col-lg-12 col-md-12 col-12">
          <div class="form-group">
            <button type="Submit" name="Submit" id="btnsubmit" class="btn btn-rose btn-round">Submit</button>
          </div><!--./form-group-->
        </div><!--./col-lg-6-->
      </form> 
    </div><!--./row-->
  </div><!--./container-->
</section> 
<?php include("footer.php");?>
<script type="text/javascript" src="assets/js/contact_form.js"></script>
<script type="text/javascript" src="assets/js/jquery.numeric.js"></script>
<script type="text/javascript" src="assets/js/index.js" ></script>
<script src="assets/js/fileinput.js" type="text/javascript"></script>
<script type="text/javascript">
  $('#frmInquiries').bootstrapValidator({
    //        live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                
                contact_firstname: {
                    validators: {
                        notEmpty: {
                            message: 'The First Name Is Required And Cannot Be Empty'
                        }
                    }
                },
                contact_lastname: {
                    validators: {
                        notEmpty: {
                            message: 'The Last Name Is Required And Cannot Be Empty'
                        }
                    }
                },
                contact_email: {
                  validators: {
                  notEmpty: {
                      message: 'The Email Address Is Required And Cannot Be Empty'
                },
                  emailAddress: {
                      message: 'The Email Address Is Not Valid'
                  }
                  }
                },

                phone_no: {
                  validators: {
                      notEmpty: {
                           message: 'Please Enter A Valid Mobile Number Of Ten Digits'
                      }
                  }
                },
                brand_name: {
                  validators: {
                      notEmpty: {
                           message: 'The Brand Name Is Required And Cannot Be Empty'
                      }
                  }
                },
                price_range: {
                  validators: {
                      notEmpty: {
                           message: 'The Price Range Is Required And Cannot Be Empty'
                      }
                  }
                },
                city: {
                  validators: {
                      notEmpty: {
                           message: 'The City Is Required And Cannot Be Empty'
                      }
                  }
                },
                
                participated_with_lil_flea: {
                    validators: {
                        notEmpty: {
                            message: 'The Participated With The Lil Flea Is Required And Cannot Be Empty'
                        }
                    }
                },
                verification_code: {
                    validators: {
                        notEmpty: {
                            message: 'The Verification Code Is Required And Cannot Be Empty'
                        }
                    }
                },
             }
        }).on('error.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(false); // disable submit buttons on errors
        }).on('status.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(false); // enable submit buttons on valid
        });
        
        function refreshCaptcha(){
      var img = document.images['captchaimg'];
      img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }

    $("#btnsubmit").submit(function(ev){ev.preventDefault();});
    $("#btnsubmit").on("click", function(){
      var bootstrapValidator = $("#frmInquiries").data('bootstrapValidator');
      bootstrapValidator.validate();
      $("#btnsubmit").prop('disabled', false);
      if(bootstrapValidator.isValid()){
                if($('#facebook_link').val()=='' && !$("#no_facebook_link").is(':checked')){
                    alert('Please Tick On The Checkbox(We Do Not Have Facebook Presence For Our Brand) Since You Haven\'t Provided Any Facebook Link.');
                    $("#no_facebook_link").focus();
                    return false;
                }
                else{
                    if(!/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test($('#facebook_link').val()) && $('#facebook_link').val()!=''){
                        alert('Please Enter Valid Facebook Url.');
                        $("#facebook_link").focus();
                        return false;
                    }
                }
                if($('#instagram_link').val()=='' && !$("#no_instagram_link").is(':checked')){
                   alert('Please Tick On The Checkbox(We Do Not Have Instagram Presence For Our Brand) Since You Haven\'t Provided Any Instagram Link.');
                    $("#no_instagram_link").focus();
                    return false;
                }
                else{
                    if(!/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test($('#instagram_link').val()) && $('#instagram_link').val()!=''){
                        alert('Please Enter Valid Instagram Url.');
                        $("#instagram_link").focus();
                        return false;
                    }
                }
                if($('#website_link').val()=='' && !$("#no_website_link").is(':checked')){
                    alert('Please Tick On The Checkbox(We Do Not Have Website Presence For Our Brand) Since You Haven\'t Provided Any Website Link.');
                    $("#no_website_link").focus();
                    return false;
                }
                else{
                    if(!/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test($('#website_link').val()) && $('#website_link').val()!=''){
                        alert('Please Enter Valid Website Url.');
                        $("#website_link").focus();
                        return false;
                    }
                }
        $("#btnsubmit").prop('disabled', false);
        if($("input[name='participated_with_lil_flea']:checked").val()=='Yes'){
          if($("#total_time").val()==''){
            alert("Please enter total time.");
            $("#total_time").focus();
            return false;
          }
                    document.frmInquiries.submit();
          /*if(confirm("If you are uploading images, please make sure that you have clicked 'UPLOAD' button placed near 'BROWSE' button.\n\nAre you sure you want to continue?"))
            document.frmInquiries.submit();
          else
            return false;*/ 
        }else{
                    document.frmInquiries.submit();
          /*if(confirm("If you are uploading images, please make sure that you have clicked 'UPLOAD' button placed near 'BROWSE' button.\n\nAre you sure you want to continue?"))
            document.frmInquiries.submit();
          else
            return false;*/ 
        }
      }else 
        return false;
    });
        $('.numeric').numeric();
</script>
<script>
$(':radio').change(function (event) {
    var id = $(this).data('id');
    $('#' + id).addClass('hide').siblings().removeClass('hide');
});
</script>