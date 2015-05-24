<?php 
 session_start();
// If they are not logged in, send them to login page
if(!isset($_SESSION['username'])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css/applogo1.css">
  <script src="jquery/jquery-1.11.3.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/spectrum.css">
  
  <script>
$(document).ready(function(){
	$(".bb_ques").click(function(){
		$(".browewin").click();	
	});
    
});

  </script>
  <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // run the effect
      $( ".hide_toggle" ).toggle( selectedEffect, options, 500 );
    };
 
    // set effect from select menu value
    $( "#taber" ).click(function() {
      runEffect();
    });
	
  });
  
  </script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Drop-Down List Styling</title>
  <meta name="description" content="Custom Drop-Down List Styling with CSS3" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
  <noscript>
  <link rel="stylesheet" type="text/css" href="css/noJS.css" />
  </noscript>
  </head><body>
<header>
  <div class="wrapper">
    <div class="outer_header">
      <div class="logo head"> <img src="images/logo.jpg" alt="logo"> </div>
      <div class="ryt_admin">
        <div class="inner_admin">
          <div class="droper">
            <div class="dropper_inner">
              <div class="user_name"> Admin <img src="images/arrow.jpg" alt="arrow" id="show"> </div>
              <div class="htab_o">
                <div class="htab hr_l"> Change Password </div>
                <div class="htab"> Logout </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	</header>
<div class="sec_create">
    <h2 class="sec_head_ques"> Create a Questionnaire</h2>
  </div>
 <section style="background-color:red;">
    <div class="wrapper">
    <div class="container ww">
    <h2 class="wel_head"> Would you like a Welcome page</h2>
    <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="taber" checked>
    <label class="onoffswitch-label" for="taber"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
  </div>
    <div class="show_toggle">
    <div class="hide_toggle">
    <div class="header_browse">
        <div class="browse">
        <div class="photo_head">
            <h3> Header Photo </h3>
          </div>
        <div class="button_browse">
            <button class="bb_ques" type="button">Browse</button>
            <input type="file" class="browewin" style="display:none;"/>
          </div>
      </div>
        <div class="outer_title1">
        <div class="inner_title1 fleft">
            <label>Title</label>
            <br>
            <input type="text" class="title_text title_text1">
          </div>
        <div class="inner_title1 fleft ">
            <label>Title Size</label>
            <br>
            <div class="wrapper-demo">
            <div id="dd" class="wrapper-dropdown-3" tabindex="1"> <span>Dropdown </span>
                <ul class="dropdown">
                <li><a href="#">Element 1</a></li>
                <li><a href="#">Element 2</a></li>
                <li><a href="#">Element 3</a></li>
              </ul>
              </div>
            ​</div>
          </div>
        <div class="inner_title1 fleft">
            <label>Title Font</label>
            <br>
            <div class="wrapper-demo">
            <div id="dd1" class="wrapper-dropdown-3" tabindex="1"> <span>Dropdown </span>
                <ul class="dropdown">
                <li><a href="#">Element 1</a></li>
                <li><a href="#">Element 2</a></li>
                <li><a href="#">Element 3</a></li>
              </ul>
              </div>
            ​</div>
          </div>
        <div class="inner_title1 fleft">
            <label>Title Color</label>
            <br>
         <div class='example'>
                  <input type='text' name='preferredRgb' id='13' value='orangered' />
                    
              </div>
          </div>
      </div>
        <div class="clear"> </div>
        <div class="outer_title1">
        <div class="inner_title1 fleft">
            <label>Text</label>
            <br>
            <textarea rows="5" cols="25"></textarea>
          </div>
        <div class="inner_title1 fleft ">
            <label>Title Size</label>
            <br>
            <input type="number" class="title_size title_size1">
          </div>
        <div class="inner_title1 fleft">
            <label>Title Font</label>
            <br>
            <input type="number" class="title_size title_size_font title_size1">
          </div>
        <div class="inner_title1 fleft">
            <label>Title Color</label>
            <br>
             <div class='example'>
                  <input type='text' name='preferredRgb' id='14' value='orangered' />
                    
              </div>
          </div>
      </div>
        <div class="clear"> </div>
      </div>

 
        <div class="outer_title1">
        <div class="inner_title3 inner_title_ttl  fleft">
            <label class="sec_head_ques1 "> Background-image </label>
            <div class="sec_ques_div">
            <input type="text" class="fleft" >
            <button class="bb_ques fleft">Browse..</button>
          </div>
          </div>
        <div class="inner_title3 inner_title_ttl fleft ">
            <label>Background-color</label>
            <br>
             <div class='example'>
                  <input type='text' name='preferredRgb' id='15' value='orangered' />
                    
              </div>
          </div>
      </div>
        <div class="clear"> </div>
    


  
    <div class="outer_sec5">
        <div class="outer_title1">
        <div class="inner_title1 fleft">
        <label> Button Text</label>
        <br>
        <input type="text">
      </div>
        <div class="inner_title3 fleft ">
        <label>Button-color</label>
        <br>
         <div class='example'>
                  <input type='text' name='preferredRgb' id='16' value='orangered' />
                    
              </div>
      </div>
        <div class="inner_title1 fleft ">
        <label>Button Size</label>
        <br>
        <input type="number" class="title_size title_size1">
      </div>
        <div class="inner_title fleft">
        <label>Show/Hide Button</label>
        <br>
        <div class="onoffswitch1">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab2" checked>
        <label class="onoffswitch-label" for="tab2">
        <span class="onoffswitch-inner onoffswitch-inner1"></span> <span class="onoffswitch-switch onoffswitch-switch1"></span></label>
        </div>
        <!--label class=" fright"> Show</label-->
        </div>
        </div>
        <div class="clear"> </div>
      </div>
	

    <div class="wel_lastpara"> <span class="wel_lastpara_span">Tap anywhere on screen to enter questionnaire?</span>
        <div class="inner_title fright">
        <div class="onoffswitch1">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab3" checked>
            <label class="onoffswitch-label" for="tab3"> <span class="onoffswitch-inner onoffswitch-inner1"></span> <span class="onoffswitch-switch onoffswitch-switch1"></span> </label>
          </div>
     
      </div>
      </div>
 </div>
        </div>
      <div class="lastouter_sec1">
        <a href="http://codenomad.net/promoapps/questionnaire_question.php"><button class="butt_view bb_sec6"> Save&Next </button></a>
        <a href="http://codenomad.net/promoapps/admin.php"><button class="butt_view bb_sec6"> Save&Exit </button></a>
        <button class="butt_view bb_sec6 bb_bg"> Cancel </button>
      </div>
       <div class="clear"> </div>  
      </div><!--container-->
      
</div><!--wrapper-->


   </section>
    


<!-- jQuery if needed --> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript">
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});

		</script>
        <script type="text/javascript">
			
			function DropDown(el) {
				this.dd1 = el;
				this.placeholder = this.dd1.children('span');
				this.opts = this.dd1.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd1.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd1 = new DropDown( $('#dd1') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});

		</script>
        <script type="text/javascript" src="jquery/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery/spectrum.js"></script>
  <script type='text/javascript' src="jquery/docs.js"></script>
</body>
</html>