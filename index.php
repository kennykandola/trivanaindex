<!DOCTYPE html>
<html>
<head>
    <title>Trivana Landing</title>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type=
    "text/javascript"></script> 
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" type=
    "text/javascript"></script>
    
<!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href=
    "http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
    rel="stylesheet">
    <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <link href="bootstrap-datepicker3.min.css" rel="stylesheet">
    

<!-- Original Stylesheets -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
<!--     <link href="css/responsive.css" rel="stylesheet" type="text/css"> -->

<!-- Font stylesheets -->
    <link href=
    'http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel=
    'stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,700,400,300' rel='stylesheet' type='text/css'>

<!-- LayerSlider stylesheet -->
    <link href="layerslider/css/layerslider.css" rel="stylesheet" type=
    "text/css">

<!-- home search box-->
    <script src=
    "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script src="js/home.js" type="text/javascript"></script>


<!-- icons -->
    <link rel="stylesheet" href="https://i.icomoon.io/public/7500853f37/Trivana/style.css">

<!-- fumi -->
    <link href="css/fumi-normalize.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/fumi.css" rel="stylesheet" type="text/css">

<!-- reminder form -->
        <link rel="stylesheet" type="text/css" href="reminder/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="reminder/css/component.css" />
        <link rel="stylesheet" type="text/css" href="reminder/css/cs-select.css" />
        <link rel="stylesheet" type="text/css" href="reminder/css/cs-skin-boxes.css" />
        <script src="js/modernizr.custom.js"></script>

<!-- module -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    
    <meta charset="UTF-8">
    <meta content="initial-scale=1, maximum-scale=1" name="viewport">
</head>

<!-- change bootstrap blue highlight -->
<style>
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {   
/*  border-color: rgba(204, 102, 153, 0.8) !important;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(204, 102, 153, 0.6) !important;
  outline: 0 none !important;*/
/*  border-bottom: 2px solid rgba(0,0,0,0.2) !important;*/
  box-shadow: #999999 !important;
  outline: 0 none !important;
}

#sandbox-container input input:focus
{
    box-shadow:none;
}

#sandbox-container input
{
    border-bottom:2px solid rgba(0,0,0,0.2);
    box-shadow:none;
}

.ls-inner{
    width: auto !important;
}
</style>

<body style="font-family: 'Raleway', sans-serif;";>
    <!--responsive menu placeholder-->

    <div id="followMenu">
        <ul>
           <li><img src="img/trivana-logo-temp-purple.png"></li>
        </ul>
        <div class="clear"></div>
    </div><!--BEGIN TOP CONTAINER (slider&nav)-->

    <section id="topContainer">
    <div class="container">
        <div id="navigationWrap">
            <div class="row">
                <div class="text-center"><img alt="Trivana Logo" src=
                "img/trivana-logo-temp-white.png" style="width:200px; height:auto; margin: 0 auto;"></div>
            </div>
        </div><!-- end of nav -->
        <!-- BEGIN SLIDER -->

        <div id="sliderWraper">
            <div id="layerslider" style="height: 690px; ">
                <!-- main slide -->

            <div class="row">
            <div class="ls-slide text-center" style="width: 100% !important; position:relative;">
                    <!--  <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150" alt="Phone" class="ls-l" style="top: 30px; left: 0;" 
                        data-ls="offsetxin: 0; offsetxout : 0; offsetyin: 100; durationin: 2000" /> -->
              
                        <p class="ls-l sliderText text-center" data-ls="offsetxin: 0; offsetxout : 0; offsetyin: 50; durationin: 2000;" style="font-size:25px; position:relative;"><span>Your Delivery Service When Traveling</span><br><br>Start saving time and money<br>on your visit to NYC!</p> 
             

                <form class="ls-l " data-ls=
                    "offsetxin: 0; offsetxout: 0; delayin: 300; offsetyin: 100; durationin: 2000; action="
                    id="target" name="target" style="top: 100px;  font-size: 25px; margin: 0 auto; right:0;">
                    
                    <div class="" style="margin:0 auto; float: none; margin-top:20px;">  
                        <section class="content ">
                            <span class="input input--fumi">
                                <input id="pac-input" class="input__field input__field--fumi" type="text" id="input-23" placeholder=""/>
                                <label class="input__label input__label--fumi" for="input-23">
                                <i class="fa fa-fw fa-map-marker icon icon--fumi"></i>
                                <span class="input__label-content input__label-content--fumi" style="font-size:20px; font-style:italic; font-weight:500;">Hotel name or Delivery Address</span>
                                </label>
                            </span>

                        </section>
                    </div><!-- /input container -->
                    <script src="js/classie.js"></script>
    <!--                         <input onclick="return btntest_onclick()" type=
                            "submit" value="Submit" style="margin:0 auto;"> -->


                        <a href="#contentWrapper">
                        <i class="fa fa-angle-double-down text-center" style="color:white; font-size:60px; margin-top:310px;"></i></a>
                    </form>
                </div>
            </div> <!--end of row-->
            </div><!--end of layers slider-->

        </div><!-- END SLIDER wrapper-->

    </div> <!-- end of container -->
    </section><!--END TOP CONTAINER-->
    <!--BEGIN CONTENT WRAPPER-->

    <div id="contentWrapper">

        <!--add your own sections in this div-->
        <!--ABOUT CONTAINER-->

        <section class="section-80-130 whiteBgSection" id="aboutContainer">

        <div class="container">
            <div class="row col-md-12 text-center">
                 <h1 class="sectionTitle wow fadeInUp" data-wow-delay="0.2s">How It Works</h1>

                 <div class="titleSeparator wow fadeInUp" data-wow-delay="0.2s"></div>
            </div>

            <div class="row">
                 <div class="col-md-4">
                    <div class="iconColWrap wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fa fs1" style="width:150px; height:150px;"><span class="icon-hotel-icon" style="font-size:140%;"></span></i>   

                        <h2 style="color:#774478">1. ENTER LOCATION</h2>

                        <p>Tell us where you’re staying. We deliver to all hotels in the New York City area.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="iconColWrap wow fadeInUp" data-wow-delay="0.5s">
                        <i class="fa fs1" style="width:150px; height:150px;"><span class="icon-order-icon" style="font-size:140%;margin:0em -2em 0em -2.1em;"></span></i>   

                        <h2 style="color:#774478">2. ORDER</h2>

                        <p>Place your order and save on things that you would normally be overcharged for.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="iconColWrap wow fadeInUp" data-wow-delay="0.6s">
                        <i class="fa fs1" style="width:150px; height:150px;"><span class="icon-enjoy-icon" style="font-size:150%;margin:1em 0em;"></span></i>   

                        <h2 style="color:#774478">3. ENJOY</h2>

                        <p>Your order will be delivered at check-in or during your preferred 1-hour window of time.</p>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
            <!--  <img alt="" class="triangleBottom" src=
            "img/tri-white-bot.png"> -->
        </div>
        </section> <!--END ABOUT CONTAINER-->
        <!--FEATURES CONTAINER-->

        
        <!--END FEATURES CONTAINER-->
        <!--REVIEW CONTAINER-->

        <section class="section-160-160 textureBgSection" id="reviewContainer"
        style="background-image: url('img/polygon7.png');">

        <div class="container-fluid">
           
            <div class="col-md-12 text-center" style="margin-bottom:30px;">
    
            <h1 class="sectionTitle wow fadeInUp" data-wow-delay="0.5s" style="font-size:55px; font-weight:400;">SAVE</h1>
            <h3 class="sectionDescription wow fadeInUp" data-wow-delay="0.6s" style="font-size:40px; font-weight:400;">&nbsp; TIME &nbsp; &amp; &nbsp; MONEY</h3>
            
            </div>

        <div class="container-fluid">

            <div class="col-md-3 text-right save-caption wow fadeInUp" data-wow-delay="0.8s" style="font-weight:300; padding-left:40px;">Your vacation time is valuable&mdash;don’t waste it on searching for things you already know you will need for your trip.</div>
              
                <div class="col-md-6 padding-0 wow fadeInUp" data-wow-delay="0.9s"> 
                <!-- <img src="img/timeandmoney.png"/ class="col-md-12"> -->

                    <div class="container-fluid">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="img/time1.png" class="im-left img-responsive left-block" style="padding: 0px 0 15px 28px"/>
                        </div> <!-- end of col -->
                        
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            
                        </div> <!-- end of col -->

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="img/moneybag1.png" class="row im-right img-responsive right-block" style="padding:0 0px 15px 0px; margin-left: -20px;"/>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                    <div class="container-fluid">
                        <div class="col-md-12">
                            <img src="img/bar1.png" class="im-bar img-responsive center-block" style="padding-bottom:10px;"/>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                    <div class="container-fluid">
                        <div class="col-md-12">
                            <img src="img/triangle1.png" class="img-responsive center-block" style="width:10%;"/>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->


             </div>
            
             <div class="col-xs-12 col-md-3 text-left save-caption wow fadeInUp" data-wow-delay="0.8s" style="font-weight:300;padding-right:40px;"> Why pay for overpriced hotel goods? With Trivana, you don't have to worry about paying extra while you’re traveling.</div>

            </div><!--end of container fluid-->

            

            <div class="row">
                <div class="eight-col prefix-two last-col testWrapper">
              
                </div>

            </div>

        </div> <!-- END OF CONTAINER -->

        </section><!--END REVIEW CONTAINER-->
        <!--SCREENS CONTAINER-->
            
        </section><!--END SCREENS WRAPPER-->
        <!--BEGIN DEMO WRAPPER-->
<?php

if( session_status() == PHP_SESSION_NONE ) session_start();


            if (isset($_POST['submit'])) {


                


                $message =

                    'Name = ' . $_POST['q1'] . '<br />
    Email = ' . $_POST['q2'] . '<br />
    Travel Date = ' . $_POST['q3'] . '<br />
    Other Notes = ' . $_POST['q4'] . '<br />

    ';




                require '/home/trivanac/public_html/phpmailer/PHPMailer-master/PHPMailerAutoload.php';

                $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'localhost';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'kenny@trivana.co';                 // SMTP username
                $mail->Password = 'indian32';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->From = ('kenny@trivana.co');
                $mail->FromName = 'Trivana';
                $mail->addAddress('kenny@trivana.co', 'Trivana Rep.');    // kennykandola89@gmail.com // Add a recipient
                $mail->addAddress($_POST['q2']);               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC();
                $mail->addBCC();

                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML
                $email_from = 'email';

                $mail->Subject = 'Hello from Trivana';
                $mail->Body = ($message);

                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


               


            };
?>
        <section class="section-80-80 grayBgSection" id="demoContainer">
            <!-- <img alt="" class="triangleTop" src="img/tri-gray-top.png"> -->

        <div class="container">
            

        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="sectionTitle wow fadeInUp" data-wow-delay="0.2s">Need a Reminder?</h1>

                <div class="titleSeparator wow fadeInUp" data-wow-delay="0.2s"></div>

                <h3 class="sectionDescription wow fadeInUp" data-wow-delay="0.3s">Enter your email address and travel date,<br>and we’ll send you a reminder to place an order closer to your travel date!</h3>

                <div class="separator80"></div>
          </div> <!-- end of col -->
        </div> <!--end of row 1-->

        <div class="row">
            <div class="col-md-12 text center">

            <div class="fs-form-wrap wow fadeInUp" data-wow-delay="0.4s" id="fs-form-wrap">

                <form id="myform" class="fs-form fs-form-full" autocomplete="off">
                    <ol class="fs-fields">
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
                            <input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="ex. Kenny Howell" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?</label>
                            <input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="ex. khowell@gmail.com" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q5">When is your travel date?</label>
                        <!--date picker-->
                        <div id="sandbox-container">
                        <input type="date" class="form-control fs-anim-lower" id="q3" name="q3" type="number" placeholder="06/10/2015" required/>
                        </div>  
     
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q4">Other Notes for Yourself</label>
                            <textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
                        </li>
                    </ol><!-- /fs-fields -->
                    <button class="fs-submit" type="submit">Send answers</button>

                </form><!-- /fs-form -->

                <p class="form-done" style="font-size: 30px; color:#774478; opacity: 0; text-align:center;padding:10%;">Thank you for your submission &mdash; we'll be in touch.<br><br>Safe Travels!</p>

            </div><!-- /fs-form-wrap -->

            </div><!-- end of col -->
        </div> <!-- end of row -->
            
            <!-- <img alt="" class="triangleBottom" src=
            "img/tri-gray-bot.png"> -->
        </div> <!--end of container-->
        </section><!--END REMINDER WRAPPER-->
        
        <!--BEGIN TESTIMONIALS CONTAINER-->

        <!-- <section class="section-160-160 textureBgSection" id="testimonials"
        style="background-image: url('img/polygon7.png'); ">
            <h1 class="sectionTitle wow fadeInUp" data-wow-delay="0.3s">TESTIMONIALS</h1>

            <div class="titleSeparator wow fadeInUp" data-wow-delay="0.3s"></div>

            <h3 class="sectionDescription wow fadeInUp" data-wow-delay="0.4s">See what others have to say about Trivana!</h3>

            <div class="separator80"></div>

            <div class="row alignTextcenter">
                
                <div class="revViewport wow fadeInUp" data-wow-delay="0.6s">
                        <div class="revWrap">
                            <div class="revLeft"><img alt="happy customer"
                            class="revCustomer" src=
                            "img/demoimg/review_image1.png"></div>

                            <div class="revRight">
                                <div class="arrowLeftRev"></div>

                                <div class="revBubble">
                                    <p class="revText">"I love Trivana! I
                                    highly recommend it!"</p>

                                    <p class="revAuthor">- Sue Lue <img alt=
                                    "5/5 Stars!" class="revStars" src=
                                    "img/5stars.jpg"></p>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="revWrap">
                            <div class="revLeft"><img alt="happy customer"
                            class="revCustomer" src=
                            "img/demoimg/review_image2.png"></div>

                            <div class="revRight">
                                <div class="arrowLeftRev"></div>

                                <div class="revBubble">
                                    <p class="revText">"Life Saver!"</p>

                                    <p class="revAuthor">- John Doe <img alt=
                                    "5/5 Stars!" class="revStars" src=
                                    "img/5stars.jpg"></p>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="revWrap">
                            <div class="revLeft"><img alt="happy customer"
                            class="revCustomer" src=
                            "img/demoimg/review_image3.png"></div>

                            <div class="revRight">
                                <div class="arrowLeftRev"></div>

                                <div class="revBubble">
                                    <p class="revText">"I can't imagine my life
                                    without it!"</p>

                                    <p class="revAuthor">- Anna L. <img alt=
                                    "5/5 Stars!" class="revStars" src=
                                    "img/5stars.jpg"></p>
                                </div>

                            </div>

                            <div class="clear"></div>
                        </div>
                    </div>

            </div>
                <div id="revsNavi" class="wow fadeInUp" data-wow-delay="0.6s"></div>

        </section> -->

        <section class="section-getstarted textureBgSection" id="testimonials" style="background-color:#410d51">
            <div class="row">
                <div class="col-md-5" style="padding-top:23px;"><hr class="getstartedline"></hr></div>
                <div class="col-md-2 getstarted"><a href="#"><i class="fa fa-angle-double-up" style="font-size:30px;"></i><span>GET STARTED</span></a></div>
                <div class="col-md-5" style="padding-top:23px;"><hr class="getstartedline"></hr></div>
            </div> <!-- end of row -->

        </section>

        <!--END TESTIMONIALS WRAPPER-->


            <!--BEGIN FOOTER WRAPPER-->
        <section id="footerContainer" class="section-160-30 footer" style="background-color:#410d51">
        
            
                <a href="http://www.google.com" class="btn btn-social-icon btn-twitter">
                <i class="fa fa-twitter"></i></a>
                <a href="http://www.google.com" class="btn btn-social-icon btn-facebook">
                <i class="fa fa-facebook"></i></a>                
                <a href="http://www.google.com" class="btn btn-social-icon btn-google-plus">
                <i class="fa fa-google-plus"></i></a>  

                    <ul class="footerMenu">
                        <li><a href="#aboutContainer">About</a></li>
                        <li><a href="#featureContainer">FAQs</a></li>
                        <li><a href="#reviewContainer">Contact</a></li>
                    </ul>

                    <p style="padding:25px 0px 0px 0px; font-size:13px;font-style:italic;color:#bfbfbf"> Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Trivana. All Rights Reserved</p>

        </section>
        <!--END FOOTER WRAPPER-->
            
    </div><!--END CONTENT WRAPPER-->
    </div><!--END CONTENT WRAPPER-->

    <div class="fa fa-bars" id="responsiveMenuToggle" style=
    "font-style: italic"></div>

<!-- Main JS -->
     <script src="js/main.js" type="text/javascript"></script>

<!-- For input box -->
     <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
        </script>

<!-- GreenSock -->
    <script src="layerslider/js/greensock.js" type="text/javascript"></script> 

<!-- for date picker -->
    <script>
    // $('#sandbox-container input').datepicker({ });
    </script>

<!-- for reminder form -->
    <script src="reminder/js/classie.js"></script>
    <script src="reminder/js/selectFx.js"></script>
    <script src="reminder/js/fullscreenForm.js"></script>
    <script>
            (function() {
                var formWrap = document.getElementById( 'fs-form-wrap' );

                [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
                    new SelectFx( el, {
                        stickyPlaceholder: false,
                        onChange: function(val){
                            document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                        }
                    });
                } );

                new FForm( formWrap, {
                    onReview : function() {
                        classie.add( document.body, 'overview' ); // for demo purposes only
                    }
                } );
            })();
    </script>

<!-- LayerSlider script files -->
     <script src="layerslider/js/layerslider.transitions.js" type=
    "text/javascript"></script> 
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js"
    type="text/javascript"></script> <!-- Lightbox -->
     <script src="js/lightbox.min.js"></script> <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-62739209-1', 'auto');
        ga('send', 'pageview');
    </script> <!-- Shuffle.js (screens) -->
     <script src="js/jquery.shuffle.modernizr.js"></script> <!-- Layer Slider init -->
     <script type="text/javascript">
    $(document).ready(function(){
            $('#layerslider').layerSlider({
                thumbnailNavigation: 'disabled',
                skinsPath: 'layerslider/skins/',
                navPrevNext: false,
                navStartStop: false,
                showCircleTimer: false
            });

        });
    </script> 

<!-- Module Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script>
 new WOW().init();
</script>

<script>
        function isScrolledIntoView(elem)
        {
            var $elem = $(elem);
            var $window = $(window);

            var docViewTop = $window.scrollTop();
            var docViewBottom = docViewTop + $window.height();

            var elemTop = $elem.offset().top;
            var elemBottom = elemTop + $elem.height();

            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }
$(window).on("scroll", function(){
    console.log( isScrolledIntoView( "#reviewContainer" ) );
    if (  isScrolledIntoView( "#reviewContainer" )  ){
        $(".im-left, .im-right, .im-bar").addClass("do-anim");
    }
});
</script>

<script>
$(document).ready(function(){
$('.getstarted').on('click', function(){
$('html,body').animate({scrollTop: $('html, body').offset().top
}, 1000);

});
})
</script>

<!-- begin olark code for contact module 
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5554-840-10-6901');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5554-840-10-6901/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
end olark code -->

<!-- home input code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62739209-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
